<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Smurfi\SearchBundle\SortingHandler;

use Smurfi\SearchBundle\Sorting\DeliveryTimeSorting;
use Shopware\Bundle\SearchBundle\SortingInterface;
use Shopware\Bundle\SearchBundleDBAL\QueryBuilder;
use Shopware\Bundle\SearchBundleDBAL\SortingHandlerInterface;
use Shopware\Bundle\StoreFrontBundle\Struct\ShopContextInterface;
/**
 * Description of DeliveryTimeSortingHandler
 *
 * @author smurfi
 */
class DeliveryTimeSortingHandler implements SortingHandlerInterface {
    
    /**
     * {@inheritdoc}
     */
    public function supportsSorting(SortingInterface $sorting)
    {
        return $sorting instanceof DeliveryTimeSorting;
    }

    /**
     * {@inheritdoc}
     */
    public function generateSorting(
        SortingInterface $sorting,
        QueryBuilder $query,
        ShopContextInterface $context
    ) {
        $query->addOrderBy('variant.details.shippingtime', $sorting->getDirection());
    }
}
