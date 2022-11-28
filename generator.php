<?php

$banner = "\e[36;1m                                                                                 
                                                                                 
           #         ######   
           #    #             
  ######   #    #  ########## 
           #    #  #        # 
           #######        ##  
##########      #       ##    
                #     ##      
                              
                                                                                 
[#] HMA License Key Generator [#]    
                                   
Coded by : Revan AR                  
Team     : IndoSec                   
Github   : https//github.com/revan-ar/\n\n\e[0;1m";

sleep(3);
echo $banner;
sleep(1);
echo "masukan license awal : ";
$lic = trim(fgets(STDIN));
sleep(1);
echo "masukan jumlah generate : ";
$jum = trim(fgets(STDIN));
for ($i=1; $i <= $jum; $i++) {
$h = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$a = "1234567890";

$r = $h.$a;
$go = str_shuffle($r);
$rand = substr($go, rand(0,20), 6);
$file = "list_key.txt";
//menggabungkan license awal dengan hasil generate
$res = $lic."-".$rand."\n";
touch($file);
$o = fopen($file, 'a');
fwrite($o, $res);
fclose($o);
}
