<?php 

class ArtworkImageHolderController extends PageController {
	
	public function init() {
		parent::init();
	}
	
	public function carousels(){
		$set = Carousel::get()->filter(array("ParentID" => $this->ParentID));
		return $set;
		
	}
	
	
}