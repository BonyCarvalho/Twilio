<?php

	session_start();

    // header("content-type: text/xml");

	$question 	= array(

						0  => array("x-7=3. x?","answer : 10 x=3+7 -> x=10"),
						1  => array("5-x= 3. x?","answer : 2 –x=3-5 -> –x=-2 -> x=2"),
						2  => array("4x=20. x?","answer : 5 x=20/4 ->  x=5"),
						3  => array("2x+3x=30. x?","answer : 6 5x=30 ->  x=30/5 -> x=6"),
						4  => array("5x-98=- 2x. x?","answer : 14 7x=98 ->  x=98/7 -> x=14"),
						5  => array("100/z=-4. x?","answer : -25 100=-4z  -> 100/4=-z -> z=-25"),
						6  => array("1-3x=- 14. x?","answer : 5 -3x=- 14-1 -> -3x=- 15 -> x=5"),
						7  => array("x+(-8)=- 20. x?","answer : -12 x-8=- 20 -> x=-20+8 -> x=-12"),
						8  => array("5-x= 3. x?","answer : -4 8x-2=- 34 -> 8x=-32 -> x=-4"),
						9  => array("5-x= 3. x?","answer : 5 2x-6=4 -> 2x=10 -> x=5"),
						10 => array("5-x= 3. x?","answer : 1.2 x=30-24x -> 25x=30 -> x=30/25 -> x=1.2"),
						11 => array("5-x= 3. x?","answer : 15 x+5=20 -> x=15"),
						12 => array("5-x= 3. x?","answer : 3.4 -14=- 10(x-2) -> 14=10x-20 -> 34=10x -> x=3.4"),
						13 => array("5-x= 3. x?","answer : 4 2x+8=4x -> 2x=8 -> x=4"),
						14 => array("5-x= 3. x?","answer : 16 3x+2=5x-30 -> -2x=- 32 -> x=16"),

						);
	



	// $flag = false;

	// // $to 	= $_REQUEST['to'];
	$from   = $_REQUEST['From'];
	$answer = $_REQUEST['Body'];

	if($from){
		$_SESSION($from,$answer);
	}
	print_r($question);
	// $reply  = array();

	// if (is_numeric($answer)) {
	// 	if($answer == 2){
	// 		$reply = 'Correct answer';
	// 	}
	// 	else{
	// 		$reply = 'Wrong answer';
	// 	}
	// }
	// else if(is_string($answer)){
	// 	array_push($reply, $quiz[$answer][0][0]);
	// 	foreach ($quiz[$answer][0][1] as $key => $value) {
	// 		array_push($reply, PHP_EOL);
	// 		array_push($reply, $value);
	// 	}
	// }

    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>

<Response>
	<Sms>
			<?php
				if(is_array($reply)){
					foreach($reply as $key => $value){
						echo $value;
					}
				}
				else{
					echo $reply;
				}
			?>
	</Sms>
</Response>
