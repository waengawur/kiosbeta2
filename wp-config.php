<?php
/**
 * Konfigurasi dasar WordPress.
 *
 * Berkas ini berisi konfigurasi-konfigurasi berikut: Pengaturan MySQL, Awalan Tabel,
 * Kunci Rahasia, Bahasa WordPress, dan ABSPATH. Anda dapat menemukan informasi lebih
 * lanjut dengan mengunjungi Halaman Codex {@link http://codex.wordpress.org/Editing_wp-config.php
 * Menyunting wp-config.php}. Anda dapat memperoleh pengaturan MySQL dari web host Anda.
 *
 * Berkas ini digunakan oleh skrip penciptaan wp-config.php selama proses instalasi.
 * Anda tidak perlu menggunakan situs web, Anda dapat langsung menyalin berkas ini ke
 * "wp-config.php" dan mengisi nilai-nilainya.
 *
 * @package WordPress
 */

// ** Pengaturan MySQL - Anda dapat memperoleh informasi ini dari web host Anda ** //
/** Nama basis data untuk WordPress */
define( 'DB_NAME', 'kiosbeta2' );

/** Nama pengguna basis data MySQL */
define( 'DB_USER', 'kiosbeta' );

/** Kata sandi basis data MySQL */
define( 'DB_PASSWORD', 'Kiosbeta!@3' );

/** Nama host MySQL */
define( 'DB_HOST', 'localhost' );

/** Set Karakter Basis Data yang digunakan untuk menciptakan tabel basis data. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Jenis Collate Basis Data. Jangan ubah ini jika ragu. */
define('DB_COLLATE', '');

/**#@+
 * Kunci Otentifikasi Unik dan Garam.
 *
 * Ubah baris berikut menjadi frase unik!
 * Anda dapat menciptakan frase-frase ini menggunakan {@link https://api.wordpress.org/secret-key/1.1/salt/ Layanan kunci-rahasia WordPress.org}
 * Anda dapat mengubah baris-baris berikut kapanpun untuk mencabut validasi seluruh cookies. Hal ini akan memaksa seluruh pengguna untuk masuk log ulang.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'V71Nx.SL-c=mO$iKZJ[%gzVEAw5vyHGkQ@B_V6f[*t]2$c}V7Y^:8[frzPmd)_#?' );
define( 'SECURE_AUTH_KEY',  '4J(F%f<MG.G4$fqHHct+,}:R(9/6|h_#<NJg/!m wvmGw[0A#YAWBpzSwrlHGIZi' );
define( 'LOGGED_IN_KEY',    '/o+/Yq7j1+ByM^U?~NWcZq, &nB ~;zI#gi#dUF6BS8zqI5xhFSd5|yOw):/OX&#' );
define( 'NONCE_KEY',        ' lZ@yM:9=e*QzHcv K<]{c6ademE.wl&u4_!++Y/1TaCu55PV=-6X1v5#%fWew0q' );
define( 'AUTH_SALT',        'h#T@B4v=j-_Gwq:o{3mI#])3lFZ:OI<P0I`9y^XOIKsKCSOqfLQTAF!kOk*r,~9I' );
define( 'SECURE_AUTH_SALT', 'Q#fg~Y[Q0JjgrUQi}j2vs,KXjy!(w[/h!xk)L=~mr5o~:MI%=N7SFP&n9x.{t:VD' );
define( 'LOGGED_IN_SALT',   'F_k`F+kt3.Dt@H^r~^9O&]QJfz|DE6B;>,;8/NuAh>L>-x%FyaDLgf|{jw|2+]m(' );
define( 'NONCE_SALT',       'x3qxD-w6g-vCgB>ipiI=.@V,cr_0fK%;:87 aR8jU=;KpC{e^*[[kaJBgFJ<$X7t' );

/**#@-*/

/**
 * Awalan Tabel Basis Data WordPress.
 *
 * Anda dapat memiliki beberapa instalasi di dalam satu basis data jika Anda memberikan awalan unik
 * kepada masing-masing tabel. Harap hanya masukkan angka, huruf, dan garis bawah!
 */
$table_prefix = 'wp_';

/**
 * Untuk pengembang: Moda pengawakutuan WordPress.
 *
 * Ubah ini menjadi "true" untuk mengaktifkan tampilan peringatan selama pengembangan.
 * Sangat disarankan agar pengembang plugin dan tema menggunakan WP_DEBUG
 * di lingkungan pengembangan mereka.
 */
define('WP_DEBUG', false);

/* Cukup, berhenti menyunting! Selamat ngeblog. */

/** Lokasi absolut direktori WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Menentukan variabel-variabel WordPress berkas-berkas yang disertakan. */
require_once(ABSPATH . 'wp-settings.php');
