<?php

include('config.php');

				$curl = curl_init();

				curl_setopt_array($curl, array(
				  CURLOPT_URL => "https://management.azure.com/subscriptions/$subscription_id/resourceGroups/$resourceGroups/providers/Microsoft.Compute/virtualMachines/$vm_name/powerOff?api-version=2015-06-15",
				  CURLOPT_RETURNTRANSFER => true,
				  CURLOPT_ENCODING => "",
				  CURLOPT_MAXREDIRS => 10,
				  CURLOPT_TIMEOUT => 30,
				  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				  CURLOPT_CUSTOMREQUEST => "POST",
				  CURLOPT_HTTPHEADER => array(
					"accept: application/json",
			  		"Content-Length:0",
					"authorization: Bearer $access_token",
					"cache-control: no-cache"
				  ),
				));

				$response = curl_exec($curl);
				$err = curl_error($curl);

				curl_close($curl);

				if ($err) {
					
				}else{
					
				}
