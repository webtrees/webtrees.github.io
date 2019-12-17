---
layout: page
title: Converting from PhpGedView
---

# Converting from PhpGedView

If you are moving to webtrees from an existing PhpGedView (PGV) setup and your PGV installation meets certain requirements (see exceptions below), webtrees has a wizard to help make the transfer of the majority of your data a relatively quick and painless operation.

However, this wizard is only available in webtrees 1.7. **If you are transferring from PGV, you should install webtrees 1.7 first and then upgrade to webtrees 2.0.**

Please note this wizard is designed to not disturb your existing PGV installation, leaving all those settings, data, and your website intact and fully functional.

The requirements for a successful transfer are:

1. The PGV database and index directory must be on the same server as your new webtrees installation.
2. Your webtrees MySQL database username and password must either be the same as those of your PGV installation, or if you created a new user for webtrees, that new user must also have full privileges to access your existing PGV database.
3. PGV must be version 4.2.3 or 4.2.4 (this corresponds to an internal `PGV_SCHEMA_VERSION` of between 10 and 14). Newer versions, including the current version 4.3 SVN work too, and later versions, should they be released, will probably work provided the data structures do not change.
4. All changes in PGV must be accepted (as pending edits will not be transfered).
5. All existing PGV users must have an email address, and it must be unique to that user. (PGV allows users to delete their email address or have the same email address as other users, whereas webtrees requires that all users have their own unique email addresses.)
6. The transfer wizard overwrites the username and password you may have entered in setting up the initial administrator account. The main administrator username and password in webtrees will be identical to the ones from PGV after running the wizard. Once complete, you can change it back if desired.

The [FAQ](../faq) page has answers to several questions about this utility.

## Exceptions

The transfer wizard does not move media items. (webtrees stores media files slightly differently to PGV.) You will need to set up your media configuration in webtrees and move or copy your media objects separately after the transfer wizard is complete. See the [Media Firewall](../administration-guide/media-firewall) page for details.

Additionally, due to differences in internal data formats, the following settings are not transferred:

- Custom privacy restrictions
- Block configuration
- FAQs
- HTML blocks

After the transfer is complete, you should check your family tree configuration and privacy settings.
