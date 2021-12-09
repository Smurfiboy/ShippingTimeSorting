/**
 * Shopware 5
 * Copyright (c) shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 */

///{namespace name=backend/custom_search/translation}

//{block name="backend/config/view/custom_search/sorting/sorting/selection"}

Ext.define('Shopware.apps.Config.view.custom_search.sorting.SmurfiSortingSelection', {
    extend: 'Shopware.apps.Config.view.custom_search.sorting.SortingSelection',

    initSortings: function() {
        return [
            Ext.create('Shopware.apps.Config.view.custom_search.sorting.classes.PriceSorting'),
            Ext.create('Shopware.apps.Config.view.custom_search.sorting.classes.ProductNameSorting'),
            Ext.create('Shopware.apps.Config.view.custom_search.sorting.classes.ProductNumberSorting'),
            Ext.create('Shopware.apps.Config.view.custom_search.sorting.classes.PopularitySorting'),
            Ext.create('Shopware.apps.Config.view.custom_search.sorting.classes.ReleaseDateSorting'),
            Ext.create('Shopware.apps.Config.view.custom_search.sorting.classes.SearchRankingSorting'),
            Ext.create('Shopware.apps.Config.view.custom_search.sorting.classes.ProductAttributeSorting'),
            Ext.create('Shopware.apps.Config.view.custom_search.sorting.classes.ProductStockSorting'),
            Ext.create('Shopware.apps.Config.view.custom_search.sorting.classes.ManualSorting'),
            Ext.create('Shopware.apps.Config.view.custom_search.sorting.classes.DeliveryTimeSorting')
        ];
    }
});

//{/block}
