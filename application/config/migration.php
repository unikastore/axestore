<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Aktifkan/Nonaktifkan Migrations
|--------------------------------------------------------------------------
|
| Migrations dinonaktifkan secara default karena alasan keamanan.
| Anda sebaiknya mengaktifkan Migrations setiap kali Anda berniat melakukan migrasi skema
| dan menonaktifkannya kembali setelah selesai.
|
*/
$config['migration_enabled'] = FALSE;

/*
|--------------------------------------------------------------------------
| Jenis Migrasi
|--------------------------------------------------------------------------
|
| Nama berkas migrasi dapat didasarkan pada pengenal berurutan atau pada
| tanda waktu (timestamp). Opsi-opsi adalah:
|
|   'sequential' = Penamaan migrasi berdasarkan pengenal berurutan (001_add_blog.php)
|   'timestamp'  = Penamaan migrasi berdasarkan tanda waktu (20121031104401_add_blog.php)
|                  Gunakan format tanda waktu YYYYMMDDHHIISS.
|
| Catatan: Jika nilai konfigurasi ini hilang, library Migrasi akan
|       menggunakan 'sequential' secara default untuk kompatibilitas ke belakang dengan CI2.
|
*/
$config['migration_type'] = 'timestamp';
/*
|--------------------------------------------------------------------------
| Tabel Migrasi
|--------------------------------------------------------------------------
|
| Ini adalah nama tabel yang akan menyimpan status migrasi saat ini.
| Saat migrasi dijalankan, itu akan menyimpan dalam tabel database tingkat migrasi
| sistem. Kemudian membandingkan tingkat migrasi dalam tabel ini
| dengan $config['migration_version'], jika tidak sama, maka migrasi akan dilakukan.
| Ini harus diatur.
|
*/

$config['migration_table'] = 'migrations';

/*
|--------------------------------------------------------------------------
| Auto Migrate To Latest
|--------------------------------------------------------------------------
|
| Jika ini diatur ke TRUE ketika Anda memuat kelas migrasi dan memiliki
| $config['migration_enabled'] diatur ke TRUE, sistem akan secara otomatis bermigrasi
| ke migrasi terbaru Anda (apa pun yang diatur dalam $config['migration_version']).
| Dengan cara ini, Anda tidak perlu memanggil migrasi di tempat lain
| dalam kode Anda untuk memiliki migrasi terbaru.
|
*/
$config['migration_auto_latest'] = FALSE;
/*
|--------------------------------------------------------------------------
| Versi Migrasi
|--------------------------------------------------------------------------
|
| Ini digunakan untuk mengatur versi migrasi yang harus digunakan oleh sistem berkas.
| Jika Anda menjalankan $this->migration->current(), ini adalah versi yang akan digunakan
| untuk mengupgrade atau mengdowngrade skema basis data.
|
*/

$config['migration_version'] = 0;

/*
|--------------------------------------------------------------------------
| Jalur Migrasi
|--------------------------------------------------------------------------
|
| Jalur ke folder migrasi Anda.
| Biasanya, ini akan berada dalam jalur aplikasi Anda.
| Juga, izin tulis diperlukan di dalam jalur migrasi.
|
*/
$config['migration_path'] = APPPATH.'migrations/';
