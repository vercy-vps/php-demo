<?php
echo ("Hello there! <br>");

$amount = 300;
$rate = 50;
$myName = "James";

echo ($amount * $rate. "<br>");
echo ($myName . " is owning me " . $amount . " at rate of " . $rate . " per day <br>");

//calculate the price to buy goat meat
function goatMeat($quantity, $price)
{
  echo ($quantity * $price);
}

goatMeat(2, 500);

?>