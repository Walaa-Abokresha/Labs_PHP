<?php
//1-show your phpinfo on browser:-
     phpinfo();
         echo "<hr>";
//2-Constant:-
     define("websiteName","CeraVe");
         echo constant("websiteName");
         echo "<br>";
     const websiteName2 = 'DINA Farms';
         echo constant ("websiteName2");
         echo "<br>";
         echo "<hr>";
//3-Server:Name,address,port:-
         // echo"<pre>";
         // PRINT_r($_SERVER);
         // echo"</pre>";
     print($_SERVER['SERVER_NAME']);
         echo "<br>";
     print($_SERVER['SERVER_ADDR']);
         echo "<br>";
     print($_SERVER['SERVER_PORT']);
         echo "<br>";
         echo "<hr>";
//4-File Name and path:-
         echo __FILE__;
         echo "<br>";
         echo "<hr>";
//5-SWITCH:-
    $age = 10;
    switch ($age) {
        case $age < 5 :
            print("Stay At Home!");
            break;
        case 5 :
            print("Go To Kindergarden!");
            break;
        case $age >=6 && $age <=12:
            print("Go To Grade:XXX");
            break;     
    }




























?>