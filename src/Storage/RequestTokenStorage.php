<?php

namespace Xsolve\SalesforceClient\Storage;

use Xsolve\SalesforceClient\Security\Token\TokenInterface;

class RequestTokenStorage implements TokenStorageInterface
{
    /**
     * @var TokenInterface|null
     */
    protected $token = null;

    /**
     * {@inheritdoc}
     */
    public function get(): TokenInterface
    {
        return $this->token;
    }

    /**
     * {@inheritdoc}
     */
    public function has(): bool
    {
        return $this->token instanceof TokenInterface;
    }

    /**
     * {@inheritdoc}
     */
    public function save(TokenInterface $token)
    {
        $this->token = $token;
    }
}