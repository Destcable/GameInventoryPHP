<?php

class Item
{
    private int $id;
    private string $name;
    private string $description;
    private string $type;
    private array $stats;

    public function __construct($id, $name, $description, $type, $stats)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->type = $type;
        $this->stats = $stats;
    }
}


class Inventory
{
    
}