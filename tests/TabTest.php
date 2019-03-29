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
        $this->assertEquals('<div><ul class="nav nav-tabs"></ul><div class="tab-content"></div></div>', (string)$p);
    }
}
