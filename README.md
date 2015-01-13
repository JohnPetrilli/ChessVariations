<h1>Chess Variations</h1>

Clearly I know the variations of standard (and legal) chess moves have been claimed to be 10^80-10^100 or even higher, so generating all of them proves nearly impossible. I just felt like building a system in PHP which would have the ability to do so.

It is also possible to build this for scalability, and to have computers around the world doing their own calculations for faster generation. 
<hr>

<h3>Class pieces</h3>
class.PIECE.php
	function __construct()
	for instantiation I would imagine we should pass (starting position, color, etc).
	It may seem that the starting position would always be the same, but this is not true.
	We want to be able to start from any game variant, or start from where we left off (maybe the system crashed)

	Example:
	```php
	// This is a very basic bit, but just to show my line of thinking.
	/*
	$info = array('color'=>'white',
              'position'=>array('x'=>1,'y'=>1));

	$bishop = new piecesBishop($info);
	Decided immediatly against getters and setters.
	Using this method:
	*/
	
	//starting options example
	$bishopWW = new piecesBishop();
	$bishopWW->pieceOptions['color'] = "white";
	$bishopWW->pieceOptions['position_x'] = 1;
	$bishopWW->pieceOptions['position_y'] = 1;
	$bishopWW->pieceOptions['team'] = "white";
	
	
	/*
	Things that I think (at this time) should be stored
	color = piece color (white/black)
	position_x = 1-8 (normally A-H)
	position_y = 1-8
	team = is it white or black piece?
	moves = total number of moves this piece had made. (helpful for tracking, en passant, etc)
	taken = true/false (if this piece has been taken)
	offboard = true/false. True if taken. True if pawn was promoted.
	promotion = true/false. If piece is a pawn and promotion = true, it should be offboard=true taken=false. The promoted to piece (ie: Queen) should be promotion=true offboard=true taken=false
	attacking = array('x,y','x,y'); an array of attacking spaces. This will aid in the speed of searching for taking pieces.
	*/
	
    ```

More to come..


CHANGELOG:
2015-01-13 
	- Laying out the framework and classes I think are immediately necessary to start the build.
	- Created the files for the Board Class, and each piece class.
	- Created functions (non-functional) to layout my thought process in developing this
	