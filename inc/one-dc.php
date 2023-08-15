<?php
     
function send_order_data_to_one_dc( $export_id, $exportObj ) {
	// Run for export ID 3 only
	//if ( $export_id == '3' ) {
		//The url you wish to send the POST request to
		$url = "https://www.one-dc.com/ao/";
		
		//JSON encode the order data that was exported
	    $xml = 'data=' . file_get_contents($exportObj->options["current_filepath"]);
		// $array = array_map("str_getcsv", explode("\n", $csv));
		// array_pop($array); //Used to remove an empty element at the end of the array.
		// $payload = json_encode($array);
		
		//Open the connection
		$ch = curl_init();

		//Set the url to be fetched
		curl_setopt($ch,CURLOPT_URL, $url);
		//Enable regular HTTP POST request
		curl_setopt($ch,CURLOPT_POST, true);
		//Pass the order data payload
		curl_setopt($ch,CURLOPT_POSTFIELDS, $xml);

		//Make sure curl_exec returns the contents of the cURL; rather than echoing it
		curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
 
		//Execute HTTP post request via cURL
		$result = curl_exec($ch);
		
		// Return error if cURL fails.
		if ( curl_errno( $ch ) ) {
			exit( 'Error:' . curl_error( $ch ) );
		}
		//Close the connection
		curl_close( $ch );

        // if($ch === false || $result === false){
        //     die('There was a problem with the connection to EDC');
        // } else {
        //     $json = json_decode($result,true);
    
        //     // Success
        //     if($json['result'] == 'OK'){
    
        //         echo '<pre>';
        //         echo 'The order was successful. The following output was received from EDC:'.PHP_EOL;
        //         print_r($json);
        //         echo '</pre>';
                
        //     // Failure
        //     } else {
        //         echo '<pre>';
        //         echo 'There was a problem with the order request. The following output was received from EDC:'.PHP_EOL;
        //         print_r($json);
        //         echo '</pre>';
        //     }
        // }
	//}
}
add_action( 'pmxe_after_export', 'send_order_data_to_one_dc', 10, 2 );
