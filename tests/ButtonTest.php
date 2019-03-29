<?
declare (strict_types = 1);
error_reporting(E_ALL && ~E_WARNING);
use PHPUnit\Framework\TestCase;
use BS\Button;


final class ButtonTest extends TestCase
{

    public function test_create()
    {
        $btn = new Button();
        $this->assertEquals('<button type="button" class="btn btn-default"></button>', (string)$btn);

        
        $btn->classList[]="btn-primary";
        $this->assertEquals('<button type="button" class="btn btn-primary"></button>', (string)$btn);


        $btn = new Button();
        $btn->classList->add("btn-primary");
        $this->assertEquals('<button type="button" class="btn btn-primary"></button>', (string)$btn);

    }

    public function test_href(){
        $btn = new Button();
        $btn->setAttribute("test","abc");
        $btn=$btn->href("https://www.google.com");


        $this->assertEquals('<a type="button" class="btn btn-default" test="abc" href="https://www.google.com"></a>', (string)$btn);
    }

    public function test_icon(){

        $btn = new Button();
        $btn->text("hello")->icon("fa fa-fw fa-user");
        $this->assertEquals('<button type="button" class="btn btn-default"><i class="fa fa-fw fa-user"></i> hello</button>', (string)$btn);
    }

}
