  API URL (GET & POST) : http://sms.softcreation.tech/smsapi?api_key=(APIKEY)&type=text&contacts=(NUMBER)&senderid=(Approved Sender ID)&msg=(Message Content)
elseif (OtpConfiguration::where('type', 'mimsms')->first()->value == 1) {


  $url = "http://sms.softcreation.tech/smsapi";
  $data = [
  "api_key" => 'C20010496230711dedeb20.93065977',
  "type" => "text",
  "contacts" => $to,
  "senderid" => "8809601001517",
  "msg" => $text,
  ];
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $response = curl_exec($ch);
  curl_close($ch);
  return $response;


  }
