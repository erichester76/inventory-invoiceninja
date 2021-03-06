<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Modules\\Inventory\\Database\\Seeders\\InventoryDatabaseSeeder' => $baseDir . '/Database/Seeders/InventoryDatabaseSeeder.php',
    'Modules\\Inventory\\Datatables\\InventoryDatatable' => $baseDir . '/Datatables/InventoryDatatable.php',
    'Modules\\Inventory\\Http\\ApiControllers\\InventoryApiController' => $baseDir . '/Http/ApiControllers/InventoryApiController.php',
    'Modules\\Inventory\\Http\\Controllers\\InventoryController' => $baseDir . '/Http/Controllers/InventoryController.php',
    'Modules\\Inventory\\Http\\Requests\\CreateInventoryRequest' => $baseDir . '/Http/Requests/CreateInventoryRequest.php',
    'Modules\\Inventory\\Http\\Requests\\InventoryRequest' => $baseDir . '/Http/Requests/InventoryRequest.php',
    'Modules\\Inventory\\Http\\Requests\\UpdateInventoryRequest' => $baseDir . '/Http/Requests/UpdateInventoryRequest.php',
    'Modules\\Inventory\\Models\\Inventory' => $baseDir . '/Models/Inventory.php',
    'Modules\\Inventory\\Policies\\InventoryPolicy' => $baseDir . '/Policies/InventoryPolicy.php',
    'Modules\\Inventory\\Presenters\\InventoryPresenter' => $baseDir . '/Presenters/InventoryPresenter.php',
    'Modules\\Inventory\\Providers\\InventoryServiceProvider' => $baseDir . '/Providers/InventoryServiceProvider.php',
    'Modules\\Inventory\\Repositories\\InventoryRepository' => $baseDir . '/Repositories/InventoryRepository.php',
    'Modules\\Inventory\\Transformers\\InventoryTransformer' => $baseDir . '/Transformers/InventoryTransformer.php',
);
