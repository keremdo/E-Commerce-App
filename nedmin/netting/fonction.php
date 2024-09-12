<?php
ob_start();

function seo($text)
{
    // Türkçe karakterler ve karşılık gelen İngilizce karakterler
    $turkish = ['ç', 'ğ', 'ı', 'ö', 'ş', 'ü', 'Ç', 'Ğ', 'İ', 'Ö', 'Ş', 'Ü'];
    $english = ['c', 'g', 'i', 'o', 's', 'u', 'C', 'G', 'I', 'O', 'S', 'U'];

    // Türkçe karakterleri İngilizce karşılıklarıyla değiştir
    $text = str_replace($turkish, $english, $text);

    // Tüm boşlukları "-" işareti ile değiştir
    $text = str_replace(' ', '-', $text);

    return $text;
}

?>