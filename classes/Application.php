<?php namespace JayJay\Classes;

use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\HttpKernel\HttpKernel;

class Application
{

    /** @var HttpKernel */
    public $httpKernel;

    /**
     * Application constructor.
     */
    private function __construct()
    {
        $this->httpKernel = new HttpKernel(new EventDispatcher(), new ControllerResolver(), new RequestStack(), new ArgumentResolver());
        print_r(Configuration::get('app.providers'));
    }

    /**
     * Return instance.
     */
    public static function getInstance()
    {
        return new Application();
    }
}