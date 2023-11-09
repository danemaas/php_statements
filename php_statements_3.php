<?php
//================= Q: 3
$monthName = 'March';

function checkDaysPerMonth($month)
{
    switch ($month) {
        case "January":
        case "March":
        case "May":
        case "July":
        case "August":
        case "October":
        case "December":
            echo "{$month} has 31 days<br>";
            break;
        case "April":
        case "June":
        case "September":
        case "November":
            echo "{$month} has 30 days<br>";
            break;
        case "February":
            echo "{$month} has 28 days or 29 days in a leap year<br>";
            break;
        default:
            echo "Invalid month.";
    }
}

checkDaysPerMonth($monthName);
echo "<br>";
?>