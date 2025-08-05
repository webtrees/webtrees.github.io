---
layout: documentation
title:  Command line tools
date:   2025-08-05
order:  3
---

Since version 2.2.4, webtrees has a command line interface (CLI).

Commands are entered using the same `index.php` that is used for the web interface.

To see a list of commands, run `php index.php list`.

To get help for a command, run `php index.php COMMAND --help`.

Here are some examples of the available commands.

```
$ php index.php tree-list
+----+-----------+-----------------+-----------------+----------+
| ID | Name      | Title           | Media directory | Imported |
+----+-----------+-----------------+-----------------+----------+
| 1  | demo      | Royal Family    | media/royals/   | yes      |
| 2  | mythology | Greek Mythology | media/myth/     | yes      |
+----+-----------+-----------------+-----------------+----------+
```

```
$ php index.php tree-export demo

                                                                                                                        
 [OK] File exported successfully.  176126 bytes written to demo.ged in 0.019 seconds                                    
                                                                                                                        
```

```
$ php index.php user-setting greg language en-US

                                                                                                                        
 [OK] User setting ‘language’ was changed from ‘en-GB’ to ‘en-US’.                                                      
                                                                                                                        

```
