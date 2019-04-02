<?
namespace BS;

use P\HTMLInputElement;

class Input extends HTMLInputElement
{
    public function __construct()
    {
        parent::__construct();
        $this->classList->add("form-control");
    }
}
