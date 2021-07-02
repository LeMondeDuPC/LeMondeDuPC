<?php

namespace App\Command;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

/**
 * Class CleanUsersCommand
 * @package App\Command
 */
class CleanUsersCommand extends Command
{
    /**
     * @var string
     */
    protected static $defaultName = 'app:clean-users';

    /**
     * @var UserRepository
     */
    private UserRepository $userRepository;
    /**
     * @var EntityManagerInterface
     */
    private EntityManagerInterface $entityManager;

    /**
     * CleanUsersCommand constructor.
     * @param UserRepository $userRepository
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(UserRepository $userRepository, EntityManagerInterface $entityManager)
    {
        $this->userRepository = $userRepository;
        $this->entityManager = $entityManager;
        parent::__construct();
    }

    /**
     *
     */
    protected function configure()
    {
        $this
            ->setDescription('Remove invalidated users after some days')
            ->addArgument('days', InputArgument::OPTIONAL, 'Limit days');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $days = $input->getArgument('days');

        $users = $this->userRepository->findBy(['validated' => true]);
        foreach ($users as $user) {
            $user->setConfirmKey(null);
        }
        $this->entityManager->flush();
        $io->success('Confirm keys cleaned');

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
        } else {
            $users = $this->userRepository->findBy(['validated' => User::VALIDATED]);
            foreach ($users as $user) {
                $user->setScore(0);
            }
            $this->entityManager->flush();
            $io->success('Scores cleaned');
            return 0;
        }
    }
}