<?php

namespace App\Command;

use App\Entity\Partner;
use App\Repository\PartnerRepository;
use DateInterval;
use DateTime;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

/**
 *
 */
class RSSCommand extends Command
{
    /**
     * @var string
     */
    protected static $defaultName = 'app:rss';

    /**
     * @var AdapterInterface
     */
    private AdapterInterface $cache;

    /**
     * @var PartnerRepository
     */
    private PartnerRepository $partnerRepository;

    /**
     * CleanUsersCommand constructor.
     */
    public function __construct(AdapterInterface $cache, PartnerRepository $partnerRepository)
    {
        $this->cache = $cache;
        $this->partnerRepository = $partnerRepository;
        parent::__construct();
    }

    /**
     * @return void
     */
    protected function configure(): void
    {
        $this
            ->setDescription('Getting the rss feed from partners');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     * @throws \Psr\Cache\InvalidArgumentException
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $cachedRss = $this->cache->getItem('rss');
        $date = new DateTime();
        $date->add(new DateInterval('P2D'));
        $cachedRss->expiresAt($date);
        $rss = [];
        foreach ($this->partnerRepository->findBy(['rss' => true]) as $partner) {
            $xml = json_decode(json_encode((array)simplexml_load_file($partner->getLink())), true);
            $items = array_slice($xml['channel']['item'], 0, Partner::RSS_ITEM_PER_PARTNER);
            foreach ($items as $item) {
                $rss[] = $item;
            }
        }
        usort($rss, function ($a, $b) {
            return strtotime($b['pubDate']) - strtotime($a['pubDate']);
        });
        $cachedRss->set($rss);
        $this->cache->save($cachedRss);
        $io->success('Feed received');

        return 0;
    }
}
