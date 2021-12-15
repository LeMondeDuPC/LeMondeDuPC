<?php

namespace App\Security\Voter;

use App\Entity\User;
use App\Entity\Vote;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Security;

class VoteVoter extends Voter
{
    const EDIT = 'edit';
    const REACT = 'react';

    private Security $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    protected function supports(string $attribute, $subject): bool
    {
        return in_array($attribute, [self::EDIT, self::REACT])
            && $subject instanceof \App\Entity\Vote;
    }

    protected function voteOnAttribute(string $attribute, $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();
        // if the user is anonymous, do not grant access
        if (!$user instanceof User) {
            return false;
        }

        switch ($attribute) {
            case self::EDIT:
                return $this->canEdit($subject, $user);
        }

        return false;
    }

    private function canEdit(Vote $vote, User $user): bool
    {
        return $this->security->isGranted('ROLE_MANAGE_VOTES') or $vote->getUser() === $user;
    }
}
