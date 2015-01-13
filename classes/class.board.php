<?php
class chessBoard{
	static $board = array();
	function __construct(){
		$this->createBoardArray();
		$this->emptySpots();
		//print_r($this->board['positions']);
	}
	function createBoardArray(){
		$this->board['position_x'] = array(1,2,3,4,5,6,7,8);
		$this->board['position_y'] = array(1,2,3,4,5,6,7,8);
		foreach($this->board['position_x'] as $k=>$v){
			foreach($this->board['position_y'] as $key=>$value){
				//quick lookup for $this->board['positions'][KEY]
				$this->board['positions_ql'][] = $v.",".$value;

				$this->board['positions'][] = array('position'=>$v.",".$value,
											        'piece'=>'');
			}
		}
		//print_r($this->board['positions']);
	}
	
	function piecesOnBoard(){
		
	}
	function emptySpots(){
		foreach($this->board['positions'] as $k=>$v){
			$this->board['positions'][$k]['piece'] = NULL;
		}
		//useful to perform move searches faster than checking piecesOnBoard() but must be updated upon every move.
	}
	
}