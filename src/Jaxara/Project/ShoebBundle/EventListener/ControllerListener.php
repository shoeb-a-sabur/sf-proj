<?php

namespace Jaxara\Project\ShoebBundle\EventListener;

use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Jaxara\Project\ShoebBundle\Twig\Extension\ShoebExtension;

class ControllerListener
{
    protected $extension;

    public function __construct(ShoebExtension $extension)
    {
        $this->extension = $extension;
    }

    public function onKernelController(FilterControllerEvent $event)
    {
        if (HttpKernelInterface::MASTER_REQUEST === $event->getRequestType()) {
            $this->extension->setController($event->getController());
        }
    }
}
