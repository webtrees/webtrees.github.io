---
layout: post
title:  "webtrees 2.0.0 released"
date:   2019-12-07
sitemap:
    priority: 0.7
---

webtrees 2.0.0 is now available for download. Yay!

It has been a long wait - and a lot of work. For software projects, the transition from version 1 to version 2 is always a very dangerous time. The old code has often become convoluted and increasingly difficult to maintain/develop/support. For open-source projects, this is a particular problem. Convoluted code is not enjoyable to work with. Rewriting a large project is a lot of work, and the old code needs to be supported at the same time. Also, if the new version is too different to the old version or it misses some functions, the users will not want to upgrade.

I *think* I have managed this upgrade sucessfully - and I want to thank you all for your support and patience over the last two years.

About 95% of the code has been re-written, and the internals have been simplified and separated out into independent components. There have been very few changes to the logic and behaviour - although the appearance has been updated to work with mobile devices.

The new modular design means that we can now allow custom modules to modify almost any aspect of the code. If you want to customize your installation, this is now much easier. Also, the module interface should be much more stable, and you shouldn't need to upgrade your modules every time you upgrade webtrees. If you are a module author and need help updating your module from 1.7 to 2.0, please get in touch.

There are approximately 175 sites running the 2.0.0-beta release, and so I am reasonably confident that there are no significant issues with the code. I plan to return to a fairly rapid release cycle, so expect 2.0.1 in a few weeks.

Upgrading works the same as previously - just copy the new files to the server. However, when upgrading from 1.7 to 2.0, there's a few things you need to do first. I've written some notes here: [webtrees.github.io/upgrade](https://webtrees.github.io/upgrade). It is important that you read them before upgrading.

There is no automatic upgrade from 1.7. I want to create a new 1.7 release which includes these extra preparations/checks.

Greg
