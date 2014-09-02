<?php
/**
 * AlertController.php
 * Definition of class AlertController
 *
 * Created 28/08/14 23:55
 *
 * @author Rasanga Perera <rasangaperera@gmail.com>
 * Copyright (c) 2014, The MIT License (MIT)
 */

namespace Ras\Bundle\FlashAlertBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlertController extends Controller
{

    public function displayAlertsAction()
    {
        return $this->render(
            'RasFlashAlertBundle:Alert:alerts.html.twig',
            array(
                'alertNotifications'    => $this->getAlertPublishingService()->getAlerts()
            )
        );
    }

    /**
     * @return \Ras\Bundle\FlashAlertBundle\Service\AlertPublishingService
     *
     */
    protected function getAlertPublishingService()
    {
        return $this->get('Ras.Alert.AlertPublishingService');
    }

} 