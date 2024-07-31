<?php
foreach($argv as $u){
    if($u===$argv[0]) continue;
    echo "$u\n";
    file_put_contents(str_replace("/","-",$u),file_get_contents($u));
}
