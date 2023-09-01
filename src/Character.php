<?php 

namespace Destcable\InventoryPHP;

class Character
{ 
    private int $id;
    private string $name;
    private Inventory $inventory;

    public function __construct(int $id, string $name, Inventory $inventory)
    {
        $this->id = $id;
        $this->name = $name;
        $this->inventory = $inventory;
    }

    public function pickUpItem(Item $item)
    {
        $this->inventory->addItem($item);
    }

    public function dropItem(Item $item)
    { 
        $this->inventory->removeItem($item);
    }
}