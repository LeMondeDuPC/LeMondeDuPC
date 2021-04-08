<?php

namespace App\Command;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Service\SenderService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

/**
 * Class NewsletterCommand
 * @package App\Command
 */
class NewsletterCommand extends Command
{
    /**
     * @var string
     */
    protected static $defaultName = 'app:newsletter';

    /**
     * @var SenderService
     */
    private SenderService $senderService;
    /**
     * @var UserRepository
     */
    private UserRepository $userRepository;

    /**
     * NewsletterCommand constructor.
     * @param SenderService $senderService
     * @param UserRepository $userRepository
     */
    public function __construct(SenderService $senderService, UserRepository $userRepository)
    {
        $this->senderService = $senderService;
        $this->userRepository = $userRepository;
        parent::__construct();
    }

    /**
     *
     */
    protected function configure()
    {
        $this
            ->setDescription('Sending a newsletter to users');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $users = $this->userRepository->findBy(['newsletter' => User::VALIDATED]);

        $this->senderService->newsletterEmail($users);
        $io->success('Mails send');

        return 0;
    }
}
