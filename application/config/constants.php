<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Tampilkan Debug Backtrace
|--------------------------------------------------------------------------
|
| Jika diatur ke TRUE, sebuah backtrace (jejak tumpukan) akan ditampilkan bersama
| dengan kesalahan PHP. Jika error_reporting dinonaktifkan, backtrace tidak akan
| ditampilkan, terlepas dari pengaturan ini.
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| Mode Berkas dan Direktori
|--------------------------------------------------------------------------
|
| Preferensi ini digunakan saat memeriksa dan mengatur mode saat bekerja
| dengan sistem berkas. Nilai defaultnya cocok untuk server dengan
| keamanan yang memadai, tetapi Anda mungkin ingin (atau bahkan perlu)
| mengubah nilai-nilai ini di lingkungan tertentu (Apache menjalankan proses
| terpisah untuk setiap pengguna, PHP di bawah CGI dengan Apache suEXEC, dll.).
| Nilai oktal harus selalu digunakan untuk mengatur mode dengan benar.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| Mode Aliran Berkas
|--------------------------------------------------------------------------
|
| Mode-mode ini digunakan saat bekerja dengan fungsi fopen() dan popen().
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');
/*
|--------------------------------------------------------------------------
| Kode Status Keluar
|--------------------------------------------------------------------------
|
| Digunakan untuk mengindikasikan kondisi di mana skrip mengakhiri eksekusi
| dengan fungsi `exit()`. Meskipun tidak ada standar universal untuk kode kesalahan,
| ada beberapa konvensi umum. Tiga konvensi tersebut dijelaskan di bawah ini,
| bagi mereka yang ingin menggunakannya. Nilai bawaan CodeIgniter dipilih
| dengan sedikit tumpang tindih dengan konvensi-konvensi tersebut, sambil
| tetap memberikan ruang bagi yang lain untuk ditentukan dalam versi-versi
| masa depan dan aplikasi pengguna.
|
| Tiga konvensi utama yang digunakan untuk menentukan kode status keluar adalah
| sebagai berikut:
|
|    Standard Pustaka C/C++ (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (Tautan ini juga berisi konvensi khusus GNU lainnya)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Skrip Bash:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/

defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code
