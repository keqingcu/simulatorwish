<?php

require_once "./database/connect.php";

function RateUpWeapon($setid){
    global $conn;
    $sql = "SELECT * FROM epitome_invocation_8 WHERE id=$setid";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    echo "<img src='../../images/" . $row["image"] . "' style='float:center;margin-right:3%;'></br>";
    echo "<div style='padding-top:10px'>";
    if(strlen($row["name"])<=8){
        $more = "";
    }else{
        $more = "...";
    }
    echo substr($row["name"], 0, 8) ."" .$more;
    echo "</br>" . $row["tier"];
    echo "</div>";
}

?>