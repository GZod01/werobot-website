<?php
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
$url = $_GET["code"] ?? $_GET["path"] ?? $_GET["url"] ?? $argv[1] ?? "https://werobot.fr/images/logo.png";

function urlIsAvailable($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT_MS,1000);
    curl_setopt($ch,CURLOPT_TIMEOUT_MS,2000);
    curl_setopt($ch, CURLOPT_HEADER,true);
    $response = curl_exec($ch);
    $res = !(curl_errno($ch) or curl_getinfo($ch, CURLINFO_HTTP_CODE)!==200);
    curl_close($ch);
    return $res;
}

function getImage($url){
    $alternativeurl = "./hellowrld/".str_replace([":","/"],"-",$url);
    if(file_exists($alternativeurl)){
	header('Content-Type: '.mime_content_type($alternativeurl));
	die(file_get_contents($alternativeurl));
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT_MS,1000);
    curl_setopt($ch,CURLOPT_TIMEOUT_MS,2000);
    $response = curl_exec($ch);
    $res = !(curl_errno($ch) or curl_getinfo($ch, CURLINFO_HTTP_CODE)!==200);
    if($res){
	$f = file_get_contents("alldomains");
	if(!str_contains($f,$url)){
	    $f.="\n".$url;
	    file_put_contents("alldomains",$f);
	}
	header('Content-Type: '.curl_getinfo($ch, CURLINFO_CONTENT_TYPE));
	file_put_contents($alternativeurl,$response);
	die($response);
    }
    else{
	header('Content-Type: image/png');
	die(file_get_contents(/*"https://media4.giphy.com/media/kFgzrTt798d2w/giphy.gif?cid=6c09b952ydxjfsstihmewt3scg3w3cqtseu7k3n08tjto20n&ep=v1_gifs_search&rid=giphy.gif&ct=g"));//*/"./assets/images/logo.png"));
    }
    curl_close($ch);
}
if(isset($_GET["code"])){
    $url = "https://s.werobot.fr/".$_GET["code"];

}
getImage($url);
