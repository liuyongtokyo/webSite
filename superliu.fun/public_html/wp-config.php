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
define( 'DB_NAME', 'superliu_wp' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'superliu_wp' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'ekHJbtVn' );

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
define( 'AUTH_KEY',         'I`#b)];/nKqbiu1L9] Pc+eT)<B.6rA$EJ!#l%VY5XVVZD^9PEX)4aMVut?Ek0d:' );
define( 'SECURE_AUTH_KEY',  '9N1?-Mh7d`sNbJVl!#,gZPMEgUPrF8@tR4 6Y0GvE:?M>hd(}d)G?mukQ(Bk>RrC' );
define( 'LOGGED_IN_KEY',    'uAqq,QlTkk VLjPg_i4E^-7jIWrLO-H}|GWH4+mwmyHynQHn+k1hdAb|QMdbHFO0' );
define( 'NONCE_KEY',        'tI9Zn>MF6)9)w;AoI1mm]!`*G_m^KN;c#uelgrOji4=;fT2<8$in/n{!1wY;hWXc' );
define( 'AUTH_SALT',        'Xa5Hr;,;xD+-gKh:(HwPJp;=MQk[UUXy*f@7k?)S3:>[fe|wrhp0+oqZoL~E#>A6' );
define( 'SECURE_AUTH_SALT', 'V<Se0KXnA+$0RKT)=)j,m/MO9nvoH[?$Wulh7HQeCa#ibu]NqSH`?FVr:)7:12th' );
define( 'LOGGED_IN_SALT',   'mLK :ah<&jUm.|u7:s_pNK%5,P~rXIF(>dk^~$^zZ8KM9Fo|l#1tl])3:( }$M0q' );
define( 'NONCE_SALT',       'sjj/eCiDi}tn`v=(@=;SGmZ$3]edq`(b]hPkb!6= v/De/Y~i=M|to8vof#QhT8+' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

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

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
