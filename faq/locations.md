---
layout: page
title: FAQ - How do locations work?
date: 2021-02-25
---

webtrees uses the GEDCOM data format to store your genealogy data.

GEDCOM allows you to store the co-ordinates (latitude/longitude) of
**events**, but not of **places**.

So, it can store the location of a specific birth, marriage or burial -
but it cannot store the location of "London, England".

Consider an individual with three events, all in the same town:
For the birth, we have the co-ordinates of the hospital.
For the burial, we have the co-ordinates of the cemetery.
For the baptism, we do not have the co-ordinates.

```
0 @X1@ INDI
1 NAME John /Doe/
1 BIRT
2 PLAC Milton Keynes, Buckinghamshire, England
3 MAP
4 LONG W0.73585
4 LATI N52.02707
1 BAPM
2 PLAC Milton Keynes, Buckinghamshire, England
1 BURI
2 PLAC Milton Keynes, Buckinghamshire, England
3 MAP
4 LONG W0.80404
4 LATI N52.03176
```

![Milton Keynes Gedcom](mk-facts.png)

webtrees can show the locations of the birth and burial on a map, but it
does not have the co-ordinates of the baptism.

![Milton Keynes Gedcom](mk-map-1.png)

So, we need some co-ordinates that represent the entire town (e.g. the town centre)
that we can use for any events in the town that do not have their own co-ordinates.

webtrees allows you to store co-ordinates for places (as opposed to events) in
a "gazetteer".  From the control panel, there is a link “Geographic data”.

This gazetteer exists independely from your genealogy data, and is shared
with all the family trees on your site.

Here, you would store the co-ordinates for places.  You could add some
co-ordinates  for "England, Buckinghamshire, Milton Keynes"

![Milton Keynes Gedcom](mk-location.png)

Now, webtrees will show the baptism on a map - at the town centre.

![Milton Keynes Gedcom](mk-map-2.png)

Why doesn’t webtrees copy co-ordinates from the gazetteer to the events?
========================================================================

Consider the example above.
If webtrees copied the co-ordinates for Milton Keynes (the town centre)
into the baptism record, it would imply that the baptism occurred at the
town centre.  This would be incorrect.

It would also make it impossible to know which co-ordinates are for the
actual event, and which are for the town centre.

Why doesn’t webtrees copy co-ordinates from the events to the gazetteer?
========================================================================

Consider the example above.
We have co-ordinates for two different events.  Which one would we copy?

Also, it would imply that the baptism occurred at the hospital (or the cemetery).
This would be incorrect.
