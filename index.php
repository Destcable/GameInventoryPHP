<?php
require 'vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use Destcable\InventoryPHP\Item;
use Destcable\InventoryPHP\Character;
use Destcable\InventoryPHP\Inventory;

$item1 = new Item(1, "Меч", "Мощный меч для атаки", "оружие", ["атака" => 10]);
$item2 = new Item(2, "Щит", "Прочный щит для защиты", "броня", ["защита" => 5]);

// $inventory = new Inventory($character);
// $character = new Character(1, "Герой", $inventory);

// $character->pickUpItem($item1);
// $character->pickUpItem($item2);

// $character->dropItem($item1);