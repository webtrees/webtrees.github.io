---
layout: documentation
title:  Privacy
date:   2020-05-18
order:  1
---

The default privacy settings in webtrees are suitable for most people,
and will protect the privacy of living individuals by default.

You can apply precise control over privacy at many different levels.

## Privacy for trees

By default, your trees are publicly visible - although each record within
it will be subject to its own privacy rules.

To make a tree completely private, use “Show tree: show to members” in the
tree’s privacy settings.  Private trees are only visible to users who have
the “member” access role or higher in their user account.

To make a tree completely public (and disable all privacy checks), use
”Show living individuals: show to visitors” in the tree’s privacy settings.
You would normally do this on a tree that only contains public information.
Disabling privacy checks will improve performance.

## Privacy for records

Records are objects in your genealogy such as individuals, sources and media objects.

If a record has a privacy restriction, this takes priority.
Privacy restrictions are added in the same way as other facts
such as birth, marriage and death.

If a record does not have a privacy restriction, then webtrees looks
at the “Privacy rules” in the tree’s privacy settings.

You can set a rule for all records of a specific type (except
individual and family — which have special logic).

You can also set a rule for a specific record. This function
is designed for people who use webtrees to display data that is
maintained in another application, and which does not support
privacy restrictions.  You should add privacy restrictions to the
records themselves wherever possible.

By default, new trees have rules to make all sources, repositories
and submitters private.

If there is no privacy rule for the record, then webtrees uses
the following logic for each record type.

### Individual records

Living individuals are private, dead individuals are public.
If there is insufficient information to determine whether the
individual is living or dead, webtrees assumes that they are living.

In most countries, your right to privacy ends with your death.
In others, it can extend for a number of years afterwards.
There is an option in the privacy settings to support this.
Beware that this option causes a small decrease in performance.

You can also apply “relationship privacy” to specific users.
This will restrict them to living individuals within a certain
number of relationship steps.  You can set this in their user
account page.
Beware that this option can be slow for large numbers of steps.

You can relax the privacy relating to indivdiuals with the
“Show private names” option.  This will show the names, but no
other information of private individuals.  It is often used
with the “Show private relationships” option.  You can override
this for specific names by giving them a privacy restriction.
These will be hidden, even when this setting is used.

### Family records

Family records are private if any member of the family is private.
This includes children as well as spouses.

You can relax the privacy relating to families with the
“Show private relationships” option.  This will show the structure
of families, without showing the details.

### Media and note records

Media and note records are private if they are linked to any private record.
Otherwise they are public.

### Source records

Sources are private if they are linked to private repositories.
Otherwise they are public.

### Other record types

Other records are assumed to be public.

## Privacy for facts

Privacy for facts (such as birth, marriage and death) uses privacy
restrictions and privacy rules in the same way as records.

You can add explicit restrictions to particular facts, or use the
“Privacy rules” to apply them to all facts of a particular type.

A common use for this is to make the record of a living individual public –
but some of the facts private.
Many webtrees users do this for their own individual record.
We do it for
[Queen Elizabeth’s record](https://dev.webtrees.net/demo-dev/tree/demo/individual/i1/Queen-Elizabeth-II)
on the demo site.

## Privacy for attributes of facts

You cannot apply privacy to the attributes of a fact, such as date, place, etc.
This is because it is not supported by the GEDCOM format.

But you can create two copies of a fact, and add a privacy restriction to
just one of them.  Put the private details in the copy with the restriction.

A common use for this is to hide the cause of death for an individual.


