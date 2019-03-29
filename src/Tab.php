<?php
namespace BS;

class TabItem
{
    public static $tabitem_id = 0;

    public $tab;
    public $pane;

    public function __construct()
    {
        $this->tab = new \PElement("li");
        $this->pane = \PDiv::_();
    }

    public function active()
    {
        $this->tab->addClass("active");
        $this->pane->addClass("active");
        return $this;
    }
}

class Tab extends Element
{
    public $tabs;
    public $panes;
    public static $tabitem_id = 0;

    public function __construct()
    {
        parent::__construct("div");
        $this->tabs = p("ul")->addClass("nav nav-tabs")[0];
        $this->panes = p("div")->addClass("tab-content")[0];

        p($this)->append($this->tabs);
        p($this)->append($this->panes);
    }

    public function add($label, $content)
    {
        $li = p("li");

        $a = p("a");
        $a->attr("data-toggle", "tab");
        self::$tabitem_id++;
        $tab_id = self::$tabitem_id;
        $a->attr('href', "#tab-{$tab_id}");
        $a->html($label);
        $li->append($a);

        p($this->tabs)->append($li);

        $div = p("div");
        $div->html($content);
        $div->addClass('tab-pane');
        $div->attr('id', "tab-{$tab_id}");

        p($this->panes)->append($div);

        $p = new \P\Query();
        $p[] = $li[0];
        $p[] = $div[0];
        return $p;
    }
}