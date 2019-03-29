<?
namespace BS;

class Select extends Element
{
    public function __construct()
    {
        parent::__construct("select");
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
