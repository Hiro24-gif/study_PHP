<?php

class frog extends animal
{
    public $name, $kaki, $cold_blood;
    public function __construct($name, $kaki = 4, $cold_blood ="no")
    {
        $this->name = $name;
        $this->kaki = $kaki;
        $this->cold_blood = $cold_blood;
    }
    public function jump()
{
echo "hop-hop";    
}
}



?>