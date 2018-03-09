<?php
namespace BS;
class Nav extends \P\Query {
    public function __construct() {
        parent::__construct("ul");
        $this->addClass("nav");
    }

    public function add($label, $href) {
        $a = p("a")->attr("href", $href);
        $li = p("li");
        $li->append($a);

        $a->html($label);
        $this->append($li);
        return $li;
    }
}

?>