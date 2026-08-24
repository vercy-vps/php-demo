<?php
echo ("Hello Vercy! <br>");
echo ("I'm back to php! <br>");

$amount = 5000;
$rate = 500;
$myName = "Somto";

echo ($amount * $rate. "<br>");
echo ($myName . " is owning me " . $amount . " at rate of " . $rate . " per day <br>");

//calculate the price to buy goat meat
function goatMeat($quantity, $price)
{
  echo ($quantity * $price);
}

goatMeat(2, 500);

?>