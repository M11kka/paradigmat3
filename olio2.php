<?php

class Person {
    var $etunimi;
    var $sukunimi;
    
    function koko_nimi() {
        return $this->etunimi . " " . $this->sukunimi;
    }
}
$person = new Person();
$person->etunimi = 'Pekka';
$person->sukunimi = 'Vennamo';

$person2 = new Person();
$person2->etunimi = 'Iiro';
$person2->sukunimi = 'Viinanen';

echo $person->koko_nimi() . "<br>";
echo $person2->koko_nimi() . "<br>";


?>