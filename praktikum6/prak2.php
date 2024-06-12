<?php
$arrayl = array ("Arman", "Bayu", "Feri");
echo "array awal ialah:<br/>";
for($i=0; $i<count($arrayl); $i++){
    echo "data ke-",$i, ":", $arrayl[$i],"<br/>";
}
echo "<br/>Setelah ditambahkan \"Herni, Gita % Dewi\"menggunakan fungsi array_push():<br/>";
array_push($arrayl,"He","Gita","Dewi");
for ($i=0; $i<count($arrayl); $i++){
    echo "data ke-",$i,":",$arrayl[$i],"<br/>";
}

echo "<br/>Setelah bagian awal array dihapus menggunakan fungsi array shift():<br/>";
array_shift($arrayl);
for($i=0; $i<count($arrayl); $i++){
    echo "data ke-",$i,":",$arrayl[$i],"<br/>";
}

echo "<br/>Dan setelah isi array diurutkan menggunakan fungsi sort():<br/>";
sort($arrayl);
for($i=0; $i<count ($arrayl); $i++){
    echo "data ke-",$i, ":",$arrayl[$i],"<br/>";
}
?>