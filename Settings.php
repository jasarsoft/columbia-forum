<?php

/**
 * Simple Machines Forum (SMF)
 *
 * @package SMF
 * @author Simple Machines http://www.simplemachines.org
 * @copyright 2011 Simple Machines
 * @license http://www.simplemachines.org/about/smf/license.php BSD
 *
 * @version 2.0
 */

########## Maintenance ##########
# Note: If $maintenance is set to 2, the forum will be unusable!  Change it to 0 to fix it.
$maintenance = 0;		# Set to 1 to enable Maintenance Mode, 2 to make the forum untouchable. (you'll have to make it 0 again manually!)
$mtitle = 'Maintenance Mode';		# Title for the Maintenance Mode message.
$mmessage = 'Okay faithful users...we\'re attempting to restore an older backup of the database...news will be posted once we\'re back!';		# Description of why the forum is in maintenance mode.

########## Forum Info ##########
$mbname = 'Columbia State RolePlay';		# The name of your forum.
$language = 'croatian-utf8';		# The default language file set for the forum.
$boardurl = 'https://columbia-state.com';		# URL to your forum's folder. (without the trailing /!)
$webmaster_email = 'board@columbia-state.com';		# Email address to send emails from. (like noreply@yourdomain.com.)
$cookiename = 'SMFCookie549';		# Name of the cookie to set for authentication.

########## Database Info ##########
$db_type = 'mysql';
$db_server = 'localhost';
$db_name = 'u0570120_forum';
$db_user = 'u0570120_forum';
$db_passwd = 'S6[8Mq-8p5';
$ssi_db_user = '';
$ssi_db_passwd = '';
$db_prefix = 'forum_';
$db_persist = 0;
$db_error_send = 0;

########## Directories/Files ##########
# Note: These directories do not have to be changed unless you move things.
$boarddir = '/home/u0570120/public_html';		# The absolute path to the forum's folder. (not just '.'!)
$sourcedir = '/home/u0570120/public_html/Sources';		# Path to the Sources directory.
$cachedir = '/home/u0570120/public_html/cache';		# Path to the cache directory.

########## Error-Catching ##########
# Note: You shouldn't touch these settings.
$db_last_error = 0;


# Make sure the paths are correct... at least try to fix them.
if (!file_exists($boarddir) && file_exists(dirname(__FILE__) . '/agreement.txt'))
	$boarddir = dirname(__FILE__);
if (!file_exists($sourcedir) && file_exists($boarddir . '/Sources'))
	$sourcedir = $boarddir . '/Sources';
if (!file_exists($cachedir) && file_exists($boarddir . '/cache'))
	$cachedir = $boarddir . '/cache';

$image_proxy_secret = '4c14849eef04a96d78ae';
$image_proxy_maxsize = '5190';
$image_proxy_enabled = 0;
?>