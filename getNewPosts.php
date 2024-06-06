<?php
$lastdate = strtotime("2024-05-28 23:00:00");
$v = json_decode(file_get_contents("https://api.werobot.fr/post"),true);
$nv = array_filter($v["data"]["posts"], function($a){global $lastdate;$res = strtotime($a["created_at"])>$lastdate; return $res;});
foreach($nv as $p){
    print_r($p["id"].PHP_EOL);
    $slug = $p["slug"];
    $fileName = $slug;
    $locale = ($p["locale"]==="en")?(".".$p["locale"]):"";
    if ($locale===".en"){
        $res = array_filter($nv, function($a)use($p){return ($p["identifier"]===$a["identifier"])and($a["locale"]==="fr");});
	$fileName = (count($res)>0)?$res[array_keys($res)[0]]["slug"]:$fileName;
    }
    $fileName.=$locale.".md";
    $title= $p["title"];

    $content = str_replace("\\\"","\"",str_replace("\\n","\n",
	json_decode(file_get_contents("https://api.werobot.fr/post/$p[id]"),true)["data"]["post"]["content"]));
    $created_at = $p["created_at"];
    $updated_at = $p["updated_at"];
    $description= str_replace("\\n","\n",$p["description"]);
    $image = $p["image"];
    $filecontent = "---
title: \"$title\"
date: \"$created_at\"
lastupdate: \"$updated_at\"
banner: \"$image\"
slug: \"$slug\"
description: \" 
$description
\"
---
$content
    ";
    print_r($fileName.PHP_EOL.PHP_EOL.$filecontent.PHP_EOL.PHP_EOL.PHP_EOL);
    file_put_contents("content/blog/".$fileName, $filecontent);
    
}
    
