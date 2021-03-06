---
layout: documentation
title:  Microsoft IIS
date:   2021-05-20
order:  99
---

Some versions of  Microsoft IIS will block requests with long URLS.

This will break some features of webtrees, including all the tables
that load their content dynamically.

You can change this setting using a command similar to this:

```
%windir%\system32\inetsrv\appcmd set config "Default Web Site" /section:requestFiltering /requestLimits.maxQueryString:20480 /requestLimits.maxUrl:20480
```

Use these commands to restart IIS:

```
net stop w3svc
net start w3svc
```

Alternatively, you may be able to merge the following into a file `web.config`
in your site’s home folder.

```
<?xml version="1.0" encoding="UTF-8"?>
<configuration>
  <system.webServer>
    <security>
      <requestFiltering>
        <requestLimits maxUrl="20480" maxQueryString="20480" />
      </requestFiltering>
    </security>
  </system.webServer>
</configuration>
```

Some versions of IIS do not include a root certificate file `cacert.pem`, and cannot make outgoing HTTPS
connections.  This breaks the "check for upgrades" feature.

You may need to configure this yourself.  There are more details at <https://www.php.net/manual/en/curl.configuration.php>.
