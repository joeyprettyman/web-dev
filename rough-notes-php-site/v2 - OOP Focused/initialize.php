<?php
/**
 * @brief		Rough Notes constants, autoloader and exception handler
 * @author		<a href='https://www.roughnotes.com'>The Rough Notes Company, Inc.</a>
 * @copyright	(c) The Rough Notes Company, Inc.
 * @license		https://www.roughnotes.com.com/legal/standards/
 * @package		Rough Notes Advantage Plus
 * @since		20 Dec 2021
 */

namespace RN;

// WRONG FIRST
// RIGHT LAST

/**
 * Class to contain rough Notes autoloader and exception handler
 */
class RN
{	
    /**
     * Initiate Rough Notes constants, autoloader and exception handler
     * 
     * @return  void
     */
    public static function init()
    {
        /* Set timezone
        /* 
        /* 🔍 Coordinated Universal Time
        /* 🔗 https://en.wikipedia.org/wiki/Coordinated_Universal_Time */
        date_default_timezone_set( 'UTC' );

        /* Set default MB internal encoding. */
        mb_internal_encoding( 'UTF-8' );

        /* Set Autoloader */
        spl_autoload_register( '\RN\RN::autoloader', true, true );
    }

    /**
     * Autoloader
     * 
     * @param   string $classname Class to load
     * @return  void
     */
    public static function autoloader( $classname )
    {
        /* Separate by namespace */
        $bits = explode( '\\', ltrim( $classname, '\\' ) );

        /* If this doesn't belong to us, try a PSR-0 loader or ignore it */
        $vendorName = array_shift( $bits );
        $class = array_pop( $bits );

        print( $vendorName );
        print( $class );
        
        /*if( $vendorName !== 'RN' )
        {
            
        }*/
    }



}

require_once './classes/core.php';
?>

<a href='./'>
    Home
</a>

<a href='./login/'>
    Login
</a>

<a href='./logout/'>
    Logout
</a>