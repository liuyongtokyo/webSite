<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'superliu_wikiwp' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'superliu_wikiwp' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '58h7pwLi' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'cuJFM6CBAnW^iC#S`0}#siIOmFe[uyp=KJH+Q!CVxOGmVH-_+2+uq19S6%7D8_=n' );
define( 'SECURE_AUTH_KEY',  'p]~B7zVA2S]m>fKiHX@|/+>N5YvgdFp(.7F[S@oDD=/o5}:GM{QBC9/mJL?Z/j9X' );
define( 'LOGGED_IN_KEY',    'GcrAr:Yj|okKA]n#@UCM0P:%8ZV-3<vQd`}Sa=ILi9UuQj$.xgxTF3Cd.-Bv%76I' );
define( 'NONCE_KEY',        '?2%cO06pD[VgZFHUd:9K2>bh+Ze2WA6~|m,G]~k@q-(*ySa4$#k(jOI}^,h8Rc4F' );
define( 'AUTH_SALT',        '-ZXw&aPv;~iA~$uYSN/f{3!:R=`16.DeLd&-O:XCL DmoyBs)1!kbX$+GM,Yy[; ' );
define( 'SECURE_AUTH_SALT', '&GY!VFP<w(Nv~r6!n0t~_t]XvR6|`Gp<vSDL%ldJ!0J ?$P>d<dj6@*mq|N<G[h}' );
define( 'LOGGED_IN_SALT',   'mZ/m%#rW/E/MXAx^X>E3On6+<>yw%%+*wzPEWBv+6[UP)Usv.77n2I0+`%-A;EL~' );
define( 'NONCE_SALT',       'Pult]&NtELr{M|!~59FTH4w$z,_H)Z$xi!a y9rb5yuuf?`5a8GJY|%/6jr]PZ%U' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wikiwp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
