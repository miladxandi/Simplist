<?php

namespace Plugin\Payment;

class Zarinpal
{
    private $Trans;
    private static $Amount;
    private $Verify;
    public function __construct()
    {

    }

    public function Transaction()
    {
        $data = array('MerchantID' => 'Your Zarinpal Merchant ID',
            'Amount' => intval($_POST['Amount']),
            'Name' => $_POST['Name'],
            'Email' => $_POST['Email'],
            'Mobile' => $_POST['Phone'],
            'Description' => $_POST['Order']." - ".$_POST['Description'],
            'CallbackURL' => 'https://eastcloud.ir/Verify?Amount='.intval($_POST['Amount']).'&Description='.$_POST['Order']." - ".$_POST['Description']
            );
        setcookie("COTPF",password_hash($_POST['Amount'],1),time()+60*60,"","eastcloud.ir",true,true);
        $jsonData = json_encode($data);
        $ch = curl_init('https://www.zarinpal.com/pg/rest/WebGate/PaymentRequest.json');
        curl_setopt($ch, CURLOPT_USERAGENT, 'ZarinPal Rest Api v1');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($jsonData)
        ));
        $result = curl_exec($ch);
        $err = curl_error($ch);
        $result = json_decode($result, true);
        curl_close($ch);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            if ($result["Status"] == 100) {
                header('Location: https://de.zarinpal.com/pg/StartPay/' . $result["Authority"]);
            } else {
                echo'ERR: ' . $result["Status"];
            }
        }
    }
    public function Confirmation()
    {
        if (isset($_COOKIE['COTPF']) == true && password_verify($_GET['Amount'],$_COOKIE['COTPF']) == true)
        {
            $Authority = $_GET['Authority'];
            $data = array('MerchantID' => 'Your Zarinpal Merchant ID', 'Authority' => $Authority, 'Amount' => self::$Amount);
            $jsonData = json_encode($data);
            $ch = curl_init('https://de.zarinpal.com/pg/rest/WebGate/PaymentVerification.json');
            curl_setopt($ch, CURLOPT_USERAGENT, 'ZarinPal Rest Api v1');
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($jsonData)
            ));
            $result = curl_exec($ch);
            $err = curl_error($ch);
            curl_close($ch);
            $result = json_decode($result, true);
            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                if ($result['Status'] == 100) {
                    echo 'Transation success. RefID:' . $result['RefID'];
                    setcookie("RefID",$result['RefID']);
                } else {
                    echo 'Transation failed. Status:' . $result['Status'];
                }
            }
        }
        else
        {
            header("Location: /Badrequest");
        }

    }
}