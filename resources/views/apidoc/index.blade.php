<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>API Reference</title>

    <link rel="stylesheet" href="{{ asset('/docs/css/style.css') }}" />
    <script src="{{ asset('/docs/js/all.js') }}"></script>


          <script>
        $(function() {
            setupLanguages(["javascript"]);
        });
      </script>
      </head>

  <body class="">
    <a href="#" id="nav-button">
      <span>
        NAV
        <img src="/docs/images/navbar.png" />
      </span>
    </a>
    <div class="tocify-wrapper">
        <img src="/docs/images/logo.png" />
                    <div class="lang-selector">
                                  <a href="#" data-language-name="javascript">javascript</a>
                            </div>
                            <div class="search">
              <input type="text" class="search" id="input-search" placeholder="Search">
            </div>
            <ul class="search-results"></ul>
              <div id="toc">
      </div>
                    <ul class="toc-footer">
                                  <li><a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a></li>
                            </ul>
            </div>
    <div class="page-wrapper">
      <div class="dark-box"></div>
      <div class="content">
          <!-- START_INFO -->
<h1>Info</h1>
<p>Welcome to the generated API reference.
<a href="{{ route("apidoc.json") }}">Get Postman Collection</a></p>
<!-- END_INFO -->
<h1>general</h1>
<!-- START_2e1c96dcffcfe7e0eb58d6408f1d619e -->
<h2>api/auth/register</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/auth/register</code></p>
<!-- END_2e1c96dcffcfe7e0eb58d6408f1d619e -->
<!-- START_a925a8d22b3615f12fca79456d286859 -->
<h2>Get a JWT token via given credentials.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/auth/login</code></p>
<!-- END_a925a8d22b3615f12fca79456d286859 -->
<!-- START_19ff1b6f8ce19d3c444e9b518e8f7160 -->
<h2>Log the user out (Invalidate the token)</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/auth/logout</code></p>
<!-- END_19ff1b6f8ce19d3c444e9b518e8f7160 -->
<!-- START_994af8f47e3039ba6d6d67c09dd9e415 -->
<h2>Refresh a token.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/auth/refresh</code></p>
<!-- END_994af8f47e3039ba6d6d67c09dd9e415 -->
<!-- START_a47210337df3b4ba0df697c115ba0c1e -->
<h2>Get the authenticated User</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/auth/me</code></p>
<!-- END_a47210337df3b4ba0df697c115ba0c1e -->
<!-- START_cda0becb36401fb1c71b86d1c6b198f5 -->
<h2>A List of treasury payments</h2>
<p>Shows a paginated list of payments</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/treasury"
);

let params = {
    "count": "17",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/treasury</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>count</code></td>
<td>optional</td>
<td>int The number of records to return. Example 10</td>
</tr>
</tbody>
</table>
<!-- END_cda0becb36401fb1c71b86d1c6b198f5 -->
<!-- START_a6dda7fc13b5d078d1b0e4857c5b9cd3 -->
<h2>Store a newly created Treasury record.</h2>
<p>Store a new Treasury payment  record</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/treasury</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>date</code></td>
<td>string</td>
<td>required</td>
<td>The date of the payment.</td>
</tr>
<tr>
<td><code>payment_number</code></td>
<td>string</td>
<td>required</td>
<td>The payment number.</td>
</tr>
<tr>
<td><code>payer_code</code></td>
<td>string</td>
<td>required</td>
<td>The Payer Code.</td>
</tr>
<tr>
<td><code>mother_ministry</code></td>
<td>string</td>
<td>required</td>
<td>The Mother Ministry.</td>
</tr>
<tr>
<td><code>organization_name</code></td>
<td>string</td>
<td>required</td>
<td>The Organization Name.</td>
</tr>
<tr>
<td><code>beneficiary_name</code></td>
<td>string</td>
<td>required</td>
<td>The Organization Name.</td>
</tr>
<tr>
<td><code>amount</code></td>
<td>string</td>
<td>required</td>
<td>The Amount Paid.</td>
</tr>
<tr>
<td><code>description</code></td>
<td>string</td>
<td>required</td>
<td>The Payment Description.</td>
</tr>
<tr>
<td><code>irregularities</code></td>
<td>string</td>
<td>required</td>
<td>The Irregularities.</td>
</tr>
</tbody>
</table>
<!-- END_a6dda7fc13b5d078d1b0e4857c5b9cd3 -->
<!-- START_b3e1d61d3e787a654fa7d95391d267ef -->
<h2>Update a Treasury Record</h2>
<p>Update a treasury payment record with specified ID</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/treasury/{}</code></p>
<p><code>PATCH api/treasury/{}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>id</code></td>
<td>required</td>
<td>The ID of the treasury record /{id}.</td>
</tr>
</tbody>
</table>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>date</code></td>
<td>string</td>
<td>required</td>
<td>The date of the payment.</td>
</tr>
<tr>
<td><code>payment_number</code></td>
<td>string</td>
<td>required</td>
<td>The payment number.</td>
</tr>
<tr>
<td><code>payer_code</code></td>
<td>string</td>
<td>required</td>
<td>The Payer Code.</td>
</tr>
<tr>
<td><code>mother_ministry</code></td>
<td>string</td>
<td>required</td>
<td>The Mother Ministry.</td>
</tr>
<tr>
<td><code>organization_name</code></td>
<td>string</td>
<td>required</td>
<td>The Organization Name.</td>
</tr>
<tr>
<td><code>beneficiary_name</code></td>
<td>string</td>
<td>required</td>
<td>The Organization Name.</td>
</tr>
<tr>
<td><code>amount</code></td>
<td>string</td>
<td>required</td>
<td>The Amount Paid.</td>
</tr>
<tr>
<td><code>description</code></td>
<td>string</td>
<td>required</td>
<td>The Payment Description.</td>
</tr>
<tr>
<td><code>irregularities</code></td>
<td>string</td>
<td>required</td>
<td>The Irregularities.</td>
</tr>
</tbody>
</table>
<!-- END_b3e1d61d3e787a654fa7d95391d267ef -->
<!-- START_53b19d66da8141ad5c4d769f82eaae06 -->
<h2>Delete a Treasury Record</h2>
<p>Delete a treasury payment record with specified ID</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/treasury/{}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>id</code></td>
<td>required</td>
<td>The ID of the treasury record /{id}.</td>
</tr>
</tbody>
</table>
<!-- END_53b19d66da8141ad5c4d769f82eaae06 -->
      </div>
      <div class="dark-box">
                        <div class="lang-selector">
                                    <a href="#" data-language-name="javascript">javascript</a>
                              </div>
                </div>
    </div>
  </body>
</html>