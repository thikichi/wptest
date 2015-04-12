<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wptest');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'wptest');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'test');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '?U~n)m2-N,7B|~wg~ou2V~xNH:):?a)NYnE+]8cZzv|1Lj#+X(=LBf}Tq@d:`bOw');
define('SECURE_AUTH_KEY',  'qyhV%0#A_2WSG {%]=JDEc5;jjfErVpHm,gv{|RfSuGj^vy_~Es<U(^/h9NO4/vN');
define('LOGGED_IN_KEY',    'Z$Gt2UaD]J9k/60Tt=d>^^_DT-% |Y([g(rc])p=|4ec|ZhOuhMfu~v<`X?qU!pq');
define('NONCE_KEY',        'eer|t+Pg#x_Ymf* N|8oLLv?eoa*NO0>oQYLE_fWgxxfGasu8kYekU`rR:3x>I;&');
define('AUTH_SALT',        'B*%N)2MC/-TtjAn+t.}#Hi{I%WYZX_z%HDGO%c,/b!U#oUNfO2bd>hpWci?d/A%|');
define('SECURE_AUTH_SALT', 'H~_(SSo1p.fx=77Bxkt%tCLNBnc[HS{n{$E]_Pn1ynEa2ew`o,GL#]F`_:f>~!]n');
define('LOGGED_IN_SALT',   'WKtBER#T;+oPJ2|_Qdh?A=CssCP%g|RA^MfCMaezbcUiXonV|p&lF(y;GVM9=huc');
define('NONCE_SALT',       'V9sLPr|QY2?4Z{}{SR,+&Ki?wi0V8<B)(+:|J0`x8q4YQ5:-571YuTOmWC.add_s');

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
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* test */
/* test */