<?
namespace BS;

use P\Document;

class Element extends \P\Element
{
    public function __construct($name, $value = null)
    {
        parent::__construct($name, $value);

        $doc = new Document();
        $doc->appendChild($this);
    }
}
