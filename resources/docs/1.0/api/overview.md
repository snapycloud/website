# Overview

---

- [Snapy api platform](#section-1)

<a name="section-1"></a>
## Snapy api platform
SnapyApi is a APi Platformm any application and mobile can REST API to connect backend. you can implement via API calls using your programing language. You can learn how API working.
##
Base URL of  API is: `api/v1/`.  You need to prepend it to your reference.

```php
GET http://uuidcloud.domain/api/v1/Users/55723ca056f6ab4c5.
```

> {info} POST, PATCH calls usually need some JSON data in payload.

##

> {success} Most of api functions return JSON.


It's recommended to create a separate user with restricted rights and use this user for API calls.