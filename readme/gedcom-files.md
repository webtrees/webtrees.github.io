---
layout: page
title: GEDCOM (Family Tree) Files
---

# GEDCOM (Family Tree) Files

When you import a family tree (GEDCOM) file in webtrees the data from the file is transferred to the database tables. The file itself remains in the `data` directory but is no longer used or required by webtrees. Any subsequent editing of the webtrees data will not change this file.

When or if you change your genealogy data outside of webtrees, it is not necessary to delete your GEDCOM file or database from webtrees and start over. Follow these steps to update a GEDCOM that has already been imported:

1. Go to the administrator Control Panel and select the relevant family tree on the dashboard, under **Family trees**.
2. Under **GEDCOM file**, select **Import**.
3. Take careful note of the **Keep media objects** option ("If you have created media objects in webtrees, and have subsequently edited this GEDCOM file using genealogy software that deletes media objects, then select this option to merge the current media objects with the new GEDCOM file.") In most cases you should leave this box **UNCHECKED**.
4. Click **continue**. webtrees will validate the GEDCOM again before importing. During this process, webtrees copies your entire family tree (GEDCOM file) to a 'chunk' table within your database. Depending on the coding of your file, its file size and the capabilities of your server and the supporting software, this may take some time. **No progress bar will show while the data is being copied** and should you navigate away from this page, the process is suspended. It will start again when you return to the Manage Family Trees page.

## GEDCOM File Formats

Every family history program has its own method of creating GEDCOM files and differing output format options to select from. webtrees' import routines can read many different formats, but not necessarily all. If your software has a "UTF8" option you should always use that. However, webtrees has been tested with these alternative formats:

- ANSI - imports OK, but is slow due to the translation into UTF8 as part of the import process.
- MAC - imports OK, but is slow due to the translation into UTF8 as part of the import process.
- DOS - imports OK, but is slow due to the translation into UTF8 as part of the import process.
- ANSEL - currently will not import. Gives warning: `Error: cannot convert GEDCOM file from ANSEL encoding to UTF-8 encoding.` Later releases of webtrees may include the facility to translate from ANSEL to UTF8, but for now a standalone utility is available [here](https://dev.webtrees.net/ansel/) and should be used to convert the format to UTF-8 prior to importing.
