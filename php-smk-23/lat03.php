<?php 

    

    function belajar() {
        echo "Saya Belajar PHP";
    }

    function luasPersegi($p = 5,$l = 3){
        $luas= $p * $l;

        echo $luas;  
    }

    function luas ($p = 5,$l = 3){
        $luas= $p * $l;

        return $luas;  
    }

    function output (){
        return "Belajar Function";
    }

    // echo luas(100,3) * 5;

    luasPersegi(12, 9);

    
?>