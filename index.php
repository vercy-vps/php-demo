<?php
echo ("Hello Vercy! <br>");

$amount = 15000;
$rate = 500;
$myName = "Mirabel";

echo ($amount * $rate. "<br>");
echo ($myName . " is owning me " . $amount . " at rate of " . $rate . " per day <br>");

//calculate the price to buy goat meat
function goatMeat($quantity, $price)
{
  echo ($quantity * $price);
}

goatMeat(2, 500);

?>