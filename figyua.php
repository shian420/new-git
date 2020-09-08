<?php require_once('menu.php');

class Figyua extends Menu{
	private $type;

	public function __construct($name,$price,$image,$lank,$deliveryPlace,$type){
		parent::__construct($name,$price,$image,$lank,$deliveryPlace);
		$this->type=$type;
	}

public function getType(){
	return $this->type;
}


}
?>
