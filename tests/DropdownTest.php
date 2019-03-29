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
        $this->assertEquals('<div class="dropdown"><button type="button" class="btn btn-default" data-toggle="dropdown">test <span class="caret"></span></button><ul class="dropdown-menu"></ul></div>', (string)$dd);
    

    }

}
