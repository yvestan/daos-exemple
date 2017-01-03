<?php

// exemples non testés !!!

$country = new Country();

// récupèrer le pays avec l'id 1
$countryInfos = $country->getData(1);
print_r($countryInfos);

// modifier un pays avec l'ID 1
$country->setUpdateFields(array(
    'code' => 'MONCODE',
    'name' => 'France',
));
$country->setData(1);

// nouveau pays
$country->setUpdateFields(array(
    'code' => 'NEWCODE',
    'name' => 'Afganistan',
));
$country->setData();

// supprimer le pays 1
$country->deleteData(1);

