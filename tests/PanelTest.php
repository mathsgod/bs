<?
declare (strict_types = 1);
error_reporting(E_ALL && ~E_WARNING);
use PHPUnit\Framework\TestCase;
use BS\Panel;


final class PanelTest extends TestCase
{

    public function test_create()
    {
        $p = new Panel();
        $this->assertEquals('<div class="panel panel-default"></div>', (string)$p);
    }

    public function test_heading(){
        $p = new Panel();
        $p->heading("head1");
        $this->assertEquals('<div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title">head1</h4></div></div>', (string)$p);
    }

}
