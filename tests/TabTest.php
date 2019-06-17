<?
declare (strict_types = 1);
error_reporting(E_ALL && ~E_WARNING);
use PHPUnit\Framework\TestCase;
use BS\Tab;


final class TabTest extends TestCase
{

    public function test_create()
    {
        $p = new Tab();

        $this->assertEquals("ul", $p->childNodes[0]->tagName);
        $this->assertEquals("div", $p->childNodes[1]->tagName);
    }
}
