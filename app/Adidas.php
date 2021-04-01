<?php

class Adidas {
    private $clothes;

    /**
     * @return mixed
     */
    public function getClothes()
    {
        return $this->clothes;
    }

    /**
     * @param mixed $clothes
     */
    public function setClothes($clothes)
    {
        $this->clothes = $clothes;
    }

}