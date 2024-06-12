<?php
$pegawai = array("lina","arni","jona","hana","rini","roy");
echo "<strong>sebelum diurutkan </strong><br/>";
foreach($pegawai as $data => $nama){
    echo "$data: $nama"."<br/>";
}
sort($pegawai);

echo "<strong>Setelah diurutkan</strong><br/>";
foreach($pegawai as $data => $nama){
    echo "$data: $nama"."<br/>";
}
?>