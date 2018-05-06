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
/** WordPress のためのデータベース名 */
define('DB_NAME', 'db_wordpress_4');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'kam_admin');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'hoge1234');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'b3rbKoj=W^Ir56dFS50|7[Y#Nr3DYdrNC$(]BpVE:O8eP!ZSun[eK)Xom-Z[;$nt');
define('SECURE_AUTH_KEY',  'Q.5v6Oj>h5?JHJY<iPW3&y6@@DZV&:JD0hUCYQg&wwPCX0yq8 mM3wZI%JUMf~j1');
define('LOGGED_IN_KEY',    '`VXop1M?QIx#@?)9&w6zHTVIyaQA?+u*C+0NUw)s2U/oun6[}p4tCL(3d?r]~%HH');
define('NONCE_KEY',        'N`58M/aB=pzc#BYKFWTMjY^uWlPWfqy_hR5EdCV{6LO=WE+W-eclYCu3U=S+m:6[');
define('AUTH_SALT',        'mkRE|1eyAL>*,*(;sg)BbfH;-/=:Ba VMxXJFQ+!+pKtJ[sC0ovHKJCY(G[a)cBX');
define('SECURE_AUTH_SALT', 'd3=&$u Be8i&!y&akjwB%wK!Wk}+vKQWejN TT$dtYE(UCluvZlOAXm&2T0/45.V');
define('LOGGED_IN_SALT',   '3 [z:H&sY@>i#,mDR!$zszQfW1u6m))N/SN&M@xv){g!%GRkBUhDa}hh.n)-Q6/`');
define('NONCE_SALT',       'F%_!>R?l5bF^.5]- WM%^*z;S#[9QUoB%wmFE[hn0h]y[ |$BY8=F(fEWQf~+&&$');

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
