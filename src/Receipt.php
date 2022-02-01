<?php
  class BenefietAvond{

    public function kostenBenefietConcert($aantalBezoekers, $prijsTicket) {
        $totaalBedrag = round($aantalBezoekers * $prijsTicket);
        $maxBandUitgaven = ((20 / 100)* $totaalBedrag);
        return $maxBandUitgaven;

        
      if($aantalBezoekers <= 600 && $aantalBezoekers >= 2500) {
          "Concert Afgelast";
      }
      if($prijsTicket <= 25 && $prijsTicket >= 75) {
        "De Ticketprijzen zijn niet realistish";
    }
    if($maxBandUitgaven <= 3500) {
        "Voor dit bedrag is geen band beschikbaar";
    }
  }
?>