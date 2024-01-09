<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| RUTING URI
| -------------------------------------------------------------------------
| Berkas ini memungkinkan Anda untuk memetakan ulang permintaan URI ke fungsi
| khusus pada pengontrol tertentu.
|
| Biasanya ada hubungan satu-ke-satu antara string URL
| dan kelas/metode pengontrol yang sesuai. Segmen-segmen dalam URL
| biasanya mengikuti pola ini:
|
|	example.com/kelas/metode/id/
|
| Namun, dalam beberapa kasus, Anda mungkin ingin memetakan ulang hubungan ini
| sehingga kelas/metode yang berbeda dipanggil daripada yang
| sesuai dengan URL.
|
| Silakan lihat panduan pengguna untuk detail lengkap:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RUTE TERPILIH
| -------------------------------------------------------------------------
|
| Ada tiga rute yang dipesan:
|
|	$route['default_controller'] = 'welcome';
|
| Rute ini menunjukkan kelas pengontrol mana yang harus dimuat jika
| URI tidak mengandung data. Dalam contoh di atas, kelas "welcome"
| akan dimuat.
|
|	$route['404_override'] = 'errors/page_missing';
|
| Rute ini akan memberi tahu Router kelas/metode mana yang harus digunakan jika
| yang disediakan dalam URL tidak dapat dipasangkan dengan rute yang valid.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| Ini bukan rute sebenarnya, tetapi memungkinkan Anda untuk secara otomatis merute
| nama-nama pengontrol dan metode yang mengandung tanda hubung. Tanda hubung ("-") bukan
| karakter nama kelas atau metode yang valid, sehingga memerlukan terjemahan.
| Ketika Anda mengatur opsi ini ke TRUE, itu akan mengganti SEMUA tanda hubung dalam
| segmen-segmen URI pengontrol dan metode.
|
| Contoh:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'c_topup';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
