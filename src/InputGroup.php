<?
namespace BS;
class InputGroup extends \P\Query{
	public function __construct(){
		parent::__construct("div");
		$this->addClass("input-group");
	}

	public function button($option="default"){
		$btn=new Button($option);
		$btn->type="button";
		$span=p("span");
		$span->addClass("input-group-btn");
		$span->append($btn);
		$this->append($span);
        $bc=new ButtonCollection;
        $bc[]=$btn;
		return $bc;
	}

	public function input($index=null){
		$input=new \P\Query("input");
		if($index)$input->index($index);
		if($index)$input->name($index);

		$input->addClass("form-control");
		$this->append($input);
		return $input;

	}

}

?>