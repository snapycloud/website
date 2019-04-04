# Authentication

---

- [Authentication by Api Key](#section-1)
- [HMAC Authentication](#section-2)
- [Basic Authentication](#section-3)

<a name="section-1"></a>
## Authentication by Api Key
The easiest method of authentication.
You need to create API User (Administration > API Users) with Api Key authentication method.
Apply needed role to the user to restrict or grand an access.
##
Authentication header: `X-Api-Key: API_KEY_COPIED_FROM_THE_USER_DETAIL_VIEW`

<a name="section-2"></a>
## HMAC Authentication

The most secure method. You need to create API User (Administration > API Users) with HMAC authentication method. Apply needed role to the user to restrict or grand an access.
##
Authentication header: `X-Hmac-Authorization: " + base64Encode(apiKey  + ':' + hashHmacSha256(method + ' /' + uri , secretKey))`
##
method: `GET, POST, PUT, DELETE`
##
uri: `Person/55723ca056f6ab4c5`

<a name="section-3"></a>
## Basic Authentication

use [Basic Authentication](http://en.wikipedia.org/wiki/Basic_access_authentication). Username and password/token are passed through Authorization header encoded in base64
##
Authentication header: `Authorization: Basic " + base64Encode(username + ':' + password)`
##
