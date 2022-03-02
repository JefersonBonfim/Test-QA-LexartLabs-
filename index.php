<?php
echo "Create an algorithm that loops through a one-dimensional array containing letters and numbers: [ “a”, 10, “b”, “hola”, 122, 15]. <br><br>
<strong> Get an array containing only letters </strong><br>
<strong> Get an array containing only numbers </strong><br>
<strong> Get largest number from previous array </strong><br><br>";

$array = array("a", 10, "b", "hola", 122, 15);


$onlyWords = preg_replace("/[^a-zA-Z]/","", $array); // -> somente letras
$onlyNumebers = preg_replace("/[^0-9]/","", $array);// -> somente numeros

echo '<strong> Array Values : </strong> ';
print_r($array);
echo '<br/>';

echo '<strong> Only Words </strong>';// -> Texto antes do resultado
print_r(array_filter($onlyWords));//  -> printa o resultado
echo "<br>";

echo '<strong> Only Numbers </strong>';
print_r(array_filter($onlyNumebers)); //  -> printa o resultado
echo "<br>";

echo '<strong> Largest Number </strong>'; // -> Texto antes do resultado
echo max($onlyNumebers); // -> maior numero do array anterior

echo "<br>";

echo "--------------------------------------------------------------------------------------------- <br><br>";

echo "2. Create a search algorithm that verifies that: the let value a = 10 is not inside the array: [ 1, 11, “a”, “b”, 123].<br><br>
<strong> Use the loop FOR</strong><br><br>
";

$array = array (1, 11, "a", "b", 123);
$a = 10;
foreach ($array as $data) {
        if ($a == $data) {
            echo "<strong> Array values:</strong> ";
            print_r($array);
            echo "<br>";
            echo "Match found: <strong>a = ".$a. "</strong> is inside.";
            return true;
        }
}
echo " <strong> Array values: </strong> ";
print_r($array);
echo "<br>";
echo "Not found: <strong>a = " .$a. "</strong> is not inside";
return false;














?>







