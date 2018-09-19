<?

namespace BS;

class PanelHeading extends \P\HTMLDivElement
{
    public $title;
    public function __construct()
    {
        parent::__construct();
        $this->classList->add("panel-heading");
    }

    public function title($text)
    {
        if (!$this->title) {
            $this->title = p("h4")->addClass("panel-title")->appendTo($this);
        }

        if ($text) {
            $a = $this->title->find("a");
            if ($a->size()) {
                $a->text($text);
            } else {
                $this->title->text($text);
            }
        }

        return $this->title;
    }

    public function collapse($id)
    {
        $title = $this->title();
        $a = $title->find("a");
        if (!$a->size()) {
            $a = p("a")->attr("data-toggle", "collapse")->attr("href", "#$id");
            $this->title->wrapInner($a);
        }
        return $a;
    }

}
