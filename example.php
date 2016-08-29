<?php



	include( "src/NexmoMessage.php" );

	/**
	 * To send a text message.
	 *
	 */

	// Step 1: Declare new NexmoMessage.
	$nexmo_sms = new NexmoMessage('2cfb0696', 'bd63d71b6ac166a2');

	// Step 2: Use sendText( $to, $from, $message ) method to send a message. 
	$info = $nexmo_sms->sendText( '+569961976729', 'MyApp', 'Hello!' );

	// Step 3: Display an overview of the message
	echo $nexmo_sms->displayOverview($info);

	// Done!

/*
Key: 2cfb0696
Secret: bd63d71b6ac166a2
*/

?>