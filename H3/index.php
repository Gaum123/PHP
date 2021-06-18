<?php

$apen = [1,2,3,4,5,6,7,8,9];

for($i=0;$i < 8; $i++){
    echo "<img src='img/apen/aap".$apen[$i+1].".jpg'>";
}

$boom = ["*","* *", "* * *", "* * * *", "* * * * *", "* * * * * *", "* * * * * * *"];
for ($i = 0; $i< 7; $i++) {
    echo "<p style='text-align:center'>" . $boom[$i] . "</p>";
}



for ($x = 35; $x >= 25; $x--) {
    echo "hoppelelee<br>";
}

for($i=0;$i < 8; $i++){

    if ($i%2==0){
        echo "<img style='border:3px solid blue' src='img/apen/aap".$apen[$i+1].".jpg'>";
    }
    else{
        echo "<img style='border:3px solid red' src='img/apen/aap".$apen[$i+1].".jpg'>";
    }
}

$leeftijd = [10,2,65,12];
$betalen = 0;
$mensen = 0;
for ($i = 0; $i <= count($leeftijd) - 1; $i++) {
    if ($leeftijd[$i] > 65 || $leeftijd[$i] < 3) {
        $mensen++;
    } elseif ($leeftijd[$i] <= 12) {
        $betalen += 5;
        $mensen++;
    } else {
        $betalen += 10;
        $mensen++;
    }
}
echo "<br>",$betalen,"<br>", $mensen;


$zwemclubs["spartelkuikens"] = 25;
$zwemclubs["waterbuffels"] = 32;
$zwemclubs["Plonsmderin"] = 11;
$zwemclubs["Bommetje"] = 23;

echo "<table border='1'>";
foreach ($zwemclubs as $label => $waarde) {
    echo "<tr><td>" . $label . "</td><td>" . $waarde . "</td><td>";
    for ($i = 0; $i < (floor($waarde / 5)); $i++) {
        echo "<img src='img/zwemmer.png'>";
    }
    echo "</td></tr>";
}
echo "</table>";


$kappersagenda[9.15] = "";
$kappersagenda[9.30] = "Willems";
$kappersagenda[10.00] = "";

print("De volgende momenten zijn nog beschikbaar:<ul>");
foreach($kappersagenda as $tijd => $afspraak) {
    if($afspraak == "") {
        print("<li>".$tijd."</li>") ;
    }
}
