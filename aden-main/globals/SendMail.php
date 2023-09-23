<?php
class SendMail{
<<<<<<< Updated upstream
	public function SendeMail($details=array(), $conf){
=======
	public function SendMail($details=array(), $conf){
		

				if (!$this->isValidEmail($details["sendToEmail"])) {
					echo "Error: Invalid email address.";
					return;
				}
		
				// Check for missing details
				if (empty($details["sendToEmail"]) || empty($details["sendToName"]) || empty($details["emailSubjectLine"]) || empty($details["emailMessage"])) {
					echo "Error: Some details are missing.";
					print_r($details);
					return;
				}


>>>>>>> Stashed changes
		if(!empty($details["sendToEmail"]) && !empty($details["sendToName"]) && !empty($details["emailSubjectLine"]) && !empty($details["emailMessage"])){
			$headers = array(
				'Authorization: Bearer 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',
				'Content-Type: application/json'
			);

			$data = array(
				"personalizations" => array(

					array(
						"to" => array(
							array(
								"email" => $details["sendToEmail"],
								"name" => $details["sendToName"]
							)
						)
					)
				),
				"from" => array(
					"email" => $conf["au_email_address"],
					"name" => $conf["site_name"]
				),
				"subject" => $details["emailSubjectLine"],
				"content" => array(
					array(
						"type" => "text/html",
						"value" => nl2br($details["emailMessage"])
					)
				)
			);
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$response = curl_exec($ch);
			curl_close($ch);
		}else{
			echo "Error: Some details are missing.";
			print_r($details);
		}
		}
		private function isValidEmail($email) {
			return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
		}
	}
	
	
	