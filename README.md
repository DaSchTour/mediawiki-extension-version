mediawiki-extension-version
===========================

== Requirements ==
PHP 5.3

== Installation ==
Download the files from github. Put them in /extensions/ExtensionVersion and put the following to your LocalSettings.php
require_once( "$IP/extensions/ExtensionVersion/ExtensionVersion.php" );

== Configuration ==
Added userright to access the special page

$wgGroupPermissions['sysop']['extensionversion'] = true;
$wgAvailableRights[] = 'extensionversion';

If you want everyone do to able to access the page add
$wgGroupPermissions['*']['extensionversion'] = true;
to LocalSettings.php