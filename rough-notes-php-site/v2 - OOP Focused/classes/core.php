<?php

class Core
{
    /**
     * Is HTTPS?
     *
     * Determines if the application is accessed via an encrypted
     * (HTTPS) connection.
     *
     * @return  bool
     */
    public static function is_https()
    {
        if( ! empty( $_SERVER['HTTPS'] ) && strtolower( $_SERVER['HTTPS'] ) !== 'off' )
        {
            return TRUE;
        }

        elseif( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && strtolower( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) === 'https' )
        {
            return TRUE;
        }

        elseif( ! empty( $_SERVER['HTTP_FRONT_END_HTTPS'] ) && strtolower( $_SERVER['HTTP_FRONT_END_HTTPS'] ) !== 'off' )
        {
            return TRUE;
        }
        
        return FALSE;
    }

    /**
     * Get Hostname
     *
     * Get the full name of the host of the site.
     *
     * @return  void
     */
    public static function get_hostname()
    {
        $hostname = strtolower( $_SERVER['SERVER_NAME'] );
        return $hostname;
    }

    /**
     * Get Directories
     *
     * Get the list of the directories.
     *
     * @return  void
     */
    public static function get_directories()
    {
        $hostname = strtolower( $_SERVER['REQUEST_URI'] );
        return $hostname;
    }
}


print( __file__ );
print( '<br>' );
print( __dir__ );
print( '<br>' );
print( $_SERVER['PHP_SELF'] );
print( '<br>' );
print( dirname( $_SERVER['PHP_SELF'] ) );
print( '<br>' );
print( '<br>' );
print( '<br>' );



print( basename( dirname( $_SERVER['PHP_SELF'] ) ) );
print( '<br>' );
var_dump( Core::is_https() );
print( '<br>' );
var_dump( Core::get_hostname() );
print( '<br>' );
var_dump( Core::get_directories() );
print( '<br>' );
print( '<br>' );
print( '<br>' );
print( '<br>' );



print( $_SERVER['REQUEST_URI'] );
print( '<br>' );
print( '<br>' );
print( 'BASENAME: ' );
print( basename(__FILE__, '.php') );
print( '<br>' );
print( $_SERVER['QUERY_STRING'] );
print( '<br>' );
print( '<br>' );
print( '<br>' );
?>