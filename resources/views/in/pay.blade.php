@extends('tem')
@section('section')
    <h1>Azer alişe</h1>
    <br><br>
    <h2>hər Azer 1000 tumande</h2>
    <br><br>
    <form method="post" action="{{ route('shop') }}">

        {{ csrf_field() }}

        <button type="submit" value="200000" name="inp1">20 Azer<br> 20,000</button>
        <button type="submit" value="450000" name="inp1">50 Azer<br> 45,000</button>
        <button type="submit" value="850000" name="inp1">100 Azer<br> 85,000</button>
        <button type="submit" value="8000000" name="inp1">premium<br> 800,000</button>

    </form>

    @php

        // ini_set('soap.wsdl_cache_enabled', '0');
        // try {
        //     $client = new SoapClient('http://ippanel.com/class/sms/wsdlservice/server.php?wsdl');
        //     $user = '09362997891';
        //     $pass = 'Faraz@2740675747';
        //     $fromNum = '';
        //     $toNum = ['09334020017'];
        //     $messageContent = 'بگ وگ';
        //     $op = 'send';
        //     //If you want to send in the future  ==> $time = '2016-07-30' //$time = '2016-07-30 12:50:50'

        //     $time = '';

        //     echo $client->SendSMS($fromNum, $toNum, $messageContent, $user, $pass, $time, $op);
        //     // echo $status;
        // } catch (SoapFault $ex) {
        //     echo $ex->faultstring;
        // }







        $client = new SoapClient("http://188.0.240.110/class/sms/wsdlservice/server.php?wsdl");
        $user = "09362997891";
        $pass = "Faraz@2740675747";
        $fromNum = "+98100009";
        $toNum = array("9362997891");
        $pattern_code = "104";
        $input_data = array(
            "validation_code" => "12588",
            "login_code" => "rewwwe14",
            "tracking_code" => "qxq3ecv");
        echo $client ->sendPatternSms($fromNum, $toNum, $user, $pass, $pattern_code, $input_data);




        // $url = "https://ippanel.com/services.jspd";

		// $rcpt_nm = array('9334020017');
		// $param = array
		// 			(
		// 				'uname'=>'09362997891',
		// 				'pass'=>'Faraz@2740675747',
		// 				'from'=>'+98100009',
		// 				'message'=>'تست',
		// 				'to'=>json_encode($rcpt_nm),
		// 				'op'=>'send'
		// 			);

		// $handler = curl_init($url);
		// curl_setopt($handler, CURLOPT_CUSTOMREQUEST, "POST");
		// curl_setopt($handler, CURLOPT_POSTFIELDS, $param);
		// curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
		// $response2 = curl_exec($handler);

		// $response2 = json_decode($response2);
		// $res_code = $response2[0];
		// $res_data = $response2[1];


		// echo $res_data;


    @endphp


    <a href="http://sms.farazsms.com/class/sms/webservice/
    send_url.php?from=+98100009&to=09334020017&msg=نهشت&uname=09362997891&pass=Faraz@2740675747">22</a>

    <a href="http://ippanel.com/class/sms/webservice/
    send_url.php?to=09334020017&msg=yourmsg&uname=09362997891&pass=Faraz@2740675747">dfdf</a>
@endsection
