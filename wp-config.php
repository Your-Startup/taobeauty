<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'shubizle11_new' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'shubizle11_new' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '1&pHetsZ' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'u~XPW5OeSF=U&`<V><X*x-U]d%vnQ)(DsI8l JBKDUZ_dLS;e?dgifTE~z#}+QNK' );
define( 'SECURE_AUTH_KEY',  '=T9:I#|(6<8W/ dFx6+`l7cUWd_$Ik_K<huc_EC8eN3TX[pW=c#+@2KDvxI0es*|' );
define( 'LOGGED_IN_KEY',    'oRsiaTm6Ah=ftWNV-TErkdxlw)vF(uc?hxHA_RN#)3FW}hP:Avr]g&;G>2dcKxf3' );
define( 'NONCE_KEY',        'x&O3.5K$<*CISjuGNMKqmQ98`*#kVx&=lK8D08d$!_E!b)/q$Z(Zyb1x6diJ9/JY' );
define( 'AUTH_SALT',        'Pm,GG^&V~bni,_L@ms]6j]W)|5W6PL^OXr(9ebYEJ8#@5O2Q4)Ic%De?Gg<*]BpQ' );
define( 'SECURE_AUTH_SALT', '{?>m[#D,$`)aab|dbj&}(A4z=W+]j/huy><R>imq={%Ue9+^XiphW k&fq6+W%%u' );
define( 'LOGGED_IN_SALT',   's1Vz56>9lz`1c>u3nImO%h^*~RqS0`!)L,aa<Wd /p51l/od$u]V&e`ll#*6|C+o' );
define( 'NONCE_SALT',       'f*k ^XV=R92|/E|sL:2TDEDBh6RU]~tQXe%^P`M]9B]]Rme&VI)k;g.dR:+.+LU_' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
