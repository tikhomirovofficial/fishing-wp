<?php
define( 'WP_CACHE', true ); // Added by Speed Booster Pack
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
define( 'DB_NAME', 'fishing' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '@-aSzB&n~T|)DiX`H@zbFgwpEQmk/g7Z*}(xmfk{{|Tja aIzj54X2(Co.+3}4S?' );
define( 'SECURE_AUTH_KEY',  '&%dxvvEl^_-d3p;P]EG$]kmsv?L)-PZmicp/9$F_dtN_A_.aIR!Z[KK-@oxY.#cI' );
define( 'LOGGED_IN_KEY',    'G}Z7k`Hvj0 51T&#ztDg;7*~MQP`^1Gs>H870M6lahEOD0q/7bM,zjlzbJ%s?!Ly' );
define( 'NONCE_KEY',        ':f~FmBjB-BQG>Wxf[kj`0uMq4]Bkcl1l%/$$S;@6<4U}[Y{NO3xC$1+ijn[,-l>g' );
define( 'AUTH_SALT',        'kFrz`of/3KxIse$puVKcvUa`|}< s{dp@@7gVPMIdGe]Da]K*(cLMlpqYep N&.L' );
define( 'SECURE_AUTH_SALT', 'qpp>P u_ r>~f3xJ*^<%r8)c.4W$9aqJfMD>c15]av~=EmRw[jeL({-Iw5|4T5oc' );
define( 'LOGGED_IN_SALT',   '*Wb9VF9VB:TtD:]6-xe=WeH;KQjVz+stW(;^@:Nqihil%Q!5B.mvaTiK?B?zHS4P' );
define( 'NONCE_SALT',       't=#.!T8IOIbMiLHyltnIhrzL=;!`tAQsujGrDf.*_}slDha,:53~0w$YqQu[3nIS' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
