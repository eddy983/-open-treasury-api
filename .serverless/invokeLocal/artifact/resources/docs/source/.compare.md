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

#general


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
    "name": "aspernatur",
    "email": "reprehenderit",
    "password": "inventore",
    "password_repeat": "sapiente"
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
    "email": "nobis",
    "password": "omnis"
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

<!-- START_cda0becb36401fb1c71b86d1c6b198f5 -->
## A List of treasury payments

Shows a paginated list of payments

> Example request:

```javascript
const url = new URL(
    "http://localhost:8000/api/treasury"
);

let params = {
    "count": "6",
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
    "date": "sed",
    "payment_number": "qui",
    "payer_code": 10,
    "mother_ministry": "tenetur",
    "organization_name": "quos",
    "beneficiary_name": "sed",
    "amount": 10,
    "description": "rerum",
    "irregularities": "dicta"
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

<!-- START_277d091d9cc2a290cda3e75048f53673 -->
## Delete a Treasury Record

Delete a treasury payment record with specified ID

> Example request:

```javascript
const url = new URL(
    "http://localhost:8000/api/treasury/molestiae"
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
    "http://localhost:8000/api/treasury/rerum"
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
    "http://localhost:8000/api/treasury/doloremque"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "date": "ad",
    "payment_number": "nisi",
    "payer_code": 5,
    "mother_ministry": "optio",
    "organization_name": "ducimus",
    "beneficiary_name": "nihil",
    "amount": 20,
    "description": "sed",
    "irregularities": "minus"
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

<!-- START_a4b21350dd2d752c6c1d0b05d432ab56 -->
## Payments without names

Identifying payments amounts which do not indicate ministry name, organization, and beneficiary name

> Example request:

```javascript
const url = new URL(
    "http://localhost:8000/api/payments/without-names"
);

let params = {
    "count": "8",
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

<!-- END_a4b21350dd2d752c6c1d0b05d432ab56 -->


