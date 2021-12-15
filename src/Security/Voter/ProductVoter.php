<?php

namespace App\Security\Voter;

use App\Entity\Product;
use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Security;

class ProductVoter extends Voter
{
    const VIEW = 'view';
    const EDIT = 'edit';

    private Security $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    protected function supports(string $attribute, $subject): bool
    {
        return in_array($attribute, [self::EDIT, self::VIEW])
            && $subject instanceof \App\Entity\Product;
    }

    protected function voteOnAttribute(string $attribute, $subject, TokenInterface $token): bool
    {
        switch ($attribute) {
            case self::VIEW:
                return $this->canView($subject, $token);
            case self::EDIT:
                return $this->canEdit($subject, $token);
        }

        return false;
    }

    private function canView(Product $product, TokenInterface $token): bool
    {
        // if they can edit, they can view
        if ($this->canEdit($product, $token)) {
            return true;
        }

        return $product->getValidated() === Product::VALIDATED;
    }

    private function canEdit(Product $product, TokenInterface $token): bool
    {
        $user = $token->getUser();

        // the user must be logged in; if not, deny access
        if (!$user instanceof User) {
            return false;
        }
        if ($this->security->isGranted('ROLE_MANAGE_PRODUCTS')) {
            return true;
        }
        return $user === $product->getUser();
    }
}