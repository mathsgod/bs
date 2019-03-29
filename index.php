<?
use BS\Button;

require_once(__DIR__ . "/vendor/autoload.php");
$btn = new Button();

use P\DOMParser;

p($btn)->append(' <span class="caret"></span>');

echo $btn;

