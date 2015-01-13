<?php
class piecesPawn{
	static $pieceOptions = array();
	function __construct(){
		/*
			for instantiation I would imagine we should pass (starting position, color, etc).
			It may seem that the starting position would always be the same, but this is not true.
			We want to be able to start from any game variant, or start from where we left off (maybe the system crashed)
			
		*/
		$arg_list = func_get_args();
		$this->pieceOptions[] = $arg_list;
	}
	function canMove($x,$y){
		//pass in x,y coords to determine if the piece can move as such.
	}
	function setCurrentPosition($x,$y){
		$this->pieceOptions['x'] = $x;
		$this->pieceOptions['y'] = $y;
	}
}