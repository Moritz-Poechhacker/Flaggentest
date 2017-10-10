<?php
/**
 * Created by PhpStorm.
 * User: Moritz
 * Date: 26.09.2017
 * Time: 09:25
 */
class Flag{
    var $Bezeichnung;
    var $Farbe;
    var $Form;
    var $Flaecheninhalt;

    public function __construct(string $Bezeichnung, string $Farbe, string $Form, string $Flaecheninhalt){
        $this->Bezeichnung = $Bezeichnung;
        $this->Farbe = $Farbe;
        $this->Form = $Form;
        $this->Flaecheninhalt = $Flaecheninhalt;
    }

    public function __toString() : string{
        return "Flagge mit Bezeichnung: ".$this->Bezeichnung.", Farbe: ".$this->Farbe.", Form: ".$this->Form." und Flaecheninhalt: ".$this->Flaecheninhalt."\r\n";
    }
}

$FLD1 = new Flag("Piratenseitenfahne", "Schwarz", "Dreieck", "400 cm^2");
$FLD2 = new Flag("Warnfähnchen", "Rot", "Dreieck", "100 cm^2");
$FLR1 = new Flag("Piratenhauptfahne", "Schwarz", "Rechteck", "4000 cm^2");
$FLR2 = new Flag("Oesterreichische Flagge", "Rot, Weiss, Rot", "Rechteck", "5000cm^2");
$FLQ1 = new Flag("Quadratfahne", "Gruen", "Quadrat", "10000 cm^2");
$FLQ2 = new Flag("MinQuadratfahne", "Gelb", "Quadrat", "100 cm^2");

echo $FLD1;
echo $FLD2;
echo $FLR1;
echo $FLR2;
echo $FLQ1;
echo $FLQ2;
