<?php

declare(strict_types=1);
error_reporting(E_ALL & ~E_WARNING);

use PHPUnit\Framework\TestCase;
use BS\Media;

final class MediaTest extends TestCase
{

    public function test_create()
    {
        $dd = new Media();
        $this->assertEquals('<div class="media"><div class="media-body"></div></div>', (string)$dd);
    }
}
