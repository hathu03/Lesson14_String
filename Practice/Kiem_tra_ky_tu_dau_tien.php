<?php
function isFirstletterUpperCase($str) {
    $regexp = 'C';
    if (preg_match($regexp, $str)) {
        echo ("Day la ki tu dau tien cua chuoi");
    } else {
        echo ("Day khong phai la ki tu dau tien cua chuoi");
    }
}
