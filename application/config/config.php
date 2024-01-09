<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Alamat URL Dasar Situs
|--------------------------------------------------------------------------
|
| URL menuju akar CodeIgniter Anda. Biasanya ini akan menjadi URL dasar Anda,
| DENGAN garis miring di akhir:
|
|	http://contoh.com/
|
| PERINGATAN: ANDA HARUS mengatur nilai ini!
|
| Jika tidak diatur, maka CodeIgniter akan mencoba menebak protokol dan
| jalur instalasi Anda, tetapi karena masalah keamanan, nama host akan
| diatur ke $_SERVER['SERVER_ADDR'] jika tersedia, atau localhost jika tidak.
| Mekanisme deteksi otomatis hanya ada untuk kenyamanan selama
| pengembangan dan HARUS TIDAK digunakan dalam produksi!
|
| Jika Anda perlu mengizinkan beberapa domain, ingat bahwa file ini masih
| adalah skrip PHP dan Anda dapat melakukannya dengan mudah sendiri.
|
*/

$config['base_url'] = 'http://localhost/axe_store/';

/*
|--------------------------------------------------------------------------
| Berkas Indeks
|--------------------------------------------------------------------------
|
| Biasanya ini adalah berkas index.php Anda, kecuali jika Anda telah mengubah namanya
| menjadi sesuatu yang lain. Jika Anda menggunakan mod_rewrite untuk menghapus halaman,
| atur variabel ini sehingga menjadi kosong.
|
*/

$config['index_page'] = '';

/*
|--------------------------------------------------------------------------
| PROTOCOL URI
|--------------------------------------------------------------------------
|
| Item ini menentukan server global mana yang harus digunakan untuk mengambil
| string URI. Pengaturan default 'REQUEST_URI' berfungsi untuk sebagian besar server.
| Jika tautan Anda sepertinya tidak berfungsi, cobalah salah satu dari variasi berikut:
|
| 'REQUEST_URI'    Menggunakan $_SERVER['REQUEST_URI']
| 'QUERY_STRING'   Menggunakan $_SERVER['QUERY_STRING']
| 'PATH_INFO'      Menggunakan $_SERVER['PATH_INFO']
|
| PERINGATAN: Jika Anda mengatur ini ke 'PATH_INFO', URI akan selalu didekode URL!
|
*/
$config['uri_protocol']    = 'REQUEST_URI';

/*
|--------------------------------------------------------------------------
| Sufiks URL
|--------------------------------------------------------------------------
|
| Opsi ini memungkinkan Anda menambahkan sufiks ke semua URL yang dihasilkan oleh CodeIgniter.
| Untuk informasi lebih lanjut, lihat panduan pengguna:
|
| https://codeigniter.com/userguide3/general/urls.html
|
| Catatan: Opsi ini diabaikan untuk permintaan CLI.
|
*/
$config['url_suffix'] = '';

/*
|--------------------------------------------------------------------------
| Bahasa Default
|--------------------------------------------------------------------------
|
| Ini menentukan set file bahasa yang harus digunakan. Pastikan
| ada terjemahan yang tersedia jika Anda bermaksud menggunakan sesuatu
| selain bahasa Inggris.
|
*/

$config['language']    = 'english';

/*
|--------------------------------------------------------------------------
| Set Karakter Default
|--------------------------------------------------------------------------
|
| Ini menentukan karakter set mana yang digunakan secara default dalam berbagai metode
| yang memerlukan penyediaan karakter set.
|
| Lihat http://php.net/htmlspecialchars untuk daftar karakter set yang didukung.
|
*/
$config['charset'] = 'UTF-8';

/*
|--------------------------------------------------------------------------
| Aktifkan/Nonaktifkan Hook Sistem
|--------------------------------------------------------------------------
|
| Jika Anda ingin menggunakan fitur 'hook', Anda harus mengaktifkannya
| dengan mengatur variabel ini ke TRUE (boolean). Lihat panduan pengguna untuk detailnya.
|
*/
$config['enable_hooks'] = FALSE;

/*
|--------------------------------------------------------------------------
| Awalan Ekstensi Kelas
|--------------------------------------------------------------------------
|
| Item ini memungkinkan Anda mengatur awalan nama berkas/nama kelas saat memperluas
| pustaka bawaan. Untuk informasi lebih lanjut, lihat panduan pengguna:
|
| https://codeigniter.com/userguide3/general/core_classes.html
| https://codeigniter.com/userguide3/general/creating_libraries.html
|
*/
$config['subclass_prefix'] = 'MY_';

/*
|--------------------------------------------------------------------------
| Pemuatan Otomatis Composer
|--------------------------------------------------------------------------
|
| Mengaktifkan pengaturan ini akan memberi tahu CodeIgniter untuk mencari
| skrip pemuat otomatis paket Composer di application/vendor/autoload.php.
|
|	$config['composer_autoload'] = TRUE;
|
| Atau jika Anda memiliki direktori vendor/ Anda ditempatkan di tempat lain,
| Anda dapat memilih untuk mengatur jalur tertentu juga:
|
|	$config['composer_autoload'] = '/path/to/vendor/autoload.php';
|
| Untuk informasi lebih lanjut tentang Composer, silakan kunjungi http://getcomposer.org/
|
| Catatan: Ini TIDAK akan menonaktifkan atau mengganti pemuatan otomatis yang spesifik
| CodeIgniter (application/config/autoload.php)
*/
$config['composer_autoload'] = FALSE;

/*
|--------------------------------------------------------------------------
| Karakter URL yang Diizinkan
|--------------------------------------------------------------------------
|
| Ini memungkinkan Anda menentukan karakter mana yang diperbolehkan dalam URL Anda.
| Ketika seseorang mencoba mengirimkan URL dengan karakter yang tidak diizinkan, mereka akan
| mendapatkan pesan peringatan.
|
| Sebagai langkah keamanan, Anda DIREKOMENDASIKAN KUAT untuk membatasi karakter URL ke
| sesedikit mungkin. Secara default, hanya karakter berikut yang diizinkan: a-z 0-9~%.:_-
|
| Biarkan kosong untuk mengizinkan semua karakter -- tetapi hanya jika Anda gila.
|
| Nilai yang dikonfigurasi sebenarnya adalah kelompok karakter ekspresi reguler
| dan akan dieksekusi sebagai: ! preg_match('/^[<permitted_uri_chars>]+$/i
|
| JANGAN MENGUBAH INI KECAUALH ANDA MEMAHAMI PENUH AKIBATNYA!!
|
*/
$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';

/*
|--------------------------------------------------------------------------
| Aktifkan String Query
|--------------------------------------------------------------------------
|
| Secara default, CodeIgniter menggunakan URL berbasis segmen yang ramah dengan mesin pencari:
| example.com/siapa/apa/di-mana/
|
| Anda dapat memungkinkan URL berbasis string query standar secara opsional:
| example.com?siapa=saya&apa=sesuatu&di-mana=di-sini
|
| Opsi yang tersedia: TRUE atau FALSE (boolean)
|
| Item lainnya memungkinkan Anda mengatur 'kata-kata' string query yang akan
| memanggil pengontrol dan fungsinya:
| example.com/index.php?c=pengontrol&m=fungsi
|
| Harap diperhatikan bahwa beberapa helper mungkin tidak berfungsi seperti yang diharapkan saat
| fitur ini diaktifkan, karena CodeIgniter dirancang terutama untuk
| menggunakan URL berbasis segmen.
|
*/
$config['enable_query_strings'] = FALSE;
$config['controller_trigger'] = 'c';
$config['function_trigger'] = 'm';
$config['directory_trigger'] = 'd';

/*
|--------------------------------------------------------------------------
| Izinkan Array $_GET
|--------------------------------------------------------------------------
|
| Secara default, CodeIgniter mengaktifkan akses ke array $_GET. Jika ada alasan
| tertentu Anda ingin menonaktifkannya, atur 'allow_get_array' menjadi FALSE.
|
| PERINGATAN: Fitur ini SUDAH TIDAK DIREKOMENDASIKAN dan saat ini hanya tersedia
|          untuk tujuan kompatibilitas mundur!
|
*/
$config['allow_get_array'] = TRUE;

/*
|--------------------------------------------------------------------------
| Ambang Batas Pencatatan Kesalahan
|--------------------------------------------------------------------------
|
| Anda dapat mengaktifkan pencatatan kesalahan dengan mengatur ambang batas lebih dari nol. Ambang batas menentukan apa yang akan dicatat. Opsi ambang batas adalah:
|
|	0 = Menonaktifkan pencatatan, Pencatatan kesalahan DIMATIKAN
|	1 = Pesan Kesalahan (termasuk kesalahan PHP)
|	2 = Pesan Debug
|	3 = Pesan Informasi
|	4 = Semua Pesan
|
| Anda juga dapat meneruskan array dengan tingkat ambang batas untuk menampilkan jenis kesalahan individual
|
| 	array(2) = Pesan Debug, tanpa Pesan Kesalahan
|
| Untuk situs langsung, biasanya Anda hanya mengaktifkan Kesalahan (1) untuk dicatat, jika tidak
| file log Anda akan cepat terisi.
|
*/
$config['log_threshold'] = 0;
/*
|--------------------------------------------------------------------------
| Jalur Direktori Pencatatan Kesalahan
|--------------------------------------------------------------------------
|
| Biarkan ini KOSONG kecuali Anda ingin mengatur sesuatu selain default
| direktori application/logs/. Gunakan jalur server penuh dengan garis miring di akhir.
|
*/

$config['log_path'] = '';

/*
|--------------------------------------------------------------------------
| Ekstensi Berkas Log
|--------------------------------------------------------------------------
|
| Ekstensi nama file default untuk file log. 'php' default memungkinkan untuk
| melindungi file log melalui skrip dasar, ketika mereka akan disimpan
| di bawah direktori yang dapat diakses publik.
|
| Catatan: Membiarkannya kosong akan mengembalikan ekstensi 'php'.
|
*/
$config['log_file_extension'] = '';

/*
|--------------------------------------------------------------------------
| Izin Berkas Log
|--------------------------------------------------------------------------
|
| Izin sistem berkas yang akan diterapkan pada berkas log yang baru dibuat.
|
| PENTING: INI HARUS berupa bilangan bulat (tanpa tanda kutip) dan ANDA HARUS menggunakan notasi bilangan oktal
|           (yaitu 0700, 0644, dll.)
|
*/
$config['log_file_permissions'] = 0644;

/*
|--------------------------------------------------------------------------
| Format Tanggal untuk Log
|--------------------------------------------------------------------------
|
| Setiap item yang dicatat memiliki tanggal terkait. Anda dapat menggunakan kode tanggal PHP
| untuk mengatur format tanggal Anda sendiri.
|
*/
$config['log_date_format'] = 'Y-m-d H:i:s';

/*
|--------------------------------------------------------------------------
| Jalur Direktori Tampilan Kesalahan
|--------------------------------------------------------------------------
|
| Biarkan ini KOSONG kecuali Anda ingin mengatur sesuatu selain default
| direktori application/views/errors/. Gunakan jalur server penuh dengan garis miring di akhir.
|
*/
$config['error_views_path'] = '';

/*
|--------------------------------------------------------------------------
| Jalur Direktori Cache
|--------------------------------------------------------------------------
|
| Biarkan ini KOSONG kecuali Anda ingin mengatur sesuatu selain default
| direktori application/cache/. Gunakan jalur server penuh dengan garis miring di akhir.
|
*/
$config['cache_path'] = '';

/*
|--------------------------------------------------------------------------
| Cache Include Query String
|--------------------------------------------------------------------------
|
| Whether to take the URL query string into consideration when generating
| output cache files. Valid options are:
|
|	FALSE      = Disabled
|	TRUE       = Enabled, take all query parameters into account.
|	             Please be aware that this may result in numerous cache
|	             files generated for the same page over and over again.
|	array('q') = Enabled, but only take into account the specified list
|	             of query parameters.
|
*/
$config['cache_query_string'] = FALSE;

/*
|--------------------------------------------------------------------------
| Kunci Enkripsi
|--------------------------------------------------------------------------
|
| Jika Anda menggunakan kelas Enkripsi, Anda harus mengatur kunci enkripsi.
| Lihat panduan pengguna untuk informasi lebih lanjut.
|
| https://codeigniter.com/userguide3/libraries/encryption.html
|
*/
$config['encryption_key'] = '';

/*
|--------------------------------------------------------------------------
| Variabel Sesi
|--------------------------------------------------------------------------
|
| 'sess_driver'
|
|	Penyimpanan driver yang digunakan: files, database, redis, memcached
|
| 'sess_cookie_name'
|
|	Nama cookie sesi, harus hanya mengandung karakter [0-9a-z_-]
|
| 'sess_samesite'
|
|	Atribut SameSite cookie sesi: Lax (default), Strict, atau None
|
| 'sess_expiration'
|
|	Jumlah DETIK yang Anda inginkan sesi berlangsung.
|	Mengatur ke 0 (nol) berarti kedaluwarsa saat browser ditutup.
|
| 'sess_save_path'
|
|	Lokasi untuk menyimpan sesi, tergantung driver.
|
|	Untuk driver 'files', ini adalah jalur ke direktori yang dapat ditulis.
|	PERINGATAN: Hanya mendukung jalur absolut!
|
|	Untuk driver 'database', ini adalah nama tabel.
|	Harap baca manual untuk format dengan driver sesi lainnya.
|
|	PENTING: ANDA DIWAJIBKAN untuk mengatur jalur penyimpanan yang valid!
|
| 'sess_match_ip'
|
|	Apakah sesuai dengan alamat IP pengguna saat membaca data sesi.
|
|	PERINGATAN: Jika Anda menggunakan driver database, jangan lupa untuk memperbarui
|	         KUNCI UTAMA tabel sesi Anda saat mengubah pengaturan ini.
|
| 'sess_time_to_update'
|
|	Berapa detik antara CI memperbarui ID sesi.
|
| 'sess_regenerate_destroy'
|
|	Apakah untuk menghancurkan data sesi yang terkait dengan ID sesi lama
|	ketika otomatis memperbarui ID sesi. Ketika diatur ke FALSE, data
|	akan kemudian dihapus oleh pemulung.
|
| Pengaturan cookie sesi lainnya dibagikan dengan aplikasi lain,
| kecuali 'cookie_prefix' dan 'cookie_httponly', yang diabaikan di sini.
|
*/
$config['sess_driver'] = 'files';
$config['sess_cookie_name'] = 'ci_session';
$config['sess_samesite'] = 'Lax';
$config['sess_expiration'] = 7200;
$config['sess_save_path'] = NULL;
$config['sess_match_ip'] = FALSE;
$config['sess_time_to_update'] = 300;
$config['sess_regenerate_destroy'] = FALSE;

/*
|--------------------------------------------------------------------------
| Variabel Terkait Cookie
|--------------------------------------------------------------------------
|
| 'cookie_prefix'   = Atur awalan nama cookie jika Anda perlu menghindari tabrakan
| 'cookie_domain'   = Atur menjadi .domain-anda.com untuk cookie di seluruh situs
| 'cookie_path'     = Biasanya akan menjadi garis miring lurus
| 'cookie_secure'   = Cookie hanya akan diatur jika ada koneksi HTTPS yang aman.
| 'cookie_httponly' = Cookie hanya akan dapat diakses melalui HTTP(S) (tanpa javascript)
| 'cookie_samesite' = Atribut samesite cookie (Lax, Strict, atau None)
|
| Catatan: Pengaturan ini (kecuali 'cookie_prefix' dan
| 'cookie_httponly') juga akan memengaruhi sesi.
|
*/
$config['cookie_prefix']    = '';
$config['cookie_domain']    = '';
$config['cookie_path']        = '/';
$config['cookie_secure']    = FALSE;
$config['cookie_httponly']     = FALSE;
$config['cookie_samesite']     = 'Lax';

/*
|--------------------------------------------------------------------------
| Standarisasi baris baru
|--------------------------------------------------------------------------
|
| Menentukan apakah akan menstandarisasi karakter baris baru dalam data masukan,
| artinya mengganti \r\n, \r, \n dengan nilai PHP_EOL.
|
| PERINGATAN: Fitur ini SUDAH TIDAK DIREKOMENDASIKAN dan saat ini hanya tersedia
|          untuk tujuan kompatibilitas mundur!
|
*/
$config['standardize_newlines'] = FALSE;

/*
|--------------------------------------------------------------------------
| Pemfilteran XSS Global
|--------------------------------------------------------------------------
|
| Menentukan apakah pemfilteran XSS selalu aktif ketika data GET, POST, atau
| COOKIE ditemui
|
| PERINGATAN: Fitur ini SUDAH TIDAK DIREKOMENDASIKAN dan saat ini hanya tersedia
|          untuk tujuan kompatibilitas mundur!
|
*/

$config['global_xss_filtering'] = FALSE;

/*
|--------------------------------------------------------------------------
| Cross Site Request Forgery (CSRF)
|--------------------------------------------------------------------------
| Mengaktifkan token cookie CSRF. Ketika diatur ke TRUE, token akan
| diperiksa pada formulir yang dikirimkan. Jika Anda menerima data pengguna, sangat
| dianjurkan untuk mengaktifkan perlindungan CSRF.
|
| 'csrf_token_name' = Nama token
| 'csrf_cookie_name' = Nama cookie
| 'csrf_expire' = Jumlah detik yang harus digunakan token untuk kedaluwarsa.
| 'csrf_regenerate' = Membuat ulang token pada setiap pengiriman
| 'csrf_exclude_uris' = Array URI yang mengabaikan pemeriksaan CSRF
*/

$config['csrf_protection'] = FALSE;
$config['csrf_token_name'] = 'csrf_test_name';
$config['csrf_cookie_name'] = 'csrf_cookie_name';
$config['csrf_expire'] = 7200;
$config['csrf_regenerate'] = TRUE;
$config['csrf_exclude_uris'] = array();

/*
|--------------------------------------------------------------------------
| Kompresi Output
|--------------------------------------------------------------------------
|
| Mengaktifkan kompresi output Gzip untuk mempercepat waktu pemuatan halaman. Ketika diaktifkan,
| kelas output akan menguji apakah server Anda mendukung Gzip.
| Namun, bahkan jika server mendukung kompresi, tidak semua browser mendukungnya,
| jadi aktifkan hanya jika Anda cukup yakin pengunjung Anda dapat menggunakannya.
|
| Hanya digunakan jika zlib.output_compression dimatikan dalam php.ini Anda.
| Jangan gunakan bersamaan dengan kompresi output tingkat httpd.
|
| SANGAT PENTING: Jika Anda mendapatkan halaman kosong ketika kompresi diaktifkan,
| itu berarti Anda telah mengirimkan sesuatu ke browser Anda terlalu dini. Itu bisa
| bahkan menjadi baris spasi di akhir salah satu skrip Anda. Untuk
| kompresi agar berfungsi, tidak ada yang boleh dikirimkan sebelum buffer keluar dipanggil
| oleh kelas output. Jangan 'echo' nilai dengan kompresi diaktifkan.
|
*/
$config['compress_output'] = FALSE;

/*
|--------------------------------------------------------------------------
| Referensi Waktu Utama
|--------------------------------------------------------------------------
|
| Opsi adalah 'local' atau zona waktu yang didukung PHP. Preferensi ini memberi tahu
| sistem apakah harus menggunakan waktu lokal server Anda sebagai 'now' utama
| referensi, atau mengonversinya ke zona waktu yang dikonfigurasikan. Lihat halaman 'date
| helper' dalam panduan pengguna untuk informasi mengenai penanganan tanggal.
|
*/
$config['time_reference'] = 'local';

/*
|--------------------------------------------------------------------------
| Rewrite PHP Short Tags
|--------------------------------------------------------------------------
|
| Jika instalasi PHP Anda tidak memiliki dukungan tag pendek, CI
| dapat mengganti tag tersebut secara langsung, memungkinkan Anda untuk menggunakan sintaks tersebut
| dalam berkas tampilan Anda. Opsi adalah TRUE atau FALSE (boolean)
|
| Catatan: Anda perlu mengaktifkan eval() untuk ini agar berfungsi.
|
*/
$config['rewrite_short_tags'] = FALSE;

/*
|--------------------------------------------------------------------------
| IP Reverse Proxy
|--------------------------------------------------------------------------
|
| Jika server Anda berada di belakang proxy balik, Anda harus memasukkan daftar putih alamat IP proxy
| dari mana CodeIgniter harus mempercayai header seperti
| HTTP_X_FORWARDED_FOR dan HTTP_CLIENT_IP untuk mengidentifikasi
| alamat IP pengunjung dengan benar.
|
| Anda dapat menggunakan baik array atau daftar proxy yang dipisahkan koma,
| serta menentukan seluruh subnet. Berikut beberapa contoh:
|
| Dipisahkan koma: '10.0.1.200,192.168.5.0/24'
| Array: array('10.0.1.200', '192.168.5.0/24')
*/

$config['proxy_ips'] = '';
