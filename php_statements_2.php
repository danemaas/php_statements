<?php
//================= Q: 2
$quantity1 = 70;
$quantity2 = 100;
$price1 = 35;
$price2 = 30;

//calculate the total cost per deal
$totalCostD1 = $quantity1 * $price1;
$totalCostD2 = $quantity2 * $price2;

//compare the total costs to find the best deal
if ($totalCostD1 < $totalCostD2) {
    $bestDeal = 1;
    $bestTotalCost = $totalCostD1;
} else {
    $bestDeal = 2;
    $bestTotalCost = $totalCostD2;
}

echo "Deal {$bestDeal} is the best option. Total cost: $" . number_format($bestTotalCost, 2);
echo "<br><br>";
?>