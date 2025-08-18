//Question:1   <br>
<?php
$length = 10;
$width = 5;

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "Length = $length, Width = $width<br>";
echo "Area of Rectangle = $area<br>";
echo "Perimeter of Rectangle = $perimeter<br>";
?>
//Question:2   <br>
<?php
$amount = 1000;
$vat = $amount * 0.15;

echo "Amount = $amount<br>";
echo "VAT (15%) = $vat<br>";
?>
//Question:3   <br>
<?php
$number = 27;

if ($number % 2 == 0) {
    echo "$number is Even<br>";
} else {
    echo "$number is Odd<br>";
}
?>
//Question:4   <br>
<?php
$a = 15; $b = 25; $c = 20;

if ($a >= $b && $a >= $c) {
    $largest = $a;
} elseif ($b >= $a && $b >= $c) {
    $largest = $b;
} else {
    $largest = $c;
}

echo "The largest number is $largest<br>";
?>
//Question:5   <br>
<?php
for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo "$i ";
    }
}
    echo "<br>";

?>
//Question:6   <br>
<?php
$arr = array(10, 20, 30, 40, 50);
$search = 30;
$found = false;

foreach ($arr as $value) {
    if ($value == $search) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "$search found in array";
} else {
    echo "$search not found in array";
}
    echo "<br>";

?>
//Question:7   <br>
<?php
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

echo "<br>";

echo "1 2 3<br>";
echo "1 2<br>";
echo "1<br><br>";

$char = 'A';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $char . " ";
        $char++;
    }
    echo "<br>";
}
?>
//Question:8   <br>
<?php
$arr = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];

for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr[$i]); $j++) {
        echo $arr[$i][$j] . " ";
    }
    echo "<br>";
}

echo "<br>";

echo "1 2 3<br>";
echo "1 2<br>";
echo "1<br><br>";

$char = 'A';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $char . " ";
        $char++;
    }
    echo "<br>";
}
?>
