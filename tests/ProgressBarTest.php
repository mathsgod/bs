<?
declare (strict_types = 1);
error_reporting(E_ALL && ~E_WARNING);
use PHPUnit\Framework\TestCase;
use BS\ProgressBar;


final class ProgressBarTest extends TestCase
{

    public function test_create()
    {
        $p = new  ProgressBar();
        $this->assertEquals('<div class="progress"><div class="progress-bar"></div></div>', (string)$p);
    }
}
