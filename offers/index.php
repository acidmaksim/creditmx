<?php

$offer_id = $_GET['offer_id'];
$gclid = $_GET['gclid'];

if(!empty($_COOKIE['_ga'])){
    $tmp = explode('.', $_COOKIE['_ga']);
    $clientid = $tmp[2].'.'.$tmp[3];
}
else {
    $clientid = "";
};

$cid = $clientid;

if ($offer_id == "1") {
    header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    header("HTTP/1.1 301 Moved Permanently"); 
    header("Location:  https://klinkclick.com/feedro?affiliate_id=1&sub1=cashbro&source=topcreditonline&sourceads=topcreditonline"); 
    exit(); 
}

else if ($offer_id == "2") {
    header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    header("HTTP/1.1 301 Moved Permanently"); 
    header("Location: https://klinkclick.com/feedro?affiliate_id=1&sub1=credit7&source=topcreditonline&sourceads=topcreditonline"); 
    exit(); 
}

else if ($offer_id == "3") {
    header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    header("HTTP/1.1 301 Moved Permanently"); 
    header("Location: https://klinkclick.com/feedro?affiliate_id=1&sub1=creditprime&source=topcreditonline&sourceads=topcreditonline"); 
    exit(); 
}

else if ($offer_id == "4") {
    header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    header("HTTP/1.1 301 Moved Permanently"); 
    header("Location: https://klinkclick.com/feedro?affiliate_id=1&sub1=creditron&source=topcreditonline&sourceads=topcreditonline"); 
    exit(); 
}

else if ($offer_id == "5") {
    header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    header("HTTP/1.1 301 Moved Permanently"); 
    header("Location: https://klinkclick.com/feedro?affiliate_id=1&sub1=horacredit&source=topcreditonline&sourceads=topcreditonline"); 
    exit(); 
}

else if ($offer_id == "6") {
    header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    header("HTTP/1.1 301 Moved Permanently"); 
    header("Location: https://klinkclick.com/feedro?affiliate_id=1&sub1=oceancredit&source=topcreditonline&sourceads=topcreditonline"); 
    exit(); 
}


/*
else if ($offer_id == "3") {
    header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    header("HTTP/1.1 301 Moved Permanently"); 
    header("Location: https://trk.creditinfo.kz/feedkz?affiliate_id=A&sub1=acredit&source=creditinfo&sourceads=creditinfo&gclid=$gclid&cid=$cid"); 
    exit(); 
}
*/


else {
    echo "Empty";
}

?>