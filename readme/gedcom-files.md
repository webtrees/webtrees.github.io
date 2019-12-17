---
layout: page
title: GEDCOM (family tree) FILES
---

# GEDCOM (family tree) FILES

When you ADD, IMPORT or UPLOAD a family tree (GEDCOM) file in **webtrees** the data from the file is all transferred to the database tables. The file itself is no longer used or required by **webtrees**.

- If you use ADD or IMPORT, your file remains in the webtrees/data folder you first copied it to, and will not be changed by any subsequent editing of the **webtrees** data.
- If you use UPLOAD, the file is left in its original location, and again remains untouched.

When or if you change your genealogy data outside of **webtrees**, it is not necessary to delete your GEDCOM file or database from **webtrees** and start over. Follow these steps to update a GEDCOM that has already been imported:

1. Decide if you want to IMPORT or UPLOAD your new family tree (GEDCOM) file.
    - Use UPLOAD if your family tree file is smaller than your server's PHP file upload limit (sometimes as low as 2MB).The new file can have any name you choose.
    - Use IMPORT for larger files. In this case you need to use FTP to first copy your file to the webtrees/data folder. Either copy over the existing file, or use a different name.
2. From the Administration page, go to your **webtrees** Family trees (GEDCOM) configuration page by selecting "Family trees". Then, on the line relating to this particular family tree (GEDCOM) file (or a new one) click either IMPORT or UPLOAD.
3. Take careful note of the media items option (_"If you have created media objects in webtrees, and have edited your gedcom off-line using a program that deletes media objects, then tick this box to merge the current media objects with the new GEDCOM."_) In most cases you should leave this box **UNCHECKED**.
4. Click "SAVE". **webtrees** will validate the GEDCOM again before importing. During this process, webtrees copies your entire family tree (GEDCOM file) to a 'chunk' table within your database. Depending on the coding of your file, its file size and the capabilities of your server and the supporting software, this may take some time. **No progress bar will show while the data is being copied** and should you navigate away from this page, the process is suspended. It will start again when you return to the Family Tree management page.

## FORMAT

Every Family History program has its own method of creating GEDCOM files, and differing output format options to select from. **webtrees** import routines can read many different formats, but not necessarily all. If your software has a "UTF8" option you should always use that. However, **webtrees** has been tested with these alternative formats:

- ANSI - imports OK, but is slow due to the translation into UTF8 as part of the import process.
- MAC - imports OK, but is slow due to the translation into UTF8 as part of the import process.
- DOS - imports OK, but is slow due to the translation into UTF8 as part of the import process.
- ANSEL - currently will not import. Gives warning _Error: cannot convert GEDCOM file from ANSEL encoding to UTF-8 encoding._ Later releases of **webtrees** may include translation from ANSEL to UTF8, but this is not a simple process.
