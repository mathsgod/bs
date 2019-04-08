<?php
namespace BS;

use P\HTMLElement;


class Nav extends HTMLElement
{
    use Element;
    public function __construct()
    {
        parent::__construct("ul");
        $this->classList->add("nav");
    }

    public function add($label, $href)
    {
        $a = p("a")->attr("href", $href);
        $li = p("li");
        $li->append($a);

        $a->html($label);
        p($this)->append($li);
        return $li;
    }
}