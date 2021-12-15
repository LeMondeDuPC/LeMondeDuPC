<?php

namespace App\Security\Voter;

use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Security;

class UserVoter extends Voter
{
    const EDIT = 'edit';
    const TWO_FA = '2fa';

    private Security $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    protected function supports(string $attribute, $subject): bool
    {
        return in_array($attribute, [self::EDIT, self::TWO_FA])
            && $subject instanceof \App\Entity\User;
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
            case self::TWO_FA:
                return $this->canTwoFA($subject, $user);
        }

        return false;
    }

    private function canEdit(User $subject, User $user): bool
    {
        if ($this->security->isGranted('ROLE_MANAGE_USERS') or $this->canTwoFA($subject, $user)) {
            return true;
        }
        return false;
    }

    private function canTwoFA(User $subject, User $user): bool
    {
        return $user === $subject;
    }
}
