<?
declare (strict_types = 1);
error_reporting(E_ALL && ~E_WARNING);
use PHPUnit\Framework\TestCase;
use BS\Dropdown;

final class DropdownTest extends TestCase
{

    public function test_create()
    {
        $dd = new Dropdown("test");
        $this->assertEquals($dd->childNodes[0]->tagName, "button");
        $this->assertEquals($dd->childNodes[1]->tagName, "ul");
    }
}
