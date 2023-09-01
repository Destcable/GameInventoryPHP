<?php 

namespace Destcable\InventoryPHP;

class Inventory
{
    private Character $character;

    public function __construct(Character $character)
    {
        $this->character = $character;    
    }  
}