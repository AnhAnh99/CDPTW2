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
define( 'DB_NAME', 'web2' );

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
define( 'AUTH_KEY',         '>&-2To5p{+du]jOvDG])Xoa%n!?Z<O&;h3/?I;53$Xi9|7d `wspUnr!e(64r8*s' );
define( 'SECURE_AUTH_KEY',  '4k|6r6tl[&.^`/i>L-NHe0 GR=pJ>b#upyK?,7IByq6(1~ta|S/ c & *65x31du' );
define( 'LOGGED_IN_KEY',    'K4ZcP60vL;4H$EKz!mI]/B#)RYfN.;xL=`]_iq,P#y&Sj70Eqi7{0ej!?akB|=R~' );
define( 'NONCE_KEY',        'v2.h0gLBi%0+rtG%&^P;ANaYtlWA}`EHrbqbwQITXW8mgUtn<9jr]:o< {GMzD#&' );
define( 'AUTH_SALT',        '(}-[wm|OmFR4s:@^oc$GkvVwqT4?N;t)mVh@:/[xmotN3wE;a[~)fprU&k|]kUe:' );
define( 'SECURE_AUTH_SALT', '{x9P5`^(=4)ZY7l;2A!bs>{=1HNfeH$9T-dLrba.Y>Cw?iXJh4DLb},dN1XCY>{[' );
define( 'LOGGED_IN_SALT',   '=[|qW`?r^4,wN,o?cLa3}fB#njE:@1$lKjzLD9e.g>Q|qUQ3r8S$aO+7g{=Q3P=;' );
define( 'NONCE_SALT',       'W8C5=B-#y+~d0?2m?4bD_np|D:+NZA$=d@$ZS1Xv$tGbGNy]m7lZD$Kw2f k1-C?' );

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
