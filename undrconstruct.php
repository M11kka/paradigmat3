<?php
class Henkilo {
    var $etunimi;
    var $sukunimi;
    var $ika;
    
    function __construct($etunimi, $sukunimi, $ika) {
        $this->etunimi = $etunimi;
        $this->sukunimi = $sukunimi;
        $this->ika = $ika;
    }
    function puhu(){
        echo "hei, nimeni on $this->etunimi $this->sukunimi. olen $this->ika vuotta! <br>";
    }
}
$mina = new Henkilo("John","Doe",46);


$mina->puhu();


?>