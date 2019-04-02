<?
namespace BS;

use P\HTMLSelectElement;


class Select extends HTMLSelectElement
{
    public function __construct()
    {
        parent::__construct();
        $this->classList->add("form-control");
    }

    public function options(array $arrs){

        foreach ($arrs as $v) {
            $option=p("option");
            $option->text($v)->val($v);
            p($this)->append($option);
        }
        return $this;
    }
}
