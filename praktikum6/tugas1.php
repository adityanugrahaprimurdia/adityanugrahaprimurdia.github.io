<?php
// Membuat array asociatif
$students = array(
    "John" => array("age" => 20, "grade" => "A"),
    "Alice" => array("age" => 19, "grade" => "B"),
    "Bob" => array("age" => 21, "grade" => "A"),
    "Eve" => array("age" => 20, "grade" => "B")
);

// Mencetak array asosiatif
echo "Array Asosiatif Awal:\n";
print_r($students);

// Membuat fungsi pengurutan berdasarkan umur
function sort_by_age($a, $b) {
    return $a["age"] - $b["age"];
}

// Mengurutkan array asosiatif berdasarkan umur
usort($students, "sort_by_age");

// Mencetak array asosiatif setelah diurutkan
echo "\nArray Asosiatif Setelah Diurutkan:\n";
print_r($students);

// Membuat fungsi pengurutan berdasarkan nilai
function sort_by_grade($a, $b) {
    return strcasecmp($a["grade"], $b["grade"]);
}

// Mengurutkan array asosiatif berdasarkan nilai
usort($students, "sort_by_grade");

// Mencetak array asosiatif setelah diurutkan
echo "\nArray Asosiatif Setelah Diurutkan Berdasarkan Nilai:\n";
print_r($students);

// Membuat fungsi pengurutan berdasarkan nama
function sort_by_name($a, $b) {
    return strcasecmp($a, $b);
}

// Mengurutkan array asosiatif berdasarkan nama
usort($students, "sort_by_name");

// Mencetak array asosiatif setelah diurutkan
echo "\nArray Asosiatif Setelah Diurutkan Berdasarkan Nama:\n";
print_r($students);
?>