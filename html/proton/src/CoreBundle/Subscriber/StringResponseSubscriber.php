<?php
/**
 * Created by PhpStorm.
 * User: ravi
 * Date: 7/29/16
 * Time: 12:57 PM
 */

namespace CoreBundle\Subscriber;


use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseForControllerResultEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class StringResponseSubscriber implements EventSubscriberInterface
{

    /**
     * Returns an array of event names this subscriber wants to listen to.
     *
     * The array keys are event names and the value can be:
     *
     *  * The method name to call (priority defaults to 0)
     *  * An array composed of the method name to call and the priority
     *  * An array of arrays composed of the method names to call and respective
     *    priorities, or 0 if unset
     *
     * For instance:
     *
     *  * array('eventName' => 'methodName')
     *  * array('eventName' => array('methodName', $priority))
     *  * array('eventName' => array(array('methodName1', $priority), array('methodName2')))
     *
     * @return array The event names to listen to
     */
    public static function getSubscribedEvents()
    {
        return [
          KernelEvents::VIEW => "onKernelView"
        ];
    }

    public function onKernelView(GetResponseForControllerResultEvent $event)
    {
        if(!is_string($event->getControllerResult())){
            return;
        }
        $html = $event->getControllerResult();
        $response = new Response($html, 200);
        $event->setResponse($response);
    }
}