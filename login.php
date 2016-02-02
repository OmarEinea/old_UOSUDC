<html>
<body>
<?php
    $url = "https://uos.sharjah.ac.ae:9050/prod_enUS/twbkwbis.P_ValLogin";
    $info = array('sid' => urlencode($_POST["sid"]), 'PIN' => urlencode($_POST["pin"]));

    foreach($info as $key=>$value) {$info_string .= $key.'='.$value.'&'}
    rtrim($info_string, '&');

    $ci = curl_init();
    curl_setopt($ci, CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_POST, count($info));
    curl_setopt($ch,CURLOPT_POSTFIELDS, $info_string);

    /*curl_setopt($ci, CURLOPT_FAILONERROR, true);
    curl_setopt($ci, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ci, CURLOPT_AUTOREFERER, true);
    curl_setopt($ci, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ci, CURLOPT_TIMEOUT, 10);*/

    $page = curl_exec($ci);
?>
</body>
</html>
