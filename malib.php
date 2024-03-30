<?php

    function somme($a,$b=0){
        return $a + $b;
    }

    function produit($a,$b){
        return $a * $b;
    }

    function square($a){
        return $a * $a;
    }

    function cube($a){
        return $a * $a * $a;
    }

    function facto($a){
        $p = 1;
        for($i=1;$i<=$a;$i++){
            $p = $p*$i;
        }
        return $p;
    }
    function rfacto($a){
        if($a == 0){
            return 1;
        }else{
          return  $a * rfacto($a-1);
        }

    }    
?>