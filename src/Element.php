<?php
namespace BS;

trait Element
{
    public function addClass($class){
        $this->classList->add($class);
        return $this;
    }
}
