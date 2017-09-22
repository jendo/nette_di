<?php

namespace MyApp\App;

use MyApp\Manager\NewsletterManager;
use MyApp\User\UserFactory;
use Nette\Http\Request;

class App
{
    /**
     * @var NewsletterManager
     */
    private $newsletterManager;

    /**
     * @var UserFactory
     */
    private $userFactory;

    /**
     * @var Request
     */
    private $request;

    /**
     * @param Request $request
     * @param NewsletterManager $newsletterManager
     * @param UserFactory $userFactory
     */
    public function __construct(
        Request $request,
        NewsletterManager $newsletterManager,
        UserFactory $userFactory
    ) {
        $this->newsletterManager = $newsletterManager;
        $this->userFactory = $userFactory;
        $this->request = $request;
    }

    public function run()
    {
        var_dump($this->newsletterManager);

        $this->newsletterManager->distribute('asdasd');
    }
}
