Make sure you set the following variables in your wp-config.php
< br / >
/* Environment */< br / >
define( 'WP_ENVIRONMENT_TYPE', 'development' );< br / >
define( 'WP_DEVELOPMENT_MODE', 'theme' );
< br / >
< br / >
The Patterns folder needs to be in the root of your theme.< br / >
functions.php just runs a loop through any functions-yourname-here.php file in the functions folder.