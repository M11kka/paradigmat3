<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<?php
    class Auto {
        public $renkaita;
        public $ovia;
        
    function __construct($renkaita=4, $ovia=4){
        $this->renkaita = $renkaita;
        $this->ovia = $ovia;
    }
    function rengasovia(){
        return $this->renkaita + $this->ovia;
    }
    }

    class PieniAuto extends Auto {
            
            function __construct($ovia=2){
        
        $this->ovia = $ovia;
    }
    }
    $isoauto = new Auto();
    $pikkuauto = new PieniAuto();
    
    echo "autossa on yhteensä " . $isoauto->rengasovia() . " rengasta ja ovea, ";
    echo "mutta pienessä autossa vain " . $pikkuauto->rengasovia();
?>