<?
use BS\TokenField;
use BS\Select;

require_once(__DIR__ . "/vendor/autoload.php");


$select = new Select();
$option = p("option");

p($select)->append($option);

$option->text("a");
$option->val("B");



echo $select;

//$option->appendTo(p($select));


return;
$t = new TokenField();

$t->options([1 => "a", 2 => "b", 3 => "c"]);

echo $t;
