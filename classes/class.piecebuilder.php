<?php

	
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
		$pawns = 1;
		
		while($pawns <= 16){
			if($pawns <=8){
				$team = "white";
				$x = $pawns;
				$y = 2;
				$ql = (8*$pawns) - 7;
			}else{
				$team = "black";
				$x = $pawns - 8;
				$y = 7;
				$ql = (8*($pawns-8)) - 2;
			}
			
			$options = array( 'team'=>$team,
							  'position_x'=>$x,
							  'position_y'=>$y,
							  'position_QL'=>$ql,
							  'moves'=>0,
							  'taken'=>false,
							  'offboard'=>false,
							  'promotion'=>false
							);													
			$this->createPiece("pawn",$team,$options);	
			$pawns++;
		}										
	}
	function createPiece($type,$color,$options){
		if($type == 'pawn'){
			$this->pieces[$color][$type][] = new piecesPawn($options);
		}	
	}
	function showPieces(){
		print_r($this->pieces);
	}
}