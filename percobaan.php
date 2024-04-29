<?php

$daftar_item = array("apel", "mangga", "pisang");

echo "Menggunakan for:<br>";
for ($i = 0; $i < count($daftar_item); $i++) {
    echo ($i + 1) . ". " . $daftar_item[$i] . "<br>";
}

echo "<br>Menggunakan foreach:<br>";
$urutan = 1;
foreach ($daftar_item as $item) {
    echo $urutan . ". " . $item . "<br>";
    $urutan++;
}

////////////////////////////////////////////////////////////

$buah = array("mangga", "apel", "pisang");

for ($i = count($buah); $i > 0; $i--) {
    echo $i . ". " . $buah[$i - 1] . "<br>";
}

$index = count($buah);
foreach ($buah as $item) {
    echo $index-- . ". " . $item . "<br>";
}

?>
