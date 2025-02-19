<?php
/*$o = 10;
$s = " ahoj <br>";
$e = 5;
//echo ("obsah obdlznika je ".$o*$e." m<sup>2</sup>.");
#ahoj
//ahoj
/*
cau
*/
/**
 * 
 */
/*$a = 2;
$b = 10;
$c = 100;
if  ($a>$b){
    echo($a);
}
else if ($b>$c){
    echo($b);
}
else{
    echo($c);
}


$listZaciatok = [12,4,3,2,10,6,5,4,3,9]; $velkostListu = count($listZaciatok);

$listVysledok = [];

for ($j=0; $j < $velkostListu; $j++) 

    $najmensie = $listZaciatok[0];

for ($i=0; $i < count($listZaciatok); $i++)
{

if ($najmensie > $listZaciatok[$i])
{

    $najmensie = $listZaciatok[$i];

    $poradie = $i;

}

} 
echo("Najmensie v cykle: ". $najmensie. "< br >"); $listVysledok[$j] = $najmensie; array_splice($listZaciatok, $poradie, 1);

for ($i=0; $i < count($listVysledok); $i++)
{ 
    echo($listVysledok[$i+].", ");
}*/

//print_r($_POST);

if($_SERVER["request_method"] === 'POST'){
    if(isset($_POST['cislo1']) && isset($_POST['cislo2'])){
        $cislo1 = $_POST['cislo1'];
        $cislo2 = $_POST['cislo2'];
        $sucet = $cislo1 + $cislo2;
    }
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        <fieldset>
            <legend>Zadaj cisla</legend>
            <label for="cislo1">Zadaj cislo 1</label>
            <input type="text" name="cislo1" id="cislo1"><br><br>

            <label for="cislo2">Zadaj cislo 2</label>
            <input type="text" name="cislo2" id="cislo2"><br>

            <input type="submit" value="Scitaj">

        </fieldset>
    </form>

    <strong><?php echo('Sucet cisel je'.$sucet)?></strong>
</body>
</html>