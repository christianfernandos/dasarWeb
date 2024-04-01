<?php
$pattern = '/go{1,3}d/'; // berfungsi untuk mencocokkan "god", "good", atau "gooood"
$text = 'god is good.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
?>
