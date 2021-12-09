<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */
namespace Smurfi\SearchBundle\Sorting;
/**
 * Description of DeliveryTimeSorting
 *
 * @author smurfi
 */
class DeliveryTimeSorting extends \Shopware\Bundle\SearchBundle\Sorting\Sorting
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'product_delivery_time';
    }
}
