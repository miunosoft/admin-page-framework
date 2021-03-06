<?php
/**
 * Admin Page Framework
 * 
 * http://en.michaeluno.jp/admin-page-framework/
 * Copyright (c) 2013-2014 Michael Uno; Licensed MIT
 * 
 */

// If accessed from a browser, exit.
if ( php_sapi_name() !== 'cli' ) {
    exit;
}
 
// For the script creator.
if ( file_exists( dirname( dirname( __FILE__ ) ) . '/admin-page-framework.php' ) ) {
    include_once( dirname( dirname( __FILE__ ) ) . '/admin-page-framework.php' );
}

if ( ! class_exists( 'AdminPageFramework_InclusionClassFilesHeader' ) ) :
/**
 * Provides header information of the framework for the minifed version.
 * 
 * The script creator will include this file ( but it does not include WordPress ) to use the reflection class to generate the header comment section.
 */
final class AdminPageFramework_InclusionClassFilesHeader extends AdminPageFramework_Registry_Base {
    
    const Name = 'Admin Page Framework - Inclusion Class Files';
    const Description = 'Generated by PHP Class Files Inclusion List Creator';    
    
}
endif;