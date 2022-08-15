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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'd70811_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'd70811_dbuser' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'aX*TsKgZ=_YG=DJa' );

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
define( 'AUTH_KEY',         '6<@GUD}beMrA2=zwMCRvv-#h*2G1yD2,VAFO[}}%8[:vRvX3h{9?VUqqulVs,.2a' );
define( 'SECURE_AUTH_KEY',  '2Ou5?lcy/@$&dgF/+mXU]1uP;`}#=,~q)1F_7gkqZLd8krYm/xZ!tQCI5]ZRmQdx' );
define( 'LOGGED_IN_KEY',    '` Fznmwrj$f~N}L{;{`EJN%KAij79H:9[r26]nog!=H/vzDj]w(CIH~{T}QFn2K+' );
define( 'NONCE_KEY',        'Gu{PM-yw>2_cm|VbPho6Ox!}(;)/7u]M/>y2b1)}8O:_Q05mEy6*`S1T|c6uC~@=' );
define( 'AUTH_SALT',        'X1vcM]WX4#&Tm^<>h+%QG$GVQiXR8%^2CB~~l1Dh~T+VJf)6i89J!biICV78{ Ki' );
define( 'SECURE_AUTH_SALT', 'j>v{7vL;BU3Ty2.V]EXDFR*A{$!j*[h{FTGSw2!Xz<wreVk0C1b3cQsxyP3Uts%Q' );
define( 'LOGGED_IN_SALT',   '6J72l|65#$].+YrXVtN@gG_lxhd--%9hxMED^&;bs`,Gkg=TU:nX){@,+cbek;C1' );
define( 'NONCE_SALT',       'H@ll#m1Q]Cg!69f4!PULGHg.9tL*VnG^la[#,bMubbi[B~-x4V}> ic [:a_4Cv|' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
