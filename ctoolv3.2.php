#!/bin/php
<?php
/*
----------------------------
PHP Encode V8.5 By Đinh Tấn Phát
Time        : 13-02-2023 Monday 20:11:32
IP          : 
Andress     : Phú Khương - Tây Ninh Province
Country     : VN
Useragent   : 
Description : 
Get Rented Encode : Zalo : 0964747434
----------------------------
*/
error_reporting(E_ERROR);
$version = phpversion();
if (!function_exists("__717uehe8eieueh__")) {
  function __717uehe8eieueh__($version) {
    if (strtoupper(substr(PHP_OS, 0, 3)) === "LIN") {
      if (!isset($machine)) {
        $machine = posix_uname()["machine"];
      }
      system("pkg i tur-repo -y");
      system("pkg i php7 -y");
      system("pkg i php7-dgbaopro -y");
      die("Cài đặt thành công, chạy lại tool nhé\n");
    } elseif (strtoupper(substr(PHP_OS, 0, 3)) === "WIN") {
      $machine = trim(explode("=>", shell_exec('php -i|find "Architecture"'))[1]); $compile = trim(explode("=>", shell_exec('php -i|find "Compiler"'))[1]);
      if(stripos($version,"7.4") !== false){
        if($machine == "x64"){
          $loader = file_get_contents("https://raw.githubusercontent.com/dichvucoder/dgbaopro/main/win_74_x64.dll");
        }else{
          $loader = file_get_contents("https://raw.githubusercontent.com/dichvucoder/dgbaopro/main/win_74_x86.dll");
        }
      }elseif(stripos($version,"8.1") !== false){
        if($machine == "x64"){
          $loader = file_get_contents("https://raw.githubusercontent.com/dichvucoder/dgbaopro/main/win_81_x64.dll");
        }else{
          $loader = file_get_contents("https://raw.githubusercontent.com/dichvucoder/dgbaopro/main/win_81_x86.dll");
        }
      }else{
        die("Phiên bản không hỗ trợ\n");
      }
      file_put_contents(ini_get("extension_dir")."/php_dgbaopro.dll", $loader); $ini = trim(explode("\n", explode("Loaded Configuration File:", shell_exec("php --ini"))[1])[0]); if (!(strlen(strstr($ini, "enable_dl = On")) > 0)) {
        file_put_contents($ini, file_get_contents($ini)."\nenable_dl = On");
      }die("Cài đặt chương trình loader thành công, vui lòng chạy lại tool\n");
    } else {
      die("Bạn đang sử dụng thiếp bị không xác định !\n");
    }}}while (!extension_loaded("dgbaopro")) {
  if (dl("dgbaopro")) {
    break;
  } else {
    __717uehe8eieueh__($version);
  }}dgbaopro\loader::api("execute");
__HALT_COMPILER(); ?>
DGBAOPRO+4f10e5616a3460a402208daa48f6d426516ec6da403f310c22385ebe98947a7935cf9d32ae55e4e5e446a812ef8e0980b600d07770c382adc28a5e8fbe0be0864a05ef31f3cfb70c6ac9317aa23e1628tXxLi6Nq1O5/F0QdiaJOBO+35AgqmEkUxJlogoMMRAeKmTiJOhLxfoxVXd29v97fPuzap6FIpSsa3/Wuy7OetdYbM88xpG00cDUgcO+kJkr764j7dM6GWTiGmcT6os36roZpwnPQuOd4JhGsZkQX0agmoctxvPe3fmgoLX7ceuLGBhPf1eB10AKyZeplCxiByGAxGN3nyBLgiSlzSlPaoVXgcVidpDvfIS2GfGh1bsHE5ShBbUAijabD52fyVNQgz9QAWtaknJ8jjQq661CT7FMbjI9/jFaewTStl3N5j66zJ2g04yBYCOeDKIqn2LA5bEg5laOly4XT7Zhl+UZT76i4yi8r4AQtjZWWet2IpVZk7OyME98oPNdwo8AF7ExNsrC1Groi5k2K66i6n8hTSM0yLixq5rZ3NRU0iqrNWwHl0oKh4mxY4OuuY4x3mTaIwFdtytOA+ZSL1znQYxt3uejDZixA9hw95drdF3lo1NMQKehwv13nJntSrYIMtTBOxnut+482od22zP15QYtWsZ9aFrB0LGrhS8e8WCv9UEddUUrCSUedWMLKcMR4lps8h51CV9tf86fnlp97KLxG39OxfQ8ZrV6zJKQ0wXF0SPAGgUO0f3qmz3//85nM0y5ihnH0kus1WBNw6V7A2oBYorMLtbnKtlmYHo/nETe+n+0v148RL1gqF3KjaEl9kfNRDvs3o/CBs2bSThAnPiiRsst1rbrIzSa2kjjeyqUUUuCE2y1oa6ye1t4WEOONeCyxcVIZLf1l3TJW38z0ve6nep3uT0rzDMw4g8uX7mr9GfG9dt8jqn+t7kg/x5PZB+N5vWgiNp6VdrrfELZZkKZWkOKsXJggS7GaREpPiD8lA09/1au3TtLiLh/qLR8E4FtPtgJWxK/twnUSJ/GNWLq4xWOmLNri40+6KTbd6UM3XW5Oz5ncpPvHidiJcVpgljpSILW4uaU6g0tXjLe+r1QegPriRDFdqmkCm7k0lDKdma4+gyFgYqm/6adZ87kGuvva3cejV7t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+%END%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