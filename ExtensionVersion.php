<?php
/** 
* @addtogroup Extensions 
*/
// Check environment
if ( !defined( 'MEDIAWIKI' ) ) {
	echo( "This is an extension to the MediaWiki package and cannot be run standalone.\n" );
	die( -1 );
}

/* Configuration */

// Credits
$wgExtensionCredits['specialpage'][] = array (
	'path'=> __FILE__ ,
	'name'=>'ExtensionVersion',
	'url'=>'https://github.com/DaSchTour/mediawiki-extension-version',
	'description'=>'Versionsinfos.',
	'descriptionmsg' => 'extensionversion-desc',
	'author'=>'[http://www.daschmedia.de DaSch]',
	'version'=>'0.0.3',
);

$wgGroupPermissions['sysop']['extensionversion'] = true;
$wgGroupPermissions['*']['extensionversion'] = false;
$wgAvailableRights[] = 'extensionversion';

$dir = dirname( __FILE__ ) . '/';

$wgExtensionMessagesFiles['ExtensionVersion']      = $dir . 'ExtensionVersion.i18n.php';
$wgExtensionMessagesFiles['ExtensionVersionAlias'] = $dir . 'ExtensionVersion.alias.php';

$wgAutoloadClasses[ 'SpecialExtensionVersion' ]    = $dir . 'SpecialExtensionVersion.php';
$wgSpecialPages[ 'ExtensionVersion' ] = 'SpecialExtensionVersion';