<?php

include_once '../../classes/class.board.php';
include_once '../../classes/pieces/class.bishop.php';

$bishopWW = new piecesBishop();
$bishopWW->pieceOptions['color'] = "white";
$bishopWW->pieceOptions['position_x'] = 1;
$bishopWW->pieceOptions['position_y'] = 1;
$bishopWW->pieceOptions['team'] = "white";

$bishopWB = new piecesBishop();
$bishopWB->pieceOptions['color'] = "black";
$bishopWB->pieceOptions['position_x'] = 1;
$bishopWB->pieceOptions['position_y'] = 2;
$bishopWB->pieceOptions['team'] = "white";

$bishopBB = new piecesBishop();
$bishopBB->pieceOptions['color'] = "black";
$bishopBB->pieceOptions['position_x'] = 1;
$bishopBB->pieceOptions['position_y'] = 3;
$bishopBB->pieceOptions['team'] = "black";

$bishopBW = new piecesBishop();
$bishopBW->pieceOptions['color'] = "white";
$bishopBW->pieceOptions['position_x'] = 1;
$bishopBW->pieceOptions['position_y'] = 4;
$bishopBW->pieceOptions['team'] = "black";

print_r($bishopWW->pieceOptions);
print_r($bishopWB->pieceOptions);
print_r($bishopBB->pieceOptions);
print_r($bishopBW->pieceOptions);


$board = new chessBoard();
