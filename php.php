<?php 

$namaRPL = ["satria, uswatun"];

$datasiswa = [[
    "nama" => "satria",
    "umur" => 17,
    "jurusan" => "rpl",]
,
[
    "nama" => "uswatun",
    "umur" => 18,
    "jurusan" => "pplg",]
];

$siswarpl = [
    ["nama" => "Satria", "umur" => 17, "jurusan" => "RPL"],
    ["nama" => "Uswatun", "umur" => 18, "jurusan" => "PPLG"],
];

echo "ini kalau pakai array asosiatif :<br><br>

<p>halo namaku ".$datasiswa[0]["nama"]." dan ini temanku namanya ".$datasiswa[1]["nama"]."</p>
<p>kalau aku umurku ".$datasiswa[0]["umur"]." kalau temmanku umurnya ".$datasiswa[1]["umur"]." </p>
aku jurusan ".$datasiswa[0]["jurusan"]." dan temanku juga sama dia jurusan ".$datasiswa[1]["jurusan"]." juga<br><br>

<br>ini kalau pakai array multidimensi :<br><br>

<p>halo namaku ".$siswarpl[0]["nama"]." dan ini temanku namanya ".$siswarpl[1]["nama"]."</p>
<p>kalau aku umurku ".$siswarpl[0]["umur"]." kalau temmanku umurnya ".$siswarpl[1]["umur"]." </p>
aku jurusan ".$siswarpl[0]["jurusan"]." dan temanku juga sama dia jurusan ".$siswarpl[1]["jurusan"]." juga<br><br>";

$DATA = [

    ["nama" => "Satria", "umur" => 17, "jurusan" => "RPL"],
    ["nama" => "Uswatun", "umur" => 18, "jurusan" => "PPLG"],
];

foreach ($DATA as $key => $item) {
    echo "Nama: " . $item["nama"] . "<br>";
    echo "Umur: " . $item["umur"] . "<br>";
    echo "Jurusan: " . $item["jurusan"] . "<br>";
    echo "<br>";
}

$DATANAMA = [
    "nama" => "Satria", "umur" => 17, "jurusan" => "RPL"
];

foreach ($DATANAMA as $ARRAY => $HASIL) {
    echo $ARRAY." : ".$HASIL."<br><br>";
}

$kata = [
    [
        "katabelanja" => [
            "1" => "Jenis Barang : ",
            "2" => "Nama Barang : ",
            "3" => "Jumlah Barang : ",
        ]
    ]];
$belanja = [
    [
        "jenis" => "buah",
        "item" =>[
            "namabuah/sayur" => "jeruk",
            "jumlah" => 3,
        ],
    ],
    
    [
        "jenis" => "sayur",
        "item" =>[
            "namabuah/sayur" => "bayam",
            "jumlah" => 5,
        ],
    ]
];

foreach ($belanja as $barang) {
    echo $kata[0]["katabelanja"]["1"]. $barang["jenis"]."<br>";
    echo $kata[0]["katabelanja"]["2"]. $barang["item"]["namabuah/sayur"]."<br>";
    echo $kata[0]["katabelanja"]["3"]. $barang["item"]["jumlah"]."<br><br>";
}
?>