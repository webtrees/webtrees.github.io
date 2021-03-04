---
layout: page
title: FAQ - How do I configure webtrees to send e-mail?
date: 2020-04-25
---

Sending e-mail is difficult.  Because of spam, many systems exist to block
e-mails.  Even if your server is sending e-mail, there is no guarantee that
it will be delivered.

## Methods for sending e-mail.

There are two systems for sending mail - SMTP and Sendmail.

* “SMTP” is a protocol to communicate with other mail servers.
Almost all webtrees sites will use this method.

* “Sendmail” is a process that runs on your server.  It needs to be
properly configured by your system administrator, and PHP needs to
have permission to create processes on the server.
Most webhosting packages will **not** allow you to do this.

Note: earlier versions of webtrees had an option to send e-mail using the PHP
function `mail()`.  Most mail libraries no longer support this option.
Firstly, it always reports “success”, even if it fails to send the message.
Secondly, it has serious security weaknesses, which cannot be fixed.

## Sendmail configuration

By default, webtrees will use the command `/usr/sbin/sendmail -bs` to
send mail.  If your server requires different options (e.g. `-t`), add
a line to `data/config.ini.php`.  e.g.

```
sendmail_command="/path/to/sendmail -t"
```

## SMTP Configuration

To set the SMTP options, visit Control panel -> Website -> Sending e-mail.

The settings for each SMTP server will be different.  Please consult
your provider’s documentation for details.

## How to test e-mail

At the bottom of the e-mail preferences page is a "Send a test mail" checkbox.
When you select this and save the settings, webtrees will send you a message.
You should see a success/fail message at the top of the next page.

If you see a success message, and the mail is not received, then it is
most likely that it was blocked by a spam filter.

If you see a failure message, visit Control panel -> Website -> Website logs.
You should find a (hopefully helpful) error message.

It can help to do a web-search of this message and the name of your
SMTP provider.

## What is the “Sender name”

This the email address that will be used in the “From” field when sending e-mail.

A typical setting might be “no-reply@mydomain.com”.

Some SMTP servers may only deliver mail from known addresses or domain names.

## Using a Google Gmail account

If you have a Gmail account, you can use Google’s SMTP server.

If you have enabled two-factor-authentication on your account, then you
must create an “app password” at <https://myaccount.google.com/apppasswords>.
Use this “app password” in the SMTP settings.

If you have not enabled two-factor-authentication on your account, then you
must enable "less secure apps at <https://myaccount.google.com/lesssecureapps>.
Use your Google account password in the SMTP settings.
Note that Google will disable this option if you do not use it regularly,
and you will need to enable it again.

* Server name: smtp.gmail.com
* Port number: 587
* Secure connection: tls
* Username: xxxx@gmail.com
* Password: See above for which password to use
