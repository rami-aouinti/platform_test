<?php

namespace App\Twig\Generator;


use App\Repository\DepartmentRepository;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

/**
 * Class that allows to publish an Update object.
 */
class NavGenerator
{

    /**
     * @var TokenStorageInterface
     */
    private TokenStorageInterface $tokenStorage;

    /**
     * NavGenerator constructor.
     * @param TokenStorageInterface $tokenStorage
     */
    public function __construct(TokenStorageInterface $tokenStorage)
    {
        $this->tokenStorage = $tokenStorage;
    }

    /**
     * Returns unread notifications to the twig global variable 'notifications'.
     *
     * @return \App\Entity\Department[]
     */
    public function getUserNavigations() : array
    {
        $departments = [];
        foreach ($this->tokenStorage->getToken()->getUser()->getDepartments() as $department) {
            $departments[] = $department;
        }
        return $departments;
    }
}
