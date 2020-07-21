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
## api/auth/register
> Example request:

```javascript
const url = new URL(
    "http://localhost:8000/api/auth/register"
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
`POST api/auth/register`


<!-- END_2e1c96dcffcfe7e0eb58d6408f1d619e -->

<!-- START_a925a8d22b3615f12fca79456d286859 -->
## Get a JWT token via given credentials.

> Example request:

```javascript
const url = new URL(
    "http://localhost:8000/api/auth/login"
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
`POST api/auth/login`


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
    "count": "17",
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


> Example response (200):

```json
{
    "treasuries": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "date": "2018-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2018,
                "payment_number": "1000513412-10",
                "payer_code": 116005001,
                "mother_ministry": "MINISTRY OF DEFENCE",
                "organization_name": "NIGERIAN AIRFORCE",
                "beneficiary_name": "NAF 330 NAF STATION",
                "amount": 92692172.680000007152557373046875,
                "description": "Sep 18 PE",
                "irregularities": "",
                "created_at": "2020-06-08T12:30:13.000000Z",
                "updated_at": "2020-06-08T12:30:13.000000Z"
            },
            {
                "id": 2,
                "date": "2018-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2018,
                "payment_number": "1000513412-11",
                "payer_code": 116005001,
                "mother_ministry": "MINISTRY OF DEFENCE",
                "organization_name": "NIGERIAN AIRFORCE",
                "beneficiary_name": "NAF AIR FORCE INSTITUTE OF TECHNOLOGY",
                "amount": 31643099.67000000178813934326171875,
                "description": "Sep 18 PE",
                "irregularities": "",
                "created_at": "2020-06-08T12:30:13.000000Z",
                "updated_at": "2020-06-08T12:30:13.000000Z"
            },
            {
                "id": 3,
                "date": "2018-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2018,
                "payment_number": "1000513412-2",
                "payer_code": 116005001,
                "mother_ministry": "MINISTRY OF DEFENCE",
                "organization_name": "NIGERIAN AIRFORCE",
                "beneficiary_name": "NAF SPECIAL OPERATIONS COMMAND",
                "amount": 183120196.5999999940395355224609375,
                "description": "Sep 18 PE",
                "irregularities": "",
                "created_at": "2020-06-08T12:30:14.000000Z",
                "updated_at": "2020-06-08T12:30:14.000000Z"
            },
            {
                "id": 4,
                "date": "2018-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2018,
                "payment_number": "1000513412-3",
                "payer_code": 116005001,
                "mother_ministry": "MINISTRY OF DEFENCE",
                "organization_name": "NIGERIAN AIRFORCE",
                "beneficiary_name": "NAF MOBILITY COMMAND",
                "amount": 243931339.300000011920928955078125,
                "description": "Sep 18 PE",
                "irregularities": "",
                "created_at": "2020-06-08T12:30:14.000000Z",
                "updated_at": "2020-06-08T12:30:14.000000Z"
            },
            {
                "id": 5,
                "date": "2018-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2018,
                "payment_number": "1000513412-4",
                "payer_code": 116005001,
                "mother_ministry": "MINISTRY OF DEFENCE",
                "organization_name": "NIGERIAN AIRFORCE",
                "beneficiary_name": "NAF TRAINING COMMAND",
                "amount": 696779122.7000000476837158203125,
                "description": "Sep 18 PE",
                "irregularities": "",
                "created_at": "2020-06-08T12:30:14.000000Z",
                "updated_at": "2020-06-08T12:30:14.000000Z"
            },
            {
                "id": 6,
                "date": "2018-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2018,
                "payment_number": "1000513412-5",
                "payer_code": 116005001,
                "mother_ministry": "MINISTRY OF DEFENCE",
                "organization_name": "NIGERIAN AIRFORCE",
                "beneficiary_name": "NIGERIAN AIR FORCE NAF GROUND TRAINING COMMAND",
                "amount": 184255012.9000000059604644775390625,
                "description": "Sep 18 PE",
                "irregularities": "",
                "created_at": "2020-06-08T12:30:14.000000Z",
                "updated_at": "2020-06-08T12:30:14.000000Z"
            },
            {
                "id": 7,
                "date": "2018-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2018,
                "payment_number": "1000513412-6",
                "payer_code": 116005001,
                "mother_ministry": "MINISTRY OF DEFENCE",
                "organization_name": "NIGERIAN AIRFORCE",
                "beneficiary_name": "NAF LOGISTICS COMMAND",
                "amount": 211910891.699999988079071044921875,
                "description": "Sep 18 PE",
                "irregularities": "",
                "created_at": "2020-06-08T12:30:15.000000Z",
                "updated_at": "2020-06-08T12:30:15.000000Z"
            },
            {
                "id": 8,
                "date": "2018-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2018,
                "payment_number": "1000513412-7",
                "payer_code": 116005001,
                "mother_ministry": "MINISTRY OF DEFENCE",
                "organization_name": "NIGERIAN AIRFORCE",
                "beneficiary_name": "NAF 103 PAY AND ACCOUNTING GROUP",
                "amount": 1089820597,
                "description": "Sep 18 PE",
                "irregularities": "",
                "created_at": "2020-06-08T12:30:15.000000Z",
                "updated_at": "2020-06-08T12:30:15.000000Z"
            },
            {
                "id": 9,
                "date": "2018-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2018,
                "payment_number": "1000513412-8",
                "payer_code": 116005001,
                "mother_ministry": "MINISTRY OF DEFENCE",
                "organization_name": "NIGERIAN AIRFORCE",
                "beneficiary_name": "NAF 106 NIGERIAN AIR FORCE CAMP",
                "amount": 546748648.89999997615814208984375,
                "description": "Sep 18 PE",
                "irregularities": "",
                "created_at": "2020-06-08T12:30:15.000000Z",
                "updated_at": "2020-06-08T12:30:15.000000Z"
            },
            {
                "id": 10,
                "date": "2018-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2018,
                "payment_number": "1000513412-9",
                "payer_code": 116005001,
                "mother_ministry": "MINISTRY OF DEFENCE",
                "organization_name": "NIGERIAN AIRFORCE",
                "beneficiary_name": "NAF 107 NIGERIAN AIR FORCE CAMP",
                "amount": 155292322.9000000059604644775390625,
                "description": "Sep 18 PE",
                "irregularities": "",
                "created_at": "2020-06-08T12:30:16.000000Z",
                "updated_at": "2020-06-08T12:30:16.000000Z"
            }
        ],
        "first_page_url": "http:\/\/localhost\/api\/treasury?page=1",
        "from": 1,
        "last_page": 9974,
        "last_page_url": "http:\/\/localhost\/api\/treasury?page=9974",
        "next_page_url": "http:\/\/localhost\/api\/treasury?page=2",
        "path": "http:\/\/localhost\/api\/treasury",
        "per_page": 10,
        "prev_page_url": null,
        "to": 10,
        "total": 99740
    }
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
    "date": "saepe",
    "payment_number": "aut",
    "payer_code": "possimus",
    "mother_ministry": "dolorum",
    "organization_name": "facere",
    "beneficiary_name": "dicta",
    "amount": "qui",
    "description": "iusto",
    "irregularities": "sint"
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
        `payer_code` | string |  required  | The Payer Code.
        `mother_ministry` | string |  required  | The Mother Ministry.
        `organization_name` | string |  required  | The Organization Name.
        `beneficiary_name` | string |  required  | The Organization Name.
        `amount` | string |  required  | The Amount Paid.
        `description` | string |  required  | The Payment Description.
        `irregularities` | string |  required  | The Irregularities.
    
<!-- END_a6dda7fc13b5d078d1b0e4857c5b9cd3 -->

<!-- START_b3e1d61d3e787a654fa7d95391d267ef -->
## Update a Treasury Record

Update a treasury payment record with specified ID

> Example request:

```javascript
const url = new URL(
    "http://localhost:8000/api/treasury/{}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "date": "qui",
    "payment_number": "qui",
    "payer_code": "in",
    "mother_ministry": "amet",
    "organization_name": "tempore",
    "beneficiary_name": "vel",
    "amount": "velit",
    "description": "aut",
    "irregularities": "a"
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
`PUT api/treasury/{}`

`PATCH api/treasury/{}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the treasury record /{id}.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `date` | string |  required  | The date of the payment.
        `payment_number` | string |  required  | The payment number.
        `payer_code` | string |  required  | The Payer Code.
        `mother_ministry` | string |  required  | The Mother Ministry.
        `organization_name` | string |  required  | The Organization Name.
        `beneficiary_name` | string |  required  | The Organization Name.
        `amount` | string |  required  | The Amount Paid.
        `description` | string |  required  | The Payment Description.
        `irregularities` | string |  required  | The Irregularities.
    
<!-- END_b3e1d61d3e787a654fa7d95391d267ef -->

<!-- START_53b19d66da8141ad5c4d769f82eaae06 -->
## Delete a Treasury Record

Delete a treasury payment record with specified ID

> Example request:

```javascript
const url = new URL(
    "http://localhost:8000/api/treasury/{}"
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
`DELETE api/treasury/{}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the treasury record /{id}.

<!-- END_53b19d66da8141ad5c4d769f82eaae06 -->


