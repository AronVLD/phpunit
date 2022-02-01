<?php
  namespace TDD\Test;

  require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

  use PHPUnit\Framework\TestCase;
  use TDD\Receipt;

  class BenefietAvondTest extends TestCase {

public function testKostenBenefietConcert(dataProvider provideKostenBenefietConcert)
{
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