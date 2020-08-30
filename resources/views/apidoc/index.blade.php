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
<h1>Analytics</h1>
<!-- START_89861cf53d9d716fe328925cb76bd9cf -->
<h2>Statistics Overview</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/insight/overview</code></p>
<!-- END_89861cf53d9d716fe328925cb76bd9cf -->
<!-- START_8f8ff1af4f71960ec9a73c2f3ec74d6a -->
<h2>Personal Account payments</h2>
<p>Payments to individual personal accounts</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/payments/personal-accounts"
);

let params = {
    "count": "2",
    "page": "10",
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
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/payments/personal-accounts</code></p>
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
<td>int The number of records to return. Example 25</td>
</tr>
<tr>
<td><code>page</code></td>
<td>optional</td>
<td>int The page of the records. Example 5</td>
</tr>
</tbody>
</table>
<!-- END_8f8ff1af4f71960ec9a73c2f3ec74d6a -->
<!-- START_dbb5ffcd152ecd80c252af94db0f0177 -->
<h2>Duplicate Payments to same Beneficiary</h2>
<p>Instances where several payments were made on the same day to the same beneficiary</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/payments/multiple"
);

let params = {
    "count": "13",
    "page": "10",
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
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/payments/multiple</code></p>
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
<tr>
<td><code>page</code></td>
<td>optional</td>
<td>int The page of the records . Example 2</td>
</tr>
</tbody>
</table>
<!-- END_dbb5ffcd152ecd80c252af94db0f0177 -->
<!-- START_a4b21350dd2d752c6c1d0b05d432ab56 -->
<h2>Payments without names</h2>
<p>Identifying payments amounts which do not indicate ministry name, organization, and beneficiary name</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/payments/without-names"
);

let params = {
    "count": "2",
    "category": "earum",
    "page": "14",
    "start_date": "quae",
    "search_term": "at",
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
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/payments/without-names</code></p>
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
<tr>
<td><code>category</code></td>
<td>optional</td>
<td>string Narrow result down to category. Example beneficiary_name,organization_name,mother_ministry</td>
</tr>
<tr>
<td><code>page</code></td>
<td>optional</td>
<td>int The page of the records. Example 3</td>
</tr>
<tr>
<td><code>start_date</code></td>
<td>optional</td>
<td>string Start Date. Example 2018-09-27</td>
</tr>
<tr>
<td><code>search_term</code></td>
<td>optional</td>
<td>string Narrow Result down by a search term. Example Youths society</td>
</tr>
</tbody>
</table>
<!-- END_a4b21350dd2d752c6c1d0b05d432ab56 -->
<h1>Temporary Treasury</h1>
<!-- START_93a5c4f104af761a16ea70a7cfac2ba4 -->
<h2>A List of temporary treasury payments records</h2>
<p>Shows a paginated list of payments records gotten by the data crawler</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/temporary-treasury"
);

let params = {
    "count": "11",
    "page": "16",
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
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/temporary-treasury</code></p>
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
<tr>
<td><code>page</code></td>
<td>optional</td>
<td>int The page. Example 2</td>
</tr>
</tbody>
</table>
<!-- END_93a5c4f104af761a16ea70a7cfac2ba4 -->
<!-- START_5d60dad118b28cf677ca9b0eddfc93b5 -->
<h2>Delete a Treasury Record</h2>
<p>Delete a treasury payment record with specified ID</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/temporary-treasury/eos"
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
<p><code>DELETE api/temporary-treasury/{id}</code></p>
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
<!-- END_5d60dad118b28cf677ca9b0eddfc93b5 -->
<!-- START_21342789178e1df1676e11930c77ff69 -->
<h2>Get a single temporary treasury record.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/temporary-treasury/labore"
);

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
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/temporary-treasury/{id}</code></p>
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
<!-- END_21342789178e1df1676e11930c77ff69 -->
<!-- START_68374d2f6605db9dc65ad9968dd3cf16 -->
<h2>Update a Temporary Treasury Record</h2>
<p>Update a treasury payment record with specified ID</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/temporary-treasury/itaque"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "date": "nulla",
    "payment_number": "illo",
    "payer_code": 7,
    "mother_ministry": "placeat",
    "organization_name": "eos",
    "beneficiary_name": "id",
    "amount": 10,
    "description": "ut",
    "irregularities": "et"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/temporary-treasury/{id}</code></p>
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
<td>integer</td>
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
<td>integer</td>
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
<!-- END_68374d2f6605db9dc65ad9968dd3cf16 -->
<!-- START_ac434efce8b44dde57e3a2611ffb147b -->
<h2>Accept a Temporary Treasury Record</h2>
<p>Accept a crawled data into the main database</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/temporary-treasury/consequatur/accept"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "date": "est",
    "payment_number": "reiciendis",
    "payer_code": 2,
    "mother_ministry": "ex",
    "organization_name": "ad",
    "beneficiary_name": "alias",
    "amount": 2,
    "description": "veniam",
    "irregularities": "tempore"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/temporary-treasury/{id}/accept</code></p>
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
<td>integer</td>
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
<td>integer</td>
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
<!-- END_ac434efce8b44dde57e3a2611ffb147b -->
<!-- START_5fb30344d0af4a340fac351230270a80 -->
<h2>Decline a Temporary Treasury Record</h2>
<p>Decline a crawled data into the main database</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/temporary-treasury/sint/decline"
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
<p><code>POST api/temporary-treasury/{id}/decline</code></p>
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
<!-- END_5fb30344d0af4a340fac351230270a80 -->
<h1>Treasury</h1>
<!-- START_3450bc278f8c10a3c74e489fe38190ba -->
<h2>Get Payments to a Beneficiary on a particular date</h2>
<p>Get Payments to a Beneficiary on a particular date</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/payments/on-date"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "beneficiary_name": "est",
    "date": "et"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/payments/on-date</code></p>
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
<td><code>beneficiary_name</code></td>
<td>string</td>
<td>required</td>
<td>Beneficiary Name.</td>
</tr>
<tr>
<td><code>date</code></td>
<td>string</td>
<td>required</td>
<td>The payment date.</td>
</tr>
</tbody>
</table>
<!-- END_3450bc278f8c10a3c74e489fe38190ba -->
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
    "count": "2",
    "page": "5",
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
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
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
<tr>
<td><code>page</code></td>
<td>optional</td>
<td>int The page of the records . Example 2</td>
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
    "date": "et",
    "payment_number": "debitis",
    "payer_code": 2,
    "mother_ministry": "nobis",
    "organization_name": "at",
    "beneficiary_name": "velit",
    "amount": 7,
    "description": "sunt",
    "irregularities": "delectus"
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
<td>integer</td>
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
<td>integer</td>
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
<!-- START_58db04038825b87eab3adcc7f2c86597 -->
<h2>Search for treasury payments</h2>
<p>Shows a paginated list of search result</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/treasury/search"
);

let params = {
    "search_term": "officiis",
    "category": "velit",
    "start_date": "quibusdam",
    "end_date": "est",
    "count": "14",
    "page": "19",
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
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/treasury/search</code></p>
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
<td><code>search_term</code></td>
<td>optional</td>
<td>string Search term. Example ajaokuta</td>
</tr>
<tr>
<td><code>category</code></td>
<td>optional</td>
<td>string Narrow result down to category. Example beneficiary_name,organization_name,mother_ministry</td>
</tr>
<tr>
<td><code>start_date</code></td>
<td>optional</td>
<td>string Start Date. Example 2018-09-27</td>
</tr>
<tr>
<td><code>end_date</code></td>
<td>optional</td>
<td>string End Date. Example 2018-10-27</td>
</tr>
<tr>
<td><code>count</code></td>
<td>optional</td>
<td>int The number of records to return. Example 10</td>
</tr>
<tr>
<td><code>page</code></td>
<td>optional</td>
<td>int The page of the records . Example 2</td>
</tr>
</tbody>
</table>
<!-- END_58db04038825b87eab3adcc7f2c86597 -->
<!-- START_277d091d9cc2a290cda3e75048f53673 -->
<h2>Delete a Treasury Record</h2>
<p>Delete a treasury payment record with specified ID</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/treasury/voluptatibus"
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
<p><code>DELETE api/treasury/{id}</code></p>
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
<!-- END_277d091d9cc2a290cda3e75048f53673 -->
<!-- START_28c7b7795dead597eef42bd1e502375f -->
<h2>Get a single treasury record.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/treasury/eos"
);

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
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/treasury/{id}</code></p>
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
<!-- END_28c7b7795dead597eef42bd1e502375f -->
<!-- START_aa618d7138b31542c5d0099fc7dcec2d -->
<h2>Update a Treasury Record</h2>
<p>Update a treasury payment record with specified ID</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/treasury/natus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "date": "eum",
    "payment_number": "magnam",
    "payer_code": 15,
    "mother_ministry": "distinctio",
    "organization_name": "neque",
    "beneficiary_name": "sunt",
    "amount": 16,
    "description": "voluptatum",
    "irregularities": "autem"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/treasury/{id}</code></p>
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
<td>integer</td>
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
<td>integer</td>
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
<!-- END_aa618d7138b31542c5d0099fc7dcec2d -->
<h1>User Management</h1>
<!-- START_4b0d0a6312a175fab4c6aa05b8931502 -->
<h2>Update a User Record</h2>
<p>Update a user with a specified ID</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users/nobis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "aliquam",
    "email": "et"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/users/{id}</code></p>
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
<td>The ID of the user /{id}.</td>
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
<td><code>name</code></td>
<td>string</td>
<td>required</td>
<td>The name of the user.</td>
</tr>
<tr>
<td><code>email</code></td>
<td>string</td>
<td>required</td>
<td>The user email.</td>
</tr>
</tbody>
</table>
<!-- END_4b0d0a6312a175fab4c6aa05b8931502 -->
<!-- START_fceddd82d8c88376fcee403bd01f165a -->
<h2>Delete and Admin User</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users/fugit"
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
<p><code>DELETE api/users/{id}</code></p>
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
<td>The ID of the user /{id}.</td>
</tr>
</tbody>
</table>
<!-- END_fceddd82d8c88376fcee403bd01f165a -->
<!-- START_2e1c96dcffcfe7e0eb58d6408f1d619e -->
<h2>Register an Admin User</h2>
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

let body = {
    "name": "voluptatem",
    "email": "consequuntur",
    "password": "est",
    "password_repeat": "cum"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/auth/register</code></p>
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
<td><code>name</code></td>
<td>string</td>
<td>required</td>
<td>The Name of the user.</td>
</tr>
<tr>
<td><code>email</code></td>
<td>string</td>
<td>required</td>
<td>The Email of the user.</td>
</tr>
<tr>
<td><code>password</code></td>
<td>string</td>
<td>required</td>
<td>The Password of the User.</td>
</tr>
<tr>
<td><code>password_repeat</code></td>
<td>string</td>
<td>required</td>
<td>Repeat User password.</td>
</tr>
</tbody>
</table>
<!-- END_2e1c96dcffcfe7e0eb58d6408f1d619e -->
<!-- START_a925a8d22b3615f12fca79456d286859 -->
<h2>Login an Admin User</h2>
<p>Get a JWT token via given credentials.</p>
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

let body = {
    "email": "nam",
    "password": "autem"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/auth/login</code></p>
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
<td><code>email</code></td>
<td>string</td>
<td>required</td>
<td>The Email of the user.</td>
</tr>
<tr>
<td><code>password</code></td>
<td>string</td>
<td>required</td>
<td>The Password of the User.</td>
</tr>
</tbody>
</table>
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
<!-- START_fc1e4f6a697e3c48257de845299b71d5 -->
<h2>Get a list of all users in the database</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/users</code></p>
<!-- END_fc1e4f6a697e3c48257de845299b71d5 -->
<h1>general</h1>
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
      </div>
      <div class="dark-box">
                        <div class="lang-selector">
                                    <a href="#" data-language-name="javascript">javascript</a>
                              </div>
                </div>
    </div>
  </body>
</html>