<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sid = test_input($_POST["sid"]);
        $spw = test_input($_POST["spw"]);
        echo $sid."<br/>";
        echo $spw."<br/>";
    }
?>