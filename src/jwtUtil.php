<?php

// class JwtUtil { 
//     function getJwt( ) {
//         $key= require'getKey.php';

//         $secret_key = $key['secretKey'];

//         // echo $secret_key;
//         return $secret_key;
//     }
// }

require_once'../vendor/autoload.php';

use Firebase\JWT\JWT;

class JwtUtil {
    function setJWT() {

        echo 'JWT Key: '."'". $this->createToken() ."'". "\n";
        // echo 'encrypted JWT Key: '."'".  ."'". "\n";
    }
    function createToken() {
        $config = require_once 'config.php';
        $seKey = $config['secretKey'];
        
        $payLoad = array (
            'iss'=> "janith",
            'ist'=> time(),
            'exp'=> strtotime("+1 hour"),
            'email'=> "janith@gmial.com",
            
        );
        
        $jwt = JWT::encode($payLoad, $seKey,'HS256');

        return $jwt;
    }

    function decodeToken() {    

    }

}
