---
layout: page
title: FAQ - I cannot upload large files
---

## I cannot upload large files

When uploading large files (photos, documents, GEDCOM files, etc.), the upload may fail with errors such as "File not received".

Your webserver enforces a limit on the size of uploaded files, and will block large files before they reach webtrees.

You can check your server's limits in the webtrees control panel, under "Server information".  There are two settings, `post_max_size` and `upload_max_filesize`.  These typically default to 2MB or 8MB.

Files larger than these settings cannot be uploaded.

You may be able to increase these settings in your server's `php.ini` file.  You often need to restart your webserver for any changes to take effect.

Alternatively, you may need to ask your server's administrator to increase the limits.

If you cannot increase the limits, then you need to copy files directly to the webserver.

* You should copy (FTP or SFTP) GEDCOM files to the folder `/data` - webtrees can import GEDCOM files from this folder.

* You should copy (FTP or SFTP) media files to the folder `/data/media` - webtrees can create media objects from files in this folder.
