<?php
    /**
     * The base configuration for WordPress
     *
     * The wp-config.php creation script uses this file during the
     * installation. You don't have to use the web site, you can
     * copy this file to "wp-config.php" and fill in the values.
     *
     * This file contains the following configurations:
     *
     * * MySQL settings
     * * Secret keys
     * * Database table prefix
     * * ABSPATH
     *
     * @link https://wordpress.org/support/article/editing-wp-config-php/
     *
     * @package WordPress
     */
    
    // ** MySQL settings - You can get this info from your web host ** //
    /** The name of the database for WordPress */
    define( 'DB_NAME', 'imonzon' );
    
    /** MySQL database username */
    define( 'DB_USER', 'root' );
    
    /** MySQL database password */
    define( 'DB_PASSWORD', '' );
    
    /** MySQL hostname */
    define( 'DB_HOST', 'localhost' );
    
    /** Database Charset to use in creating database tables. */
    define( 'DB_CHARSET', 'utf8mb4' );
    
    /** The Database Collate type. Don't change this if in doubt. */
    define( 'DB_COLLATE', '' );
    
    /**#@+
     * Authentication Unique Keys and Salts.
     *
     * Change these to different unique phrases!
     * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
     * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
     *
     * @since 2.6.0
     */
    define( 'AUTH_KEY',         'H_F^wuc88u.:O62_?q*NZBYDt`URMA[|O;AAU+&ZfL4]Q6a9YUIDWO27j?00Z+YF' );
    define( 'SECURE_AUTH_KEY',  'X$#_.GYlk=K?WJ7MMaE1C!yI#!S~.!S/7W[/0!#:2!$9vQQpS+^{8xt1h_u1=jh8' );
    define( 'LOGGED_IN_KEY',    '(w-b^:lUQfWjsIuyZ|A2KcNY$-Hj,F#XgU9S`v@O&ZX~T9,9+QYeuU>dI&]oc@z8' );
    define( 'NONCE_KEY',        'fk>?CS+v; 0hkS]C.|5kOr?KW?DFmF8asx*lvf_f|glb`5`{tACf}%j_KFU1aBc9' );
    define( 'AUTH_SALT',        'Rs/ps#=O!m si)!pdS7-d|y-Nt~bderp0rY$5=erku+$-(;/6M&u+T?eJdV6Z`we' );
    define( 'SECURE_AUTH_SALT', 'P4rGZeh8D8!LH6*KcmXJW}Q-0UI)9QQO7Mmy)?DR:[K7{ 8p%)jcP?.q=^g(B`6q' );
    define( 'LOGGED_IN_SALT',   '@w)q;+T>EcoZ&92~{7i:h2zYQQ5naPeQi(n #NX8dTA2Suy.=&g<MeZ-LY!5;R=X' );
    define( 'NONCE_SALT',       '1,41{SEbdm0]?g2FD{[Iv=6P3iZ9&~AkqfzDb$!6J)JVxM+<QKBd$e`iHC uxb#s' );
    
    /**#@-*/
    
    /**
     * WordPress Database Table prefix.
     *
     * You can have multiple installations in one database if you give each
     * a unique prefix. Only numbers, letters, and underscores please!
     */
    $table_prefix = 'wp_';
    
    /**
     * For developers: WordPress debugging mode.
     *
     * Change this to true to enable the display of notices during development.
     * It is strongly recommended that plugin and theme developers use WP_DEBUG
     * in their development environments.
     *
     * For information on other constants that can be used for debugging,
     * visit the documentation.
     *
     * @link https://wordpress.org/support/article/debugging-in-wordpress/
     */
    define( 'WP_DEBUG', false );
    
    /* That's all, stop editing! Happy publishing. */
    
    /** Absolute path to the WordPress directory. */
    if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
    }
    
    /** Sets up WordPress vars and included files. */
    require_once ABSPATH . 'wp-settings.php';
    define('FS_METHOD','direct');
