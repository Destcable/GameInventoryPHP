<?php 

namespace Destcable\InventoryPHP;

class Inventory
{
    private Character $character;
    private array $items;

    public function __construct(Character $character)
    {
        $this->character = $character;    
    }  

    public function addItem(Item $item)
    { 

    }

    public function removeItem(Item $item)
    { 
        
    }
}