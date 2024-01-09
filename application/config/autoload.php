<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| AUTO-LOADER
| -------------------------------------------------------------------
| Berkas ini menentukan sistem apa yang harus dimuat secara default.
|
| Untuk menjaga kerangka kerja seminim mungkin, hanya sumber daya yang sangat minimal dimuat secara default. Misalnya,
| basis data tidak terhubung secara otomatis karena tidak ada asumsi
| dibuat mengenai apakah Anda bermaksud menggunakannya. Berkas ini memungkinkan
| Anda menentukan secara global sistem apa yang ingin dimuat dengan setiap
| permintaan.
|
| -------------------------------------------------------------------
| Instruksi
| -------------------------------------------------------------------
|
| Ini adalah hal-hal yang dapat Anda muat secara otomatis:
|
| 1. Paket-paket
| 2. Perpustakaan
| 3. Driver
| 4. Berkas bantuan
| 5. Berkas konfigurasi kustom
| 6. Berkas bahasa
| 7. Model
|
*/

/*
| -------------------------------------------------------------------
|  Muat Paket Secara Otomatis
| -------------------------------------------------------------------
| Prototipe:
|
|  $autoload['packages'] = array(APPPATH.'third_party', '/usr/local/shared');
|
*/
$autoload['packages'] = array();

/*
| -------------------------------------------------------------------
|  Auto-load Libraries
| -------------------------------------------------------------------
| Ini adalah kelas-kelas yang terletak di sistem/libraries/ atau direktori
| aplikasi Anda (application/libraries/), dengan tambahan dari perpustakaan
| 'database', yang merupakan kasus khusus.
|
| Prototipe:
|
|	$autoload['libraries'] = array('database', 'email', 'session');
|
| Anda juga dapat menyediakan nama alternatif perpustakaan yang akan diberikan
| kepada pengontrol (controller):
|
|	$autoload['libraries'] = array('user_agent' => 'ua');
*/
$autoload['libraries'] = array('database', 'session');

/*
| -------------------------------------------------------------------
|  Auto-load Drivers
| -------------------------------------------------------------------
| Kelas-kelas ini terletak di sistem/libraries/ atau dalam direktori
| aplikasi Anda (application/libraries/), tetapi juga ditempatkan dalam
| subdirektori mereka sendiri dan memperluas kelas CI_Driver_Library. Mereka
| menawarkan beberapa opsi driver yang dapat dipertukarkan.
|
| Prototipe:
|
|	$autoload['drivers'] = array('cache');
|
| Anda juga dapat menyediakan nama properti alternatif yang akan diberikan
| kepada pengontrol (controller):
|
|	$autoload['drivers'] = array('cache' => 'cch');
|
*/
$autoload['drivers'] = array();

/*
| -------------------------------------------------------------------
|  Auto-load Helper Files
| -------------------------------------------------------------------
| Prototipe:
|
|	$autoload['helper'] = array('url', 'file');
*/

$autoload['helper'] = array('url');

/*
| -------------------------------------------------------------------
|  Auto-load Config files
| -------------------------------------------------------------------
| Prototipe:
|
|	$autoload['config'] = array('config1', 'config2');
|
| CATATAN: Item ini dimaksudkan untuk digunakan HANYA jika Anda telah membuat
| berkas konfigurasi kustom. Jika tidak, biarkan kosong.
|
*/
$autoload['config'] = array();

/*
| -------------------------------------------------------------------
|  Auto-load Language files
| -------------------------------------------------------------------
| Prototipe:
|
|	$autoload['language'] = array('lang1', 'lang2');
|
| CATATAN: Jangan sertakan bagian "_lang" dari berkas Anda. Sebagai contoh,
| "codeigniter_lang.php" akan dirujuk sebagai array('codeigniter');
|
*/
$autoload['language'] = array();

/*
| -------------------------------------------------------------------
|  Auto-load Models
| -------------------------------------------------------------------
| Prototipe:
|
|	$autoload['model'] = array('first_model', 'second_model');
|
| Anda juga dapat menyediakan nama model alternatif yang akan diberikan
| kepada pengontrol (controller):
|
|	$autoload['model'] = array('first_model' => 'first');
|
*/
$autoload['model'] = array('M_Mahasiswa', 'M_TopUp');
