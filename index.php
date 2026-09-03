<?php
//add html styling

echo ("Hello there! <br>");
echo ("This is the latest version......! <br>");

$amount = 300;
$rate = 50;
$myName = "James";

echo ($amount * $rate . "<br>");
echo ($myName . " is owning me " . $amount . " at rate of " . $rate . " per day <br>");

//calculate the price to buy goat meat
function goatMeat($quantity, $price)
{
  echo (" the price of goat meat is " . $quantity * $price);
}

goatMeat(15, 50);

?>