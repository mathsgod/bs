<?
declare (strict_types = 1);
error_reporting(E_ALL && ~E_WARNING);
use PHPUnit\Framework\TestCase;
use BS\Label;

final class LabelTest extends TestCase
{

    public function test_create()
    {
        $dd = new Label();
        $this->assertEquals('<label class="label label-default"></label>', (string)$dd);
    

    }

}
