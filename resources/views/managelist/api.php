<?php
/* Request RestRequest Library */
Class ThailandPost {

    public static function checkbit( $value ) {
        $factor = '86423597';
        $t = 0;
        for( $i = 0; $i < strlen( $value ) ; $i++ ){
            $t += ( $factor[$i] * $value[$i] );
        }
        $fraction = $t % 11;
        switch( $fraction ){
            case 0 :
                $checkDigit = 5;
                break;
            case 1 :
                $checkDigit = 0;
                break;
            default :
                $checkDigit = 11 - $fraction;
                break;
        }
        return $checkDigit;
    }

    public static function extractBarcode( $text ) {
        $text = trim($text);
        $check = substr( $text , 2 , 11 );
        $prefix = substr( $text, 0, 2 );
        if( strpos( $check, 'XTH' ) !== false) {
            $number = intval( substr( $text , 2 , 8 ) );
            return array(
                'prefix'=>$prefix,
                'number'=>$number
            );
        }
        return false;
    }

    public static function generatorBarcode( $prefix, $number ) {
        $number = sprintf( '%08d' ,$number);
        $checkbit = ThailandPost::checkbit($number);
        $barcode = $prefix.sprintf( '%08d' ,$number).$checkbit."TH";
        return $barcode;
    }

    public static function createOrder( $config, $barcode, $from, $to, $cod_amount=0, $insurance_amount=0  ) {
        $barcode = trim($barcode);
        $url = "https://r_dservice.thailandpost.com/webservice/addItem";
        $username = 'tests';
        $password = '12345';
        $data = array(
            'orderId' => $barcode,
            'invNo' => $barcode,
            "shipperName" => $from["name"],
            "shipperAddress" => $from["address"],
            "shipperDistrict" => "-",
            "shipperProvince" => "-",
            "shipperZipcode" => $from["zipcode"],
            "shipperEmail" => $from["sutthikead@shippop.com"],
            "shipperMobile" => $from["phone"],
            'cusName' => 'tea', 			    // ชื่อผู้รับ
            'cusAdd' => '56', 	// ที่อยู่ผู้รับ
            'cusAmp' => '-', 				    //อำเภอผู้รับ
            'cusProv' => '-', 			        //จังหวัดผู้รับ
            'cusZipcode' => '50180',            //รหัสไปรษณีย์ผู้รับ
            'cusTel' => '0931760535',           //เบอร์โทรผู้รับ
            'productPrice' => $cod_amount,                //COD
            'productInbox' => '-' ,
            'productWeight' => 0,               //หน่วยเป็น กรัม
            'orderType' => 'D' ,
            'barcode'=> $barcode
        );
        if( strlen( $data['cusTel'] ) < 5 || $data['cusTel'] == '-' ){
            $data['cusTel'] = '0800000000';
        }

        $req = new RestRequest( $url , 'JSON' , $data );
        $req->setAuth( $username , $password );
        $req->setTimeout( 30 );
        $req->disableSSLVerify();
        $req->exec();

        $reqBody = $req->getRequestBody();
        $resInfo = $req->getResponseInfo();
        $resBody = $req->getResponseBody();
        $response = json_decode( $resBody , true );
        switch ($response[0]['errorCode']) {
            case '000':
                //Success
                return true;
                break;
            case '018':
                //Duplicate
                break;
            case '029':
                //Product Price Over
                break;
        }
        return false;
    }

    public static function getLabel( $config, $barcode ) {
        $url = "https://r_dservice.thailandpost.com/webservice/LabelPDF?barcode=".$barcode;
        $username = $config["username"];
        $password = $config["password"];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout after 30 seconds
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $result=curl_exec ($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);   //get status code
        curl_close ($ch);
        header('Content-Type: application/pdf');
        echo $result;
    }

    public static function cancelOrder( $config, $barcode ) {
        $url = "https://r_dservice.thailandpost.com/webservice/cancelOrder";
        $username = $config['username'];
        $password = $config['password'];
        $data = array(
            'barcode'=> $barcode
        );
        $req = new RestRequest( $url , 'JSON' , $data );
        $req->setAuth( $username , $password );
        $req->setTimeout( 30 );
        $req->disableSSLVerify();
        $req->exec();$reqBody = $req->getRequestBody();
        $resInfo = $req->getResponseInfo();
        $resBody = $req->getResponseBody();
        $response = json_decode( $resBody , true );
        if( $response[0]['errorCode'] == "000" ) return true;
        return false;
    }

}