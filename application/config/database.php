<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| PENGATURAN KONEKTIVITAS BASIS DATA
| -------------------------------------------------------------------
| File ini akan berisi pengaturan yang diperlukan untuk mengakses basis data Anda.
|
| Untuk instruksi lengkap, silakan lihat halaman 'Koneksi Database'
| pada Panduan Pengguna.
|
| -------------------------------------------------------------------
| PENJELASAN VARIABEL
| -------------------------------------------------------------------
|
|	['dsn']      String DSN lengkap yang menggambarkan koneksi ke basis data.
|	['hostname'] Nama host server basis data Anda.
|	['username'] Nama pengguna yang digunakan untuk terhubung ke basis data.
|	['password'] Kata sandi yang digunakan untuk terhubung ke basis data.
|	['database'] Nama basis data yang ingin Anda hubungkan.
|	['dbdriver'] Driver basis data, contohnya: mysqli.
|			Yang didukung saat ini:
|				 cubrid, ibase, mssql, mysql, mysqli, oci8,
|				 odbc, pdo, postgre, sqlite, sqlite3, sqlsrv
|	['dbprefix'] Anda dapat menambahkan awalan opsional, yang akan ditambahkan
|				 ke nama tabel saat menggunakan kelas Query Builder
|	['pconnect'] TRUE/FALSE - Apakah akan menggunakan koneksi persisten
|	['db_debug'] TRUE/FALSE - Apakah kesalahan basis data harus ditampilkan.
|	['cache_on'] TRUE/FALSE - Mengaktifkan/menonaktifkan penyimpanan cache query
|	['cachedir'] Jalur ke folder di mana file cache harus disimpan
|	['char_set'] Set karakter yang digunakan dalam berkomunikasi dengan basis data
|	['dbcollat'] Kolasi karakter yang digunakan dalam berkomunikasi dengan basis data
|				 CATATAN: Untuk basis data MySQL dan MySQLi, pengaturan ini hanya digunakan
| 				 sebagai cadangan jika server Anda menjalankan PHP < 5.2.3 atau MySQL < 5.0.7
| 				 (dan dalam pertanyaan pembuatan tabel yang dibuat dengan DB Forge).
| 				 Ada ketidakcocokan dalam PHP dengan mysql_real_escape_string() yang
| 				 dapat membuat situs Anda rentan terhadap injeksi SQL jika Anda menggunakan
| 				 set karakter multi-byte dan menjalankan versi yang lebih rendah dari ini.
| 				 Situs yang menggunakan set karakter dan kolasi basis data Latin-1 atau UTF-8 tidak terpengaruh.
|	['swap_pre'] Awalan tabel default yang harus ditukar dengan dbprefix
|	['encrypt']  Apakah akan menggunakan koneksi terenkripsi.
|
|			'mysql' (usang), driver 'sqlsrv' dan 'pdo/sqlsrv' menerima TRUE/FALSE
|			driver 'mysqli' dan 'pdo/mysql' menerima sebuah array dengan opsi berikut:
|
|				'ssl_key'    - Jalur ke berkas kunci pribadi
|				'ssl_cert'   - Jalur ke berkas sertifikat kunci publik
|				'ssl_ca'     - Jalur ke berkas otoritas sertifikat
|				'ssl_capath' - Jalur ke direktori yang berisi sertifikat CA terpercaya dalam format PEM
|				'ssl_cipher' - Daftar sipher yang *diperbolehkan* yang digunakan untuk enkripsi, dipisahkan oleh titik dua (':')
|				'ssl_verify' - TRUE/FALSE; Apakah memverifikasi sertifikat server atau tidak
|
|	['compress'] Apakah akan menggunakan kompresi klien (hanya untuk MySQL)
|	['stricton'] TRUE/FALSE - memaksa koneksi 'Strict Mode'
|	'good for ensuring strict SQL while developing' - baik untuk memastikan SQL yang ketat saat mengembangkan
|	['ssl_options'] Digunakan untuk mengatur berbagai opsi SSL yang dapat digunakan saat membuat koneksi SSL.
|	['failover'] array - array dengan 0 atau lebih data untuk koneksi jika yang utama gagal.
|	['save_queries'] TRUE/FALSE - Apakah akan "menyimpan" semua query yang dijalankan.
| 				CATATAN: Menonaktifkan ini juga akan secara efektif menonaktifkan keduanya
| 				$this->db->last_query() dan pengembangan query DB.
| 				Ketika Anda menjalankan query, dengan pengaturan ini diatur ke TRUE (default),
| 				CodeIgniter akan menyimpan pernyataan SQL untuk tujuan debugging.
| 				Namun, ini dapat menyebabkan penggunaan memori yang tinggi, terutama jika Anda menjalankan
| 				banyak query SQL... nonaktifkan ini untuk menghindari masalah tersebut.
|
| Variabel $active_group memungkinkan Anda memilih grup koneksi mana yang
| akan aktif. Secara default, hanya ada satu grup (grup 'default').
|
| Variabel $query_builder memungkinkan Anda menentukan apakah akan memuat
| kelas pembangun query atau tidak.
*/

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'db_voucher',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
