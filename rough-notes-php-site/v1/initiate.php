<?php
/**
 * @brief		Initiates RoughNotes, autoloader and exception handler
 * @author		<a href='https://www.roughnotes.com'>Rough Notes Company, Inc.</a>
 * @copyright	(c) Rough Notes Company, Inc.
 * @license		https://roughnotes.com/wp-content/uploads/2018/06/RN_Privacy_Policy-1.pdf
 * @package		Rough Notes Software
 * @since		27 Nov 2021
 */

namespace ROUGHNOTES;

    class CORE
    {
        public static function init()
        {
            /* Set timezone */
            date_default_timezone_set( 'UTC' );

            /* Set default MB internal encoding */
            mb_internal_encoding('UTF-8');

            //echo "HARMONY";
            
            $currentPage = 'index';

            if( $currentPage == 'index') {
                require_once './classes/login.php';
                require_once './classes/footer.php';
            }

            /* Load constants.php 
            if ( "test" === "test" )
            {
                if ( file_exists( "/constants.php" ) )
                {
                    @include_once( "/constants.php" );
                }
            }
            else
            {
                if( file_exists( __DIR__ . '/constants.php' ) )
                {
                    @include_once( __DIR__ . '/constants.php' );
                }
            }*/
        }
    }

/* Init */
CORE::init();

?>