<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<?php
    class Example {
        public $a=1;
        protected $b=2;
        private $c=3;
        
        function show_abc(){
            echo $this->a;
            echo $this->b;
            echo $this->c;
        }
    }
    class Child extends Example{
        public $a=7;
    }
    $child = new Child();
    echo "public a:" . $child->a . "<br />";
    //echo "protected b:" . $child->b . "<br />";
    //echo "private c:" . $child->c . "<br />";
    
    $child->show_abc();  
    
    $example = new Example();
    echo "public a:" . $example->a . "<br />";
    //echo "protected b:" . $example->b . "<br />";
    //echo "private c:" . $example->c . "<br />"; 
    $example->show_abc(); 
    ?>