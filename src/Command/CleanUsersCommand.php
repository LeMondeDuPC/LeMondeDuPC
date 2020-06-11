<?php

namespace App\Command;

use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class CleanUsersCommand extends Command
{
    protected static $defaultName = 'app:clean-users';

    private $userRepository;
    private $entityManager;

    public function __construct(UserRepository $userRepository, EntityManagerInterface $entityManager)
    {
        $this->userRepository = $userRepository;
        $this->entityManager = $entityManager;
        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setDescription('Remove invalidated users after some days')
            ->addArgument('days', InputArgument::OPTIONAL, 'Limit days');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $days = $input->getArgument('days');

        if ($days) {
            $users = $this->userRepository->findBy(['validated' => false]);
            foreach ($users as $user) {
                $interval = intval(date_diff($user->getTimePublication(), date_create(date('Y-m-d H:i:s')))->format('%a'));
                if ($interval >= $days) {
                    $this->entityManager->remove($user);
                }
            }
            $this->entityManager->flush();
            $io->success('Users cleaned');
            return 0;
        }
        return 1;
    }
}