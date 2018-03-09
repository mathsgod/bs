<?php
//created by Raymond Chong
//date: 2015-08-18
namespace BS;
class InputSelect extends \P\HTMLDivElement {
    public function __construct() {
        parent::__construct();
        $this->classList->add("input-group");

        $div = p("div");
        $div->addClass("input-group-btn");

        $button = p("button");
        $button->attr("type", "button");
        $button->addClass("btn btn-default dropdown-toggle");
        $button->attr("data-toggle", "dropdown");
        $button->html('<span class="caret"></span>');
        $div->append($button);

        p($this)->append($div);

        $input = p("input");
        $input->attr("type", "text");
        $input->addClass("form-control");
        p($this)->append($input);
    }

    public function ds($a) {
        $ul = p("ul");
        $ul->addClass("dropdown-menu");
        foreach($a as $s) {
            $li = p("li");
            $link = p("a")->text($s);
        	$link->attr("href","javascript:void(0)");
            $li->append($link);
            $ul->append($li);

            $link->attr("onClick", <<<EOT
$(this).closest('div').parent().find('input').val($(this).text());
EOT
                );
        }

        p($this)->find("div.input-group-btn")->append($ul);
        // $this->append($ul);
        return $this;
    }
}

?>