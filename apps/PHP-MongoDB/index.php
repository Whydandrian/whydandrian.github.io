<?php

require 'vendor/autoload.php'; // include Composer's autoloader

// membuat koneksi ke mogo server
$client     = new MongoDB\Client("mongodb://localhost:27017");

// memilih database yang ingin digunakan
$db         = $client->perpustakaan;

// memilih collecttion
$customerCollection = $db->barang;

// insert data ke colection
$result = $customerCollection->insertOne(['nama' => 'Wahyudi Andrian']);
echo "Inserted with Object ID '{$result->getInsertedId()}'";
