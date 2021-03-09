<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'cake-a' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'cake-a' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'I8b4A0w2' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9Q0{]Xgl]/{h_ptMizFGH!#0Vy<4iEq%/!dqG$g6bcmrI.e.8duI0lK7^1n^_z5R' );
define( 'SECURE_AUTH_KEY',  'qjfMx?/4dJw3X6Lw>WMJTR<rV(g>pS<vp|sB(E1R?j=geTR8}GJLLfI[ZD6gvK}8' );
define( 'LOGGED_IN_KEY',    'H=?Vd-{yvz6n^FQL[LmF|]?UO 6<GUxf@:C@YJ`KSZ^DYW4tM@kgyAYs4!9O(E6Y' );
define( 'NONCE_KEY',        'q077(~T+|E{Yp+77</~F6yL)uG2o|G|FuC>KL*?b^ *b[fQj-RV24hJl{V1>Vd]n' );
define( 'AUTH_SALT',        'jf0&1}#1.x*XyBt@XWG!tMjnK,8@7p}zSEgnRbbT*mX8.K~|*R76C|PB82Ug3CKW' );
define( 'SECURE_AUTH_SALT', 'jdm.a55ASlCdlqM_nxEAAk}7R/.f-5CxdY4N`j!z2G$Hou{<i$7lQp5Q!u,hJl$%' );
define( 'LOGGED_IN_SALT',   'ZP:tz9Bc]4g.W(vO?!iMq%%Hk]|M@jO0~04LMHrEhLxVcxVL5 1#`^PIkwekp~`9' );
define( 'NONCE_SALT',       'H~ni@mFNV2r(d{ADiTtszl|3cz,$AW}{*v=e8Taa5#m g9YD&AD)VTkh8gfO]c?C' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
