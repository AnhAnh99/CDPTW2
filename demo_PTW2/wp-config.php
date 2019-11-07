<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'demo_PTW2' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Y$3zKcHuX,IHX:r3]U`auSC.xk}t|u%IEdF(.PiXpWiAw^5!@/Dtd/t_a1QKPuH|' );
define( 'SECURE_AUTH_KEY',  'S0rxx<QZobGXJlu?BSR<+ 1?s~7[r vh56NbSAlIavQI2fShB^!# ,cF^uSX=x3D' );
define( 'LOGGED_IN_KEY',    'qwA=w9]fvv88h>Mde5OD*+OO:}o8|>sb;Q([7ioa Db5C,q?`UZhS7YAt&AUeM.*' );
define( 'NONCE_KEY',        '8qyLtZO7H@w+_yz-0FcnH@M0Es0i#dg=$3()W%;gn~>OdL1?]FX?#Bz&}rCI%vUF' );
define( 'AUTH_SALT',        'Zc+yNw%wNnt&G5Sp;ZjfX~:wazq|>EW:Pkq%S95jp);]EqR[B#GB`2T@| PU6lh.' );
define( 'SECURE_AUTH_SALT', 'PC!v_A(&,<4ar:2DzY&P !%.%`Yn/5{}H9+W>dAgfyf)w$q`j9Uhf!|uno=&Q[ X' );
define( 'LOGGED_IN_SALT',   'dupw;v;05zmZ=RHS >KiKPH`~01^Yx;Z[TL`_(:_[.=d+kO{8v}7wx Yw9b&17kY' );
define( 'NONCE_SALT',       ':ONPQDGga(;uFt~MRh)e)TwXZ}tH{RTBdxbTA(c1;p7NK6FzuUv4=no[FKnbutUJ' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
