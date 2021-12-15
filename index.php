<?php
    header('content-type: text/plain');
    require 'Class_Kasikornbank.php';
    $kbank = new kbiz_lnwseed(array(
        'username' => '',
        'password' => '',
        'accountFrom' => '',
    ));

    //Step1
     //$dataRsso = $kbank->login();
     //$result = $kbank->validateSession($dataRsso);

    //Step2
     $res = $kbank->refreshSession();
     //$res = $kbank->getTransactionHistory(""); //โชว์ประวัติการทำรายการต่างๆ
     //$res = $kbank->getAccountSummaryList();   //โชว์ข้อมูลผู้ใช้ เช่น เลขบัญชี หรือ จำนวนเงินในบัญชี
     //$res = $kbank->p2p_PromptPay("xxxxxxx");  //ทำรายการโอนเงินพร้อมเพย์
     print_r($res);

?>
