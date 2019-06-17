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

        $this->assertEquals(3, $p->childNodes->length);
    }
}
