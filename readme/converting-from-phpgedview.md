---
layout: page
title: Converting from PhpGedView
---

# Converting from PhpGedView

If you are moving to **webtrees** from an existing PhpGedView ("PGV") setup, and your PGV install meets certain requirements, **webtrees** has provided a "wizard" to help make the transfer of the majority of your data a relatively quick and painless operation. See exceptions noted below. Please note that we have designed this wizard so as to not disturb your existing PGV installation, leaving all those settings, data and your website intact and fully functional.

The requirements for a successful transfer are:

1. The PGV database and index directory must be on the same server as **webtrees**;
2. Your **webtrees** MySQL database username and password must either be the same as your PGV username and password, or if you created a new user for **webtrees**, that new user must also have full privileges to access your PGV database;
3. PGV must beversion 4.2.3 or 4.2.4 (this corresponds to an internal "PGV_SCHEMA_VERSION" of between 10 and 14). Newer versions, including the current version 4.3 SVN work too, and later versions, should they be released, will probably work, provided the data structures do not change;
4. All changes in PGV must be accepted (as pending edits will not be transfered);
5. All existing PGV users must have an email address, and it must be unique to that user (PGV allows users to delete their email address, or have the same email address as other users; **webtrees** requires that all users have their own unique email address);
6. The wizard transfer process overwrites the username and password you may have entered in setting up the initial admin account. The main administration user name and password in **webtrees** will be identical to the admin user name and password from PGV after running the wizard. Once done, you can change it back if desired.

The [FAQ](../faq) page has answers to several questions about this utility.

This transfer wizard is not able to assist with moving media items. You will need to set up your media configuration in **webtrees** and move or copy your media objects separately after the transfer wizard is finished. **webtrees** stores media files slightly differently to PGV. See the [Media Firewall](../administration-guide/media-firewall) page for details.

Due to differences in internal data formats, the following settings are not yet transferred:

- Custom privacy restrictions
- Block configuration
- FAQs
- HTML blocks

After the transfer is complete, you should check your family tree configuration and privacy settings.
