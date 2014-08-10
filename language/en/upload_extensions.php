<?php
/**
*
* @package Upload Extensions
* @copyright (c) 2014 ForumHulp.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
        exit;
}

if (empty($lang) || !is_array($lang))
{
        $lang = array();
}

$lang = array_merge($lang, array(
	'ACP_UPLOAD_EXT_TITLE'				=> 'Upload Extensions',
	'ACP_UPLOAD_EXT_CONFIG_TITLE'		=> 'Upload extensions',
	'ACP_UPLOAD_EXT_TITLE_EXPLAIN'		=> 'Upload Extensions enables you to upload extensions\' zip files or delete extensions\' folders from the server.<br />With this extension you can install/update/delete extensions without using FTP. If the uploaded extension already exists, it will be updated with the uploaded files.',
	'UPLOAD'							=> 'Upload',
<<<<<<< HEAD
	'EXTENSION_UPLOAD'					=> 'Upload extension',
	'EXTENSION_UPLOAD_EXPLAIN'			=> 'Here you can upload a zipped extension package containing the necessary files to perform installation from your local computer or a webserver. “Upload Extensions” will then attempt to unzip the file and have it ready for installation.',
=======
	'EXTENSION_UPLOAD'					=> 'Upload extension from a local computer',
	'EXTENSION_UPLOAD_EXPLAIN'			=> 'Here you can upload a zipped extension package containing the necessary files to perform installation. “Upload Extensions” will then attempt to unzip the file and have it ready for installation.',
>>>>>>> origin/master
	'EXTENSION_UPLOAD_REMOTE'			=> 'Upload extension from a remote server',
	'EXTENSION_UPLOAD_REMOTE_EXPLAIN'	=> 'Here you can type a link to a zipped extension package containing the necessary files to perform installation. “Upload Extensions” will then attempt to unzip the file and have it ready for installation.<br />Example: <code>https://forumhulp.com/upload_extensions.zip</code><br />NOTE: Some servers (for example, github.com) don\'t support remote uploads.',
	'EXT_UPLOAD_INIT_FAIL'				=> 'There was an error when initialising the extension upload process.',
	'EXT_NOT_WRITABLE'					=> 'The ext/ directory is not writable. This is required for “Upload extension” to work properly. Please adjust your permissions or settings and try again.',
	'EXT_UPLOAD_ERROR'					=> 'The extension wasn\'t uploaded. Please confirm that you upload the true extension zip file and try again.',
	'NO_UPLOAD_FILE'					=> 'No file specified or there was an error during the upload process.',
	'NOT_AN_EXTENSION'					=> 'The uploaded zip file is not a phpBB extension. The file was not saved on the server.',

	'EXTENSION_UPLOADED'				=> 'Extension “%s” was uploaded successfully.',
	'EXTENSIONS_AVAILABLE'				=> 'Available extensions',
	'EXTENSION_INVALID_LIST'			=> 'Extension list',
	'EXTENSION_UPLOADED_ENABLE'			=> 'Enable the uploaded extension',
<<<<<<< HEAD
	'ACP_UPLOAD_EXT_UNPACK'			=> 'Unpack extension',
=======
>>>>>>> origin/master

	'EXTENSION_DELETE'					=> 'Delete extension',
	'EXTENSION_DELETE_CONFIRM'			=> 'Are you sure that you want to delete the “%s” extension?',
	'EXT_DELETE_SUCCESS'				=> 'Extension was deleted successfully.',

	'ACP_UPLOAD_EXT_ERROR_DEST'			=> 'No vendor or destination folder in the uploaded zip file. The file was not saved on the server.',
	'ACP_UPLOAD_EXT_ERROR_COMP'			=> 'composer.json wasn\'t found in the uploaded zip file. The file was not saved on the server.',

	'UPLOAD_EXTENSIONS_DEVELOPERS'		=> 'Developers',

	'ziperror'		=> array(
		'10'		=> 'File already exists.',
		'21'		=> 'Zip archive inconsistent.',
		'18'		=> 'Invalid argument.',
		'14'		=> 'Malloc failure.',
		'9'			=> 'No such file.',
		'19'		=> 'Not a zip archive.',
		'11'		=> 'Can\'t open file.',
		'5'			=> 'Read error.',
		'4'			=> 'Seek error.'
	),
<<<<<<< HEAD
	
	'ZIP_UPLOADED'			=> 'Extension zips already uploaded.',

=======
>>>>>>> origin/master
));