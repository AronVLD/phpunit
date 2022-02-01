<?php
  namespace TDD;

  include("./receipt.php");

 $aantalBezoekers = 1200;
 $prijsTickets = 45;
?>


<h1>Unittest</h1>

<h3>Het totaalbedrag van de rekening is: 
  <?php if(kostenBenefietConcert == 10800){
    echo"Wanneer er 1200 bezoekers komen op de benefietavvond die ieder 45 euro hebben uitgegeven aan een ticket kan er 10800 euro worden uitgegeven aan een band die gaat spelen" }

?> bezoekers</h3>

<h3>Het productbedrag van de rekening is: <?php echo $receipt->product($rekening); ?> euro</h3>

<hr>

