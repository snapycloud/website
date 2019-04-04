# CRUD Operations

---

- [List Entities](#section-1)
- [Read Entity](#section-2)
- [Create Entity](#section-3)
- [Update Entity](#section-4)
- [Delete Entity](#section-5)

<a name="section-1"></a>
## List Entities

`GET {entityType}`

> GET parameters:

`offset` : (int) offset

`maxSize` : (int) max size

`where` : (array) filters

`sortBy` : (string) field to sort by


```php
GET http://uuidcloud.domain/api/v1/Person?offset=0&maxSize=10
```

```php
{
  "list": [... array of records...],
  "total": {totalCountOfRecords}
}
```

<a name="section-2"></a>
## Read Entity
```php
GET http://uuidcloud.domain/api/v1/{entityType}/{id}
```

```php
{
  "assignedUserId": "1",
  "... attribute of record..."
}
```

<a name="section-3"></a>
## Update Entity
```php
PUT http://uuidcloud.domain/api/v1/{entityType}/{id}
```
Payload: Object of entity attributes needed to be changed

Returns attributes in JSON object.
## Payload
```php
{
  "assignedUserId": "1",
  "... attribute of record..."
}
```

<a name="section-4"></a>
## Delete Entity
```php
DELETE http://uuidcloud.domain/api/v1/{entityType}/{id}
```

```php
Example: DELETE http://uuidcloud.domain/api/v1/Person/5564764442a6d024c
```



