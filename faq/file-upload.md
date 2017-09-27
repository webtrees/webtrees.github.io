---
layout: page
title: FAQ - I cannot upload large files
permalink: faq/file-upload
---

# FAQ - I cannot upload large files #

When uploading large files (photos, documents, GEDCOM files, etc.), the upload may fail with errors such as "File not received".

Your webserver enforces a limit on the size of uploaded files, and will block large files before they reach webtrees.

You can check your server's limits in the webtrees control panel, under "Server information".  There are two settings, `post_max_size` and `upload_max_filesize`.  These typically default to 2MB or 8MB.

Files larger than these settings cannot be uploaded.

You may be able to increase this setting in your server's `php.ini` file.  You may need to restart your webserver for any changes to take effect.


Alternatively, you may need to ask your server's administrator to increase the limits.

If you cannot increase the limits, then you can still copy files to the webserver using FTP or SFTP.

You should upload GEDCOM files to the folder `/data` and media files to the folder `/data/media/`.
