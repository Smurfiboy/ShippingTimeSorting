<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Smurfi\Subscriber;

use Enlight\Event\SubscriberInterface;

/**
 * Description of ExtendSortings
 *
 * @author smurfi
 */
class ExtendSortings implements SubscriberInterface{
     /**
     * @var string
     */
    private $pluginDirectory;

    /**
     * @param $pluginDirectory
     */
    public function __construct($pluginDirectory)
    {
        $this->pluginDirectory = $pluginDirectory;
    }
    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            'Enlight_Controller_Action_PostDispatch' => 'onCustomerPostDispatch'
        ];
    }

    public function onCustomerPostDispatch(\Enlight_Event_EventArgs $args)
    {
    var_export($args);
    die;
        /** @var \Shopware_Controllers_Backend_Customer $controller */
        $controller = $args->getSubject();

        $view = $controller->View();
        $request = $controller->Request();

        $view->addTemplateDir($this->pluginDirectory . '/Resources/views');

        if ($request->getActionName() == 'load') {
            $view->extendsTemplate('backend/swag_extend_customer/view/detail/window.js');
        }
    }
}

