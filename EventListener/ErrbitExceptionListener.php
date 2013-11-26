<?php

namespace Btn\ErrbitBundle\EventListener;

use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Errbit\Errbit;

class ErrbitExceptionListener
{
    /**
     * @var boolean
     */
    private $enabled;

    /**
     * Constructor
     *
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->enabled = $config['enabled'];
        Errbit::instance()->configure($config);
    }

    /**
     * Handle exception method
     *
     * @param GetResponseForExceptionEvent $event
     */
    public function onKernelException(GetResponseForExceptionEvent $event)
    {
        if ($this->enabled) {
            // get exeption and send to errbit
            Errbit::instance()->notify($event->getException());
        }
    }
}
