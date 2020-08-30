---
title: API Reference

language_tabs:
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost:8000/docs/collection.json)

<!-- END_INFO -->

#Analytics


<!-- START_89861cf53d9d716fe328925cb76bd9cf -->
## Statistics Overview

> Example request:

```javascript
const url = new URL(
    "http://localhost:8000/api/insight/overview"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/insight/overview`


<!-- END_89861cf53d9d716fe328925cb76bd9cf -->

<!-- START_8f8ff1af4f71960ec9a73c2f3ec74d6a -->
## Personal Account payments

Payments to individual personal accounts

> Example request:

```javascript
const url = new URL(
    "http://localhost:8000/api/payments/personal-accounts"
);

let params = {
    "count": "10",
    "page": "5",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/payments/personal-accounts`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `count` |  optional  | int The number of records to return. Example 25
    `page` |  optional  | int The page of the records. Example 5

<!-- END_8f8ff1af4f71960ec9a73c2f3ec74d6a -->

<!-- START_dbb5ffcd152ecd80c252af94db0f0177 -->
## Duplicate Payments to same Beneficiary

Instances where several payments were made on the same day to the same beneficiary

> Example request:

```javascript
const url = new URL(
    "http://localhost:8000/api/payments/multiple"
);

let params = {
    "count": "2",
    "page": "12",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/payments/multiple`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `count` |  optional  | int The number of records to return. Example 10
    `page` |  optional  | int The page of the records . Example 2

<!-- END_dbb5ffcd152ecd80c252af94db0f0177 -->

<!-- START_a4b21350dd2d752c6c1d0b05d432ab56 -->
## Payments without names

Identifying payments amounts which do not indicate ministry name, organization, and beneficiary name

> Example request:

```javascript
const url = new URL(
    "http://localhost:8000/api/payments/without-names"
);

let params = {
    "count": "12",
    "category": "perspiciatis",
    "page": "2",
    "start_date": "id",
    "search_term": "fugit",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/payments/without-names`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `count` |  optional  | int The number of records to return. Example 10
    `category` |  optional  | string Narrow result down to category. Example beneficiary_name,organization_name,mother_ministry
    `page` |  optional  | int The page of the records. Example 3
    `start_date` |  optional  | string Start Date. Example 2018-09-27
    `search_term` |  optional  | string Narrow Result down by a search term. Example Youths society

<!-- END_a4b21350dd2d752c6c1d0b05d432ab56 -->

#Temporary Treasury


<!-- START_93a5c4f104af761a16ea70a7cfac2ba4 -->
## A List of temporary treasury payments records

Shows a paginated list of payments records gotten by the data crawler

> Example request:

```javascript
const url = new URL(
    "http://localhost:8000/api/temporary-treasury"
);

let params = {
    "count": "19",
    "page": "5",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/temporary-treasury`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `count` |  optional  | int The number of records to return. Example 10
    `page` |  optional  | int The page. Example 2

<!-- END_93a5c4f104af761a16ea70a7cfac2ba4 -->

<!-- START_5d60dad118b28cf677ca9b0eddfc93b5 -->
## Delete a Treasury Record

Delete a treasury payment record with specified ID

> Example request:

```javascript
const url = new URL(
    "http://localhost:8000/api/temporary-treasury/doloremque"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/temporary-treasury/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the treasury record /{id}.

<!-- END_5d60dad118b28cf677ca9b0eddfc93b5 -->

<!-- START_21342789178e1df1676e11930c77ff69 -->
## Get a single temporary treasury record.

> Example request:

```javascript
const url = new URL(
    "http://localhost:8000/api/temporary-treasury/qui"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/temporary-treasury/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the treasury record /{id}.

<!-- END_21342789178e1df1676e11930c77ff69 -->

<!-- START_68374d2f6605db9dc65ad9968dd3cf16 -->
## Update a Temporary Treasury Record

Update a treasury payment record with specified ID

> Example request:

```javascript
const url = new URL(
    "http://localhost:8000/api/temporary-treasury/eos"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "date": "libero",
    "payment_number": "tempore",
    "payer_code": 2,
    "mother_ministry": "voluptate",
    "organization_name": "nemo",
    "beneficiary_name": "rem",
    "amount": 7,
    "description": "et",
    "irregularities": "quia"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/temporary-treasury/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the treasury record /{id}.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `date` | string |  required  | The date of the payment.
        `payment_number` | string |  required  | The payment number.
        `payer_code` | integer |  required  | The Payer Code.
        `mother_ministry` | string |  required  | The Mother Ministry.
        `organization_name` | string |  required  | The Organization Name.
        `beneficiary_name` | string |  required  | The Organization Name.
        `amount` | integer |  required  | The Amount Paid.
        `description` | string |  required  | The Payment Description.
        `irregularities` | string |  required  | The Irregularities.
    
<!-- END_68374d2f6605db9dc65ad9968dd3cf16 -->

<!-- START_ac434efce8b44dde57e3a2611ffb147b -->
## Accept a Temporary Treasury Record

Accept a crawled data into the main database

> Example request:

```javascript
const url = new URL(
    "http://localhost:8000/api/temporary-treasury/illo/accept"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "date": "velit",
    "payment_number": "est",
    "payer_code": 15,
    "mother_ministry": "aut",
    "organization_name": "et",
    "beneficiary_name": "consequatur",
    "amount": 4,
    "description": "dolorem",
    "irregularities": "incidunt"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/temporary-treasury/{id}/accept`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the treasury record /{id}.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `date` | string |  required  | The date of the payment.
        `payment_number` | string |  required  | The payment number.
        `payer_code` | integer |  required  | The Payer Code.
        `mother_ministry` | string |  required  | The Mother Ministry.
        `organization_name` | string |  required  | The Organization Name.
        `beneficiary_name` | string |  required  | The Organization Name.
        `amount` | integer |  required  | The Amount Paid.
        `description` | string |  required  | The Payment Description.
        `irregularities` | string |  required  | The Irregularities.
    
<!-- END_ac434efce8b44dde57e3a2611ffb147b -->

<!-- START_5fb30344d0af4a340fac351230270a80 -->
## Decline a Temporary Treasury Record

Decline a crawled data into the main database

> Example request:

```javascript
const url = new URL(
    "http://localhost:8000/api/temporary-treasury/qui/decline"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/temporary-treasury/{id}/decline`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the treasury record /{id}.

<!-- END_5fb30344d0af4a340fac351230270a80 -->

#Treasury


<!-- START_3450bc278f8c10a3c74e489fe38190ba -->
## Get Payments to a Beneficiary on a particular date

Get Payments to a Beneficiary on a particular date

> Example request:

```javascript
const url = new URL(
    "http://localhost:8000/api/payments/on-date"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "beneficiary_name": "provident",
    "date": "ea"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/payments/on-date`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `beneficiary_name` | string |  required  | Beneficiary Name.
        `date` | string |  required  | The payment date.
    
<!-- END_3450bc278f8c10a3c74e489fe38190ba -->

<!-- START_cda0becb36401fb1c71b86d1c6b198f5 -->
## A List of treasury payments

Shows a paginated list of payments

> Example request:

```javascript
const url = new URL(
    "http://localhost:8000/api/treasury"
);

let params = {
    "count": "13",
    "page": "6",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/treasury`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `count` |  optional  | int The number of records to return. Example 10
    `page` |  optional  | int The page of the records . Example 2

<!-- END_cda0becb36401fb1c71b86d1c6b198f5 -->

<!-- START_a6dda7fc13b5d078d1b0e4857c5b9cd3 -->
## Store a newly created Treasury record.

Store a new Treasury payment  record

> Example request:

```javascript
const url = new URL(
    "http://localhost:8000/api/treasury"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "date": "expedita",
    "payment_number": "nulla",
    "payer_code": 1,
    "mother_ministry": "quibusdam",
    "organization_name": "odio",
    "beneficiary_name": "sapiente",
    "amount": 7,
    "description": "quos",
    "irregularities": "aut"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/treasury`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `date` | string |  required  | The date of the payment.
        `payment_number` | string |  required  | The payment number.
        `payer_code` | integer |  required  | The Payer Code.
        `mother_ministry` | string |  required  | The Mother Ministry.
        `organization_name` | string |  required  | The Organization Name.
        `beneficiary_name` | string |  required  | The Organization Name.
        `amount` | integer |  required  | The Amount Paid.
        `description` | string |  required  | The Payment Description.
        `irregularities` | string |  required  | The Irregularities.
    
<!-- END_a6dda7fc13b5d078d1b0e4857c5b9cd3 -->

<!-- START_58db04038825b87eab3adcc7f2c86597 -->
## Search for treasury payments

Shows a paginated list of search result

> Example request:

```javascript
const url = new URL(
    "http://localhost:8000/api/treasury/search"
);

let params = {
    "search_term": "rerum",
    "category": "quis",
    "start_date": "voluptatum",
    "end_date": "nulla",
    "count": "14",
    "page": "9",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/treasury/search`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `search_term` |  optional  | string Search term. Example ajaokuta
    `category` |  optional  | string Narrow result down to category. Example beneficiary_name,organization_name,mother_ministry
    `start_date` |  optional  | string Start Date. Example 2018-09-27
    `end_date` |  optional  | string End Date. Example 2018-10-27
    `count` |  optional  | int The number of records to return. Example 10
    `page` |  optional  | int The page of the records . Example 2

<!-- END_58db04038825b87eab3adcc7f2c86597 -->

<!-- START_277d091d9cc2a290cda3e75048f53673 -->
## Delete a Treasury Record

Delete a treasury payment record with specified ID

> Example request:

```javascript
const url = new URL(
    "http://localhost:8000/api/treasury/quam"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/treasury/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the treasury record /{id}.

<!-- END_277d091d9cc2a290cda3e75048f53673 -->

<!-- START_28c7b7795dead597eef42bd1e502375f -->
## Get a single treasury record.

> Example request:

```javascript
const url = new URL(
    "http://localhost:8000/api/treasury/autem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/treasury/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the treasury record /{id}.

<!-- END_28c7b7795dead597eef42bd1e502375f -->

<!-- START_aa618d7138b31542c5d0099fc7dcec2d -->
## Update a Treasury Record

Update a treasury payment record with specified ID

> Example request:

```javascript
const url = new URL(
    "http://localhost:8000/api/treasury/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "date": "vel",
    "payment_number": "rerum",
    "payer_code": 20,
    "mother_ministry": "porro",
    "organization_name": "quis",
    "beneficiary_name": "et",
    "amount": 8,
    "description": "autem",
    "irregularities": "sequi"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/treasury/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the treasury record /{id}.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `date` | string |  required  | The date of the payment.
        `payment_number` | string |  required  | The payment number.
        `payer_code` | integer |  required  | The Payer Code.
        `mother_ministry` | string |  required  | The Mother Ministry.
        `organization_name` | string |  required  | The Organization Name.
        `beneficiary_name` | string |  required  | The Organization Name.
        `amount` | integer |  required  | The Amount Paid.
        `description` | string |  required  | The Payment Description.
        `irregularities` | string |  required  | The Irregularities.
    
<!-- END_aa618d7138b31542c5d0099fc7dcec2d -->

#User Management


<!-- START_4b0d0a6312a175fab4c6aa05b8931502 -->
## Update a User Record

Update a user with a specified ID

> Example request:

```javascript
const url = new URL(
    "http://localhost:8000/api/users/ullam"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "consequuntur",
    "email": "voluptas"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/users/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the user /{id}.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | The name of the user.
        `email` | string |  required  | The user email.
    
<!-- END_4b0d0a6312a175fab4c6aa05b8931502 -->

<!-- START_fceddd82d8c88376fcee403bd01f165a -->
## Delete and Admin User

> Example request:

```javascript
const url = new URL(
    "http://localhost:8000/api/users/magnam"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/users/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the user /{id}.

<!-- END_fceddd82d8c88376fcee403bd01f165a -->

<!-- START_2e1c96dcffcfe7e0eb58d6408f1d619e -->
## Register an Admin User

> Example request:

```javascript
const url = new URL(
    "http://localhost:8000/api/auth/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "ipsam",
    "email": "placeat",
    "password": "suscipit",
    "password_repeat": "consequatur"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/auth/register`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | The Name of the user.
        `email` | string |  required  | The Email of the user.
        `password` | string |  required  | The Password of the User.
        `password_repeat` | string |  required  | Repeat User password.
    
<!-- END_2e1c96dcffcfe7e0eb58d6408f1d619e -->

<!-- START_a925a8d22b3615f12fca79456d286859 -->
## Login an Admin User

Get a JWT token via given credentials.

> Example request:

```javascript
const url = new URL(
    "http://localhost:8000/api/auth/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "unde",
    "password": "officia"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/auth/login`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `email` | string |  required  | The Email of the user.
        `password` | string |  required  | The Password of the User.
    
<!-- END_a925a8d22b3615f12fca79456d286859 -->

<!-- START_19ff1b6f8ce19d3c444e9b518e8f7160 -->
## Log the user out (Invalidate the token)

> Example request:

```javascript
const url = new URL(
    "http://localhost:8000/api/auth/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/auth/logout`


<!-- END_19ff1b6f8ce19d3c444e9b518e8f7160 -->

<!-- START_a47210337df3b4ba0df697c115ba0c1e -->
## Get the authenticated User

> Example request:

```javascript
const url = new URL(
    "http://localhost:8000/api/auth/me"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/auth/me`


<!-- END_a47210337df3b4ba0df697c115ba0c1e -->

<!-- START_fc1e4f6a697e3c48257de845299b71d5 -->
## Get a list of all users in the database

> Example request:

```javascript
const url = new URL(
    "http://localhost:8000/api/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/users`


<!-- END_fc1e4f6a697e3c48257de845299b71d5 -->

#general


<!-- START_994af8f47e3039ba6d6d67c09dd9e415 -->
## Refresh a token.

> Example request:

```javascript
const url = new URL(
    "http://localhost:8000/api/auth/refresh"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/auth/refresh`


<!-- END_994af8f47e3039ba6d6d67c09dd9e415 -->


