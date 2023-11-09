<style>
    td {
        border: 1px solid white;
        text-align: center;
        padding: 5px;
    }
    tr {
        text-align: center;
    }
</style>

<?php
    echo "<tr>";
    echo "<th></th>";
    for($i = 1; $i <= 10; $i++) {
        echo "<th> {$i} </th>";
    };
    echo "</tr>";
    for($i = 1; $i <= 10; $i++) {
        echo "<tr><th>{$i}</th>";
        for($j = 1; $j <= 10; $j++) {
            $result = $i / $j;
            $rounded_result = round($result, 2);
            echo "<td>{$rounded_result}</td>";
        }
    };
?>