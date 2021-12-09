ShippingTimeSorting

Currently the Plugin is half working.

you need to insert 
INSERT INTO `s_search_custom_sorting` (`id`, `label`, `active`, `display_in_categories`, `position`, `sortings`) VALUES
(10,	'Lieferzeit Absteigend',	1,	1,	8,	'{\"Smurfi\\\\SearchBundle\\\\Sorting\\\\DeliveryTimeSorting\":{\"direction\":\"DESC\"}}\r\n'),
(11,	'Lieferzeit Aufsteigend',	1,	1,	9,	'{\"Smurfi\\\\SearchBundle\\\\Sorting\\\\DeliveryTimeSorting\":{\"direction\":\"ASC\"}}\r\n');
into the database

The new sorting to add it inside Configuration -> Basic_settings -> Frontend -> Filter/sorting is prepared but i dont know atm how to extend custom_sortings to add the new class
