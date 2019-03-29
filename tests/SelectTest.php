<?
declare (strict_types = 1);
error_reporting(E_ALL && ~E_WARNING);
use PHPUnit\Framework\TestCase;
use BS\Select;


final class SelectTest extends TestCase
{

    public function test_create()
    {
        $p = new Select();
        $this->assertEquals('<select class="form-control"></select>', (string)$p);
    }

    public function test_options()
    {
        $p = new Select();

        $p->options(["a", "b", "c"]);
        $this->assertEquals('<select class="form-control"><option value="a">a</option><option value="b">b</option><option value="c">c</option></select>', (string)$p);
    }
}
