<?php
include_once './pieces/class.bishop.php';	
include_once './pieces/class.king.php';	
include_once './pieces/class.knight.php';	
include_once './pieces/class.pawn.php';	
include_once './pieces/class.queen.php';	
include_once './pieces/class.rook.php';	
	
class pieceBuilder{
	static $pieces = array();
	function __construct(){
		//pass in a game uid (serilized information?) to build an existing layout.
	}
	function newGame(){
		/*
			white pawns
			positions = 	1,2		2,2		3,2		4,2		5,2		6,2		7,2		8,2
			ids = 			1 		9		17		25		33		41		49		57	
			
			black pawns
			positions = 	1,7 	2,7 	3,7 	4,7 	5,7 	6,7 	7,7 	8,7
			ids = 			6 		14		22		30		38		46		54		62	
		*/
		
		
		$this->pieces['white']['pawns'][0] = new piecesPawn(array('team'=>'white',
																  'position_x'=>1,
																  'position_y'=>2,
																  'position_QL'=>1,
																  'moves'=>0,
																  'taken'=>false,
																  'offboard'=false,
																  'promotion'=>false)
															);
		
						
	}	
}