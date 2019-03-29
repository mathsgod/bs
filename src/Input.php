<?
namespace BS;

class Input extends Element
{
    public function __construct()
    {
        parent::__construct("input");
        $this->classList->add("form-control");
    }
}
