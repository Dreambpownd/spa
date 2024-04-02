<?php

function getUsersList(){
    $users = [
        'admin' => ['id' => '1', 'password' => '01cfcd4f6b8770febfb40cb906715822', 'birthday' => '02.04.2004'], // пароль 54321
        'user' => ['id' => '2', 'password' => '3acd9e4589d2a2eb4805a5cdde8cc694', 'birthday' => '17.11.1992'], // пароль 12564623
    ];
    return $users;
};

function existsUser($login){
    if (array_key_exists($login, getUsersList())){
        return true;
    }
};

function checkPassword($login, $password){
    if(existsUser($login)){
        if(md5($password) === getUsersList()[$login]['password']){
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
};
function daysUntilBirthday($birthday){
    $arr = explode('.', $birthday);
    $tm = mktime(0, 0, 0, $arr[1], $arr[0], date('Y'));
    if($tm<time()) $tm = mktime(0, 0, 0, $arr[1], $arr[0], date('Y')+1);
    return intval( ($tm - time())/86400 );
}

function getCurrentUser(){

};
