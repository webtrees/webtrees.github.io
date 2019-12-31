---
layout: page
title: FAQ - password
date: 2019-12-31
---

## I forgot my password and cannot log in

There are several ways to reset your password.

## Is there another webtrees administrator on your site? ##

Ask them to reset your password from the webtrees control panel.

## Is your server configured to send email? ##

The login page has a "forgot password" link. It will send a new password to you by email.

## Can you access your database? (e.g. using PhpMyAdmin) ##

Find the table `wt_user` and the row for your user account.  Set the `password` field to the value `$1$VDnz7rNf$nDgfF52rgdz89uTSJ1sa41`.  This is the encrypted form of the text `password`.

## Can you access the files on your webserver? (e.g. using FTP / SFTP) ##

Create a text file called `password.php` with the following content.  Copy it to the webtrees folder on your server.  Replace each occurrence of `XXXXX` as appropriate

<div class="card">
	<div class="card-header">
		password.php
	</div>
	<div class="card-block">
<pre>
&lt;?php
// These are your database connection settings.
// You can find them on your server in the file data/config.ini.php
$DBHOST = 'XXXXX';
$DBPORT = 'XXXXX';
$DBNAME = 'XXXXX';
$DBUSER = 'XXXXX';
$DBPASS = 'XXXXX';
$TBLPFX = 'XXXXX';

// This is the email address of the account you want to change
$EMAIL  = 'XXXXX';

// This is the new password
$PASSWD = 'XXXXX';

$pdo = new PDO(
  (substr($DBHOST, 0, 1) === '/' ?
    "mysql:unix_socket={$DBHOST};dbname={$DBNAME}" :
    "mysql:host={$DBHOST};dbname={$DBNAME};port={$DBPORT}"
  ), $DBUSER, $DBPASS);
$sql = 'UPDATE `' . $TBLPFX . 'user` SET password = :password WHERE email = :email';
$stmt = $pdo->prepare($sql);
$stmt->execute(array('password' => crypt($PASSWD, ''), 'email' => $EMAIL));
if ($stmt->rowCount() > 0) {
  echo 'SUCCESS - The user account was updated.';
} else {
  echo 'ERROR - The user account was not found or not updated.';
}
</pre>
	</div>
</div>

Copy the file to the webserver and run it by typing the URL into your browser.  e.g. `http://your-site.com/path-to-webtrees/password.php`.

Remember to delete the file when you are finished.
