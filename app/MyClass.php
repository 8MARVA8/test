<?php

class MyClass {
    private $var1;
    private $isVar;

    /**
     * @return mixed
     */
    public function getIsVar()
    {
        return $this->isVar;
    }

    /**
     * @param mixed $isVar
     */
    public function setIsVar($isVar)
    {
        $this->isVar = $isVar;
    }

    /**
     * @return mixed
     */
    public function getVar1()
    {
        return $this->var1;
    }

    /**
     * @param mixed $var1
     */
    public function setVar1($var1)
    {
        $this->var1 = $var1;
    }

    public function index() {
        echo "Test is MyClass";
    }
}