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
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
if (strpos($_SERVER['SERVER_ADDR'], '192.168.56') !== FALSE) {
	/** WordPress のためのデータベース名 */
	define('DB_NAME', 'wordpress_site');

	/** MySQL データベースのユーザー名 */
	define('DB_USER', 'root');

	/** MySQL データベースのパスワード */
	define('DB_PASSWORD', 'rootroot');

	/** MySQL のホスト名 */
	define('DB_HOST', 'localhost');
} else {
	/** WordPress のためのデータベース名 */
	define('DB_NAME', 'heroku_20d5953b2624bf6');

	/** MySQL データベースのユーザー名 */
	define('DB_USER', 'bff5fef3aca7c0');

	/** MySQL データベースのパスワード */
	define('DB_PASSWORD', '82366a69');

	/** MySQL のホスト名 */
	define('DB_HOST', 'us-cdbr-iron-east-05.cleardb.net');
}
/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':XD)g4Ypk}>W#zg|>M4Xz$m`-nQAzvR+35o)NAbANTq|%;B$5}InW`I&[v^$ )2x');
define('SECURE_AUTH_KEY',  'iJd[Cm?k}C+76kO2b+@5r1eHdBC+s$%+x<IYJ<c]u`}o3pkL!+,+8xw8Z;y^rOZI');
define('LOGGED_IN_KEY',    'Rzh]@d[4X=gb`a^8}?X2er3<4jF&};eRLi~t!u+oUm%7b=F^2q=(jIwpv~:[D+hD');
define('NONCE_KEY',        'c3<?58r&vX&`6OL-cs_o_D)|d!1f^(X0w7h6xOGDH#F|oygb5lWv&kAWen#wQ,7c');
define('AUTH_SALT',        'L8U@LRs$(wCUK&b09>Uw K3aVkJ&S)q51bO9;dA|G#~KM8DAC1XK+gBsSCq/?eD<');
define('SECURE_AUTH_SALT', '<&G90 #0YP,*>NB>$oNE}.^J;/lwvq`j6LzP8fvl|N5vm[f{0Bk]*~X&D}@BSJMi');
define('LOGGED_IN_SALT',   'B{+=qP|+i3F00r834|0|-7p31=H8!|+c+lB--R<%?x[eeLWjz,S;8kL=M<Or|1)+');
define('NONCE_SALT',       '`e|i _alT=#Un}(,/Y<;]oGvvAxU<*E3k;LY=/=sPYT+/607?I>|x4=v?1[G;0#>');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
