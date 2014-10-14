<?php
class  Books{
	
	
	/* contructor */
	function __construct(  ){
		//$this->price = $par1;
		//$this->title = $par2;
	}
	
    /* Member variables */
    var $price;
    var $title;
    /* Member functions */
    function setPrice($par){
       $this->price = $par;
    }
    function getPrice(){
       echo $this->price ."<br/>";
    }
    function setTitle($par){
       $this->title = $par;
    }
    function getTitle(){
       echo $this->title ." <br/>";
    }   
}
?>