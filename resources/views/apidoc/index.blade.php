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
    "count": "7",
    "page": "2",
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
    "start_time": "2020-08-11T11:52:21.423169Z",
    "end_time": "2020-08-11T11:52:27.142394Z",
    "payments": {
        "current_page": 2,
        "data": [
            {
                "beneficiary_name": "Trust Funds Pensions Plc",
                "count": 386,
                "number_of_times": 49,
                "result": [
                    {
                        "date": "2018-09-01 00:00:00",
                        "count": 6
                    },
                    {
                        "date": "2018-09-02 00:00:00",
                        "count": 8
                    },
                    {
                        "date": "2018-09-27 00:00:00",
                        "count": 15
                    },
                    {
                        "date": "2018-10-27 00:00:00",
                        "count": 30
                    },
                    {
                        "date": "2018-11-28 00:00:00",
                        "count": 14
                    },
                    {
                        "date": "2018-12-01 00:00:00",
                        "count": 4
                    },
                    {
                        "date": "2018-12-27 00:00:00",
                        "count": 11
                    },
                    {
                        "date": "2018-12-28 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-01-27 00:00:00",
                        "count": 18
                    },
                    {
                        "date": "2019-02-20 00:00:00",
                        "count": 18
                    },
                    {
                        "date": "2019-03-27 00:00:00",
                        "count": 18
                    },
                    {
                        "date": "2019-04-29 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-04-30 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-05-01 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-02 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-03 00:00:00",
                        "count": 6
                    },
                    {
                        "date": "2019-05-08 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-05-17 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-21 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-29 00:00:00",
                        "count": 10
                    },
                    {
                        "date": "2019-06-18 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-06-26 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-06-27 00:00:00",
                        "count": 19
                    },
                    {
                        "date": "2019-07-27 00:00:00",
                        "count": 17
                    },
                    {
                        "date": "2019-08-06 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-08-16 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-08-28 00:00:00",
                        "count": 8
                    },
                    {
                        "date": "2019-08-29 00:00:00",
                        "count": 13
                    },
                    {
                        "date": "2019-09-27 00:00:00",
                        "count": 13
                    },
                    {
                        "date": "2019-09-30 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-03 00:00:00",
                        "count": 7
                    },
                    {
                        "date": "2019-10-04 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-31 00:00:00",
                        "count": 7
                    },
                    {
                        "date": "2019-11-01 00:00:00",
                        "count": 14
                    },
                    {
                        "date": "2019-11-13 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-05 00:00:00",
                        "count": 11
                    },
                    {
                        "date": "2019-12-07 00:00:00",
                        "count": 5
                    },
                    {
                        "date": "2019-12-10 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-12 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-19 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-12-20 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-12-30 00:00:00",
                        "count": 8
                    },
                    {
                        "date": "2019-12-31 00:00:00",
                        "count": 4
                    },
                    {
                        "date": "2020-01-31 00:00:00",
                        "count": 24
                    },
                    {
                        "date": "2020-02-03 00:00:00",
                        "count": 25
                    },
                    {
                        "date": "2020-02-09 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2020-02-12 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2020-03-02 00:00:00",
                        "count": 25
                    },
                    {
                        "date": "2020-03-03 00:00:00",
                        "count": 1
                    }
                ]
            },
            {
                "beneficiary_name": "NHIS",
                "count": 374,
                "number_of_times": 46,
                "result": [
                    {
                        "date": "2018-09-01 00:00:00",
                        "count": 5
                    },
                    {
                        "date": "2018-09-02 00:00:00",
                        "count": 7
                    },
                    {
                        "date": "2018-09-27 00:00:00",
                        "count": 12
                    },
                    {
                        "date": "2018-10-27 00:00:00",
                        "count": 28
                    },
                    {
                        "date": "2018-11-28 00:00:00",
                        "count": 13
                    },
                    {
                        "date": "2018-12-01 00:00:00",
                        "count": 6
                    },
                    {
                        "date": "2018-12-12 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-12-27 00:00:00",
                        "count": 8
                    },
                    {
                        "date": "2019-01-27 00:00:00",
                        "count": 16
                    },
                    {
                        "date": "2019-02-20 00:00:00",
                        "count": 15
                    },
                    {
                        "date": "2019-03-27 00:00:00",
                        "count": 18
                    },
                    {
                        "date": "2019-04-29 00:00:00",
                        "count": 4
                    },
                    {
                        "date": "2019-04-30 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-05-01 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-05-02 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-03 00:00:00",
                        "count": 4
                    },
                    {
                        "date": "2019-05-08 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-17 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-27 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-29 00:00:00",
                        "count": 5
                    },
                    {
                        "date": "2019-06-26 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-06-27 00:00:00",
                        "count": 17
                    },
                    {
                        "date": "2019-07-27 00:00:00",
                        "count": 16
                    },
                    {
                        "date": "2019-08-28 00:00:00",
                        "count": 8
                    },
                    {
                        "date": "2019-08-29 00:00:00",
                        "count": 9
                    },
                    {
                        "date": "2019-09-27 00:00:00",
                        "count": 12
                    },
                    {
                        "date": "2019-10-03 00:00:00",
                        "count": 17
                    },
                    {
                        "date": "2019-10-04 00:00:00",
                        "count": 4
                    },
                    {
                        "date": "2019-10-07 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-10-10 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-11 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-30 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-31 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-11-01 00:00:00",
                        "count": 12
                    },
                    {
                        "date": "2019-11-08 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-12-05 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-12-07 00:00:00",
                        "count": 10
                    },
                    {
                        "date": "2019-12-12 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-19 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-12-20 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-12-30 00:00:00",
                        "count": 6
                    },
                    {
                        "date": "2019-12-31 00:00:00",
                        "count": 10
                    },
                    {
                        "date": "2020-01-31 00:00:00",
                        "count": 29
                    },
                    {
                        "date": "2020-02-03 00:00:00",
                        "count": 26
                    },
                    {
                        "date": "2020-03-02 00:00:00",
                        "count": 26
                    },
                    {
                        "date": "2020-03-03 00:00:00",
                        "count": 1
                    }
                ]
            },
            {
                "beneficiary_name": "HQ NIGERIAN ARMY FINANCE CORPS",
                "count": 367,
                "number_of_times": 41,
                "result": [
                    {
                        "date": "2018-09-03 00:00:00",
                        "count": 10
                    },
                    {
                        "date": "2018-09-23 00:00:00",
                        "count": 17
                    },
                    {
                        "date": "2018-09-27 00:00:00",
                        "count": 8
                    },
                    {
                        "date": "2018-10-28 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-11-07 00:00:00",
                        "count": 17
                    },
                    {
                        "date": "2018-11-13 00:00:00",
                        "count": 17
                    },
                    {
                        "date": "2018-11-28 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2018-12-19 00:00:00",
                        "count": 18
                    },
                    {
                        "date": "2018-12-20 00:00:00",
                        "count": 18
                    },
                    {
                        "date": "2018-12-21 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-01-26 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-02-19 00:00:00",
                        "count": 16
                    },
                    {
                        "date": "2019-02-21 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-03-05 00:00:00",
                        "count": 16
                    },
                    {
                        "date": "2019-03-27 00:00:00",
                        "count": 19
                    },
                    {
                        "date": "2019-03-30 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-04-11 00:00:00",
                        "count": 16
                    },
                    {
                        "date": "2019-04-12 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-04-27 00:00:00",
                        "count": 4
                    },
                    {
                        "date": "2019-05-13 00:00:00",
                        "count": 10
                    },
                    {
                        "date": "2019-05-31 00:00:00",
                        "count": 4
                    },
                    {
                        "date": "2019-06-24 00:00:00",
                        "count": 19
                    },
                    {
                        "date": "2019-06-26 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-07-15 00:00:00",
                        "count": 18
                    },
                    {
                        "date": "2019-07-26 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-08-18 00:00:00",
                        "count": 17
                    },
                    {
                        "date": "2019-08-27 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-09-27 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-10-08 00:00:00",
                        "count": 19
                    },
                    {
                        "date": "2019-10-23 00:00:00",
                        "count": 10
                    },
                    {
                        "date": "2019-10-30 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-11-08 00:00:00",
                        "count": 15
                    },
                    {
                        "date": "2019-11-18 00:00:00",
                        "count": 15
                    },
                    {
                        "date": "2019-12-12 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-12-30 00:00:00",
                        "count": 20
                    },
                    {
                        "date": "2019-12-31 00:00:00",
                        "count": 5
                    },
                    {
                        "date": "2020-02-03 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2020-02-05 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2020-02-06 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2020-02-10 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2020-03-02 00:00:00",
                        "count": 3
                    }
                ]
            },
            {
                "beneficiary_name": "ARM Pension Managers",
                "count": 362,
                "number_of_times": 46,
                "result": [
                    {
                        "date": "2018-09-01 00:00:00",
                        "count": 6
                    },
                    {
                        "date": "2018-09-02 00:00:00",
                        "count": 7
                    },
                    {
                        "date": "2018-09-27 00:00:00",
                        "count": 12
                    },
                    {
                        "date": "2018-10-27 00:00:00",
                        "count": 26
                    },
                    {
                        "date": "2018-11-28 00:00:00",
                        "count": 12
                    },
                    {
                        "date": "2018-12-01 00:00:00",
                        "count": 6
                    },
                    {
                        "date": "2018-12-06 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-12-12 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-12-27 00:00:00",
                        "count": 10
                    },
                    {
                        "date": "2019-01-27 00:00:00",
                        "count": 14
                    },
                    {
                        "date": "2019-02-20 00:00:00",
                        "count": 15
                    },
                    {
                        "date": "2019-03-27 00:00:00",
                        "count": 15
                    },
                    {
                        "date": "2019-04-29 00:00:00",
                        "count": 4
                    },
                    {
                        "date": "2019-04-30 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-05-01 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-02 00:00:00",
                        "count": 4
                    },
                    {
                        "date": "2019-05-03 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-05-08 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-15 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-27 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-05-29 00:00:00",
                        "count": 7
                    },
                    {
                        "date": "2019-06-26 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-06-27 00:00:00",
                        "count": 17
                    },
                    {
                        "date": "2019-07-27 00:00:00",
                        "count": 18
                    },
                    {
                        "date": "2019-08-28 00:00:00",
                        "count": 8
                    },
                    {
                        "date": "2019-08-29 00:00:00",
                        "count": 10
                    },
                    {
                        "date": "2019-09-27 00:00:00",
                        "count": 12
                    },
                    {
                        "date": "2019-09-28 00:00:00",
                        "count": 7
                    },
                    {
                        "date": "2019-10-03 00:00:00",
                        "count": 7
                    },
                    {
                        "date": "2019-10-04 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-10-07 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-30 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-31 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-11-01 00:00:00",
                        "count": 15
                    },
                    {
                        "date": "2019-11-08 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-11-13 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-05 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-12-07 00:00:00",
                        "count": 13
                    },
                    {
                        "date": "2019-12-12 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-12-30 00:00:00",
                        "count": 5
                    },
                    {
                        "date": "2019-12-31 00:00:00",
                        "count": 6
                    },
                    {
                        "date": "2020-01-31 00:00:00",
                        "count": 24
                    },
                    {
                        "date": "2020-02-03 00:00:00",
                        "count": 26
                    },
                    {
                        "date": "2020-02-05 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2020-03-02 00:00:00",
                        "count": 26
                    },
                    {
                        "date": "2020-03-03 00:00:00",
                        "count": 1
                    }
                ]
            },
            {
                "beneficiary_name": "ZEDVANCE LTD",
                "count": 355,
                "number_of_times": 46,
                "result": [
                    {
                        "date": "2018-09-02 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-09-27 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-10-27 00:00:00",
                        "count": 6
                    },
                    {
                        "date": "2018-11-28 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2018-12-01 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2018-12-27 00:00:00",
                        "count": 4
                    },
                    {
                        "date": "2019-01-27 00:00:00",
                        "count": 6
                    },
                    {
                        "date": "2019-02-20 00:00:00",
                        "count": 8
                    },
                    {
                        "date": "2019-03-27 00:00:00",
                        "count": 8
                    },
                    {
                        "date": "2019-04-29 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-04-30 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-02 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-05-03 00:00:00",
                        "count": 5
                    },
                    {
                        "date": "2019-05-27 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-29 00:00:00",
                        "count": 5
                    },
                    {
                        "date": "2019-05-30 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-06-27 00:00:00",
                        "count": 17
                    },
                    {
                        "date": "2019-07-27 00:00:00",
                        "count": 21
                    },
                    {
                        "date": "2019-08-28 00:00:00",
                        "count": 8
                    },
                    {
                        "date": "2019-08-29 00:00:00",
                        "count": 13
                    },
                    {
                        "date": "2019-09-05 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-09-27 00:00:00",
                        "count": 16
                    },
                    {
                        "date": "2019-09-28 00:00:00",
                        "count": 8
                    },
                    {
                        "date": "2019-10-03 00:00:00",
                        "count": 8
                    },
                    {
                        "date": "2019-10-04 00:00:00",
                        "count": 6
                    },
                    {
                        "date": "2019-10-07 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-10-30 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-31 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-11-01 00:00:00",
                        "count": 16
                    },
                    {
                        "date": "2019-11-02 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-11-08 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-11-13 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-05 00:00:00",
                        "count": 10
                    },
                    {
                        "date": "2019-12-07 00:00:00",
                        "count": 12
                    },
                    {
                        "date": "2019-12-12 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-12-19 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-12-20 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-30 00:00:00",
                        "count": 9
                    },
                    {
                        "date": "2019-12-31 00:00:00",
                        "count": 8
                    },
                    {
                        "date": "2020-01-31 00:00:00",
                        "count": 39
                    },
                    {
                        "date": "2020-02-03 00:00:00",
                        "count": 39
                    },
                    {
                        "date": "2020-02-05 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2020-02-09 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2020-02-12 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2020-03-02 00:00:00",
                        "count": 39
                    },
                    {
                        "date": "2020-03-03 00:00:00",
                        "count": 5
                    }
                ]
            },
            {
                "beneficiary_name": "UNSPECIFIED TAX",
                "count": 292,
                "number_of_times": 41,
                "result": [
                    {
                        "date": "2018-09-01 00:00:00",
                        "count": 4
                    },
                    {
                        "date": "2018-09-02 00:00:00",
                        "count": 13
                    },
                    {
                        "date": "2018-09-27 00:00:00",
                        "count": 19
                    },
                    {
                        "date": "2018-10-27 00:00:00",
                        "count": 32
                    },
                    {
                        "date": "2018-11-28 00:00:00",
                        "count": 15
                    },
                    {
                        "date": "2018-12-01 00:00:00",
                        "count": 6
                    },
                    {
                        "date": "2018-12-27 00:00:00",
                        "count": 6
                    },
                    {
                        "date": "2018-12-28 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-01-27 00:00:00",
                        "count": 14
                    },
                    {
                        "date": "2019-02-20 00:00:00",
                        "count": 14
                    },
                    {
                        "date": "2019-03-27 00:00:00",
                        "count": 14
                    },
                    {
                        "date": "2019-04-29 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-04-30 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-05-01 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-03 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-05-08 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-15 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-29 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-06-27 00:00:00",
                        "count": 11
                    },
                    {
                        "date": "2019-07-27 00:00:00",
                        "count": 13
                    },
                    {
                        "date": "2019-08-28 00:00:00",
                        "count": 6
                    },
                    {
                        "date": "2019-08-29 00:00:00",
                        "count": 6
                    },
                    {
                        "date": "2019-09-23 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-09-27 00:00:00",
                        "count": 7
                    },
                    {
                        "date": "2019-10-03 00:00:00",
                        "count": 4
                    },
                    {
                        "date": "2019-10-04 00:00:00",
                        "count": 4
                    },
                    {
                        "date": "2019-10-07 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-10-31 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-11-01 00:00:00",
                        "count": 5
                    },
                    {
                        "date": "2019-11-04 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-11-08 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-11-13 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-12-05 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-12-07 00:00:00",
                        "count": 6
                    },
                    {
                        "date": "2019-12-10 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-12 00:00:00",
                        "count": 4
                    },
                    {
                        "date": "2019-12-30 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-12-31 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2020-01-31 00:00:00",
                        "count": 19
                    },
                    {
                        "date": "2020-02-03 00:00:00",
                        "count": 19
                    },
                    {
                        "date": "2020-03-02 00:00:00",
                        "count": 19
                    }
                ]
            },
            {
                "beneficiary_name": "LAGOS TAX",
                "count": 262,
                "number_of_times": 39,
                "result": [
                    {
                        "date": "2018-09-01 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-09-02 00:00:00",
                        "count": 8
                    },
                    {
                        "date": "2018-09-27 00:00:00",
                        "count": 11
                    },
                    {
                        "date": "2018-10-27 00:00:00",
                        "count": 22
                    },
                    {
                        "date": "2018-11-28 00:00:00",
                        "count": 11
                    },
                    {
                        "date": "2018-12-01 00:00:00",
                        "count": 4
                    },
                    {
                        "date": "2018-12-27 00:00:00",
                        "count": 9
                    },
                    {
                        "date": "2019-01-27 00:00:00",
                        "count": 12
                    },
                    {
                        "date": "2019-02-20 00:00:00",
                        "count": 12
                    },
                    {
                        "date": "2019-03-27 00:00:00",
                        "count": 12
                    },
                    {
                        "date": "2019-04-29 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-04-30 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-05-01 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-02 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-03 00:00:00",
                        "count": 4
                    },
                    {
                        "date": "2019-05-15 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-29 00:00:00",
                        "count": 6
                    },
                    {
                        "date": "2019-05-30 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-06-26 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-06-27 00:00:00",
                        "count": 13
                    },
                    {
                        "date": "2019-07-27 00:00:00",
                        "count": 13
                    },
                    {
                        "date": "2019-08-28 00:00:00",
                        "count": 5
                    },
                    {
                        "date": "2019-08-29 00:00:00",
                        "count": 8
                    },
                    {
                        "date": "2019-09-27 00:00:00",
                        "count": 7
                    },
                    {
                        "date": "2019-10-03 00:00:00",
                        "count": 6
                    },
                    {
                        "date": "2019-10-04 00:00:00",
                        "count": 6
                    },
                    {
                        "date": "2019-10-07 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-10-30 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-31 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-11-01 00:00:00",
                        "count": 11
                    },
                    {
                        "date": "2019-12-05 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-12-07 00:00:00",
                        "count": 4
                    },
                    {
                        "date": "2019-12-19 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-12-20 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-30 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-12-31 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2020-01-31 00:00:00",
                        "count": 17
                    },
                    {
                        "date": "2020-02-03 00:00:00",
                        "count": 17
                    },
                    {
                        "date": "2020-03-02 00:00:00",
                        "count": 17
                    }
                ]
            },
            {
                "beneficiary_name": "Leadway Pensure PFA Limited",
                "count": 255,
                "number_of_times": 41,
                "result": [
                    {
                        "date": "2018-09-01 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2018-09-02 00:00:00",
                        "count": 7
                    },
                    {
                        "date": "2018-09-27 00:00:00",
                        "count": 12
                    },
                    {
                        "date": "2018-10-27 00:00:00",
                        "count": 22
                    },
                    {
                        "date": "2018-11-28 00:00:00",
                        "count": 10
                    },
                    {
                        "date": "2018-12-01 00:00:00",
                        "count": 5
                    },
                    {
                        "date": "2018-12-12 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-12-27 00:00:00",
                        "count": 6
                    },
                    {
                        "date": "2018-12-28 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-01-27 00:00:00",
                        "count": 13
                    },
                    {
                        "date": "2019-02-20 00:00:00",
                        "count": 12
                    },
                    {
                        "date": "2019-03-27 00:00:00",
                        "count": 11
                    },
                    {
                        "date": "2019-04-29 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-05-01 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-05-02 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-05-03 00:00:00",
                        "count": 5
                    },
                    {
                        "date": "2019-05-27 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-05-29 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-06-26 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-06-27 00:00:00",
                        "count": 14
                    },
                    {
                        "date": "2019-07-27 00:00:00",
                        "count": 13
                    },
                    {
                        "date": "2019-08-28 00:00:00",
                        "count": 5
                    },
                    {
                        "date": "2019-08-29 00:00:00",
                        "count": 7
                    },
                    {
                        "date": "2019-09-27 00:00:00",
                        "count": 10
                    },
                    {
                        "date": "2019-10-03 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-10-04 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-10-07 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-31 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-11-01 00:00:00",
                        "count": 9
                    },
                    {
                        "date": "2019-11-02 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-11-07 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-05 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-07 00:00:00",
                        "count": 6
                    },
                    {
                        "date": "2019-12-12 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-30 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-12-31 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2020-01-31 00:00:00",
                        "count": 17
                    },
                    {
                        "date": "2020-02-03 00:00:00",
                        "count": 18
                    },
                    {
                        "date": "2020-02-05 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2020-03-02 00:00:00",
                        "count": 18
                    },
                    {
                        "date": "2020-03-03 00:00:00",
                        "count": 1
                    }
                ]
            },
            {
                "beneficiary_name": "First Guarantee Pension Limited",
                "count": 254,
                "number_of_times": 45,
                "result": [
                    {
                        "date": "2018-09-01 00:00:00",
                        "count": 4
                    },
                    {
                        "date": "2018-09-02 00:00:00",
                        "count": 5
                    },
                    {
                        "date": "2018-09-27 00:00:00",
                        "count": 10
                    },
                    {
                        "date": "2018-10-27 00:00:00",
                        "count": 22
                    },
                    {
                        "date": "2018-11-28 00:00:00",
                        "count": 9
                    },
                    {
                        "date": "2018-12-01 00:00:00",
                        "count": 6
                    },
                    {
                        "date": "2018-12-12 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-12-27 00:00:00",
                        "count": 5
                    },
                    {
                        "date": "2019-01-27 00:00:00",
                        "count": 11
                    },
                    {
                        "date": "2019-02-20 00:00:00",
                        "count": 11
                    },
                    {
                        "date": "2019-03-27 00:00:00",
                        "count": 12
                    },
                    {
                        "date": "2019-04-29 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-04-30 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-05-01 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-02 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-03 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-05-17 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-21 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-27 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-05-28 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-29 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-06-26 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-06-27 00:00:00",
                        "count": 12
                    },
                    {
                        "date": "2019-07-27 00:00:00",
                        "count": 12
                    },
                    {
                        "date": "2019-08-28 00:00:00",
                        "count": 4
                    },
                    {
                        "date": "2019-08-29 00:00:00",
                        "count": 8
                    },
                    {
                        "date": "2019-09-27 00:00:00",
                        "count": 7
                    },
                    {
                        "date": "2019-09-28 00:00:00",
                        "count": 5
                    },
                    {
                        "date": "2019-10-03 00:00:00",
                        "count": 5
                    },
                    {
                        "date": "2019-10-04 00:00:00",
                        "count": 4
                    },
                    {
                        "date": "2019-10-07 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-10-30 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-31 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-11-01 00:00:00",
                        "count": 9
                    },
                    {
                        "date": "2019-11-08 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-05 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-12-07 00:00:00",
                        "count": 7
                    },
                    {
                        "date": "2019-12-10 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-12-12 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-30 00:00:00",
                        "count": 6
                    },
                    {
                        "date": "2019-12-31 00:00:00",
                        "count": 4
                    },
                    {
                        "date": "2020-01-31 00:00:00",
                        "count": 15
                    },
                    {
                        "date": "2020-02-03 00:00:00",
                        "count": 16
                    },
                    {
                        "date": "2020-02-04 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2020-03-02 00:00:00",
                        "count": 16
                    }
                ]
            },
            {
                "beneficiary_name": "NIGERIAN AIR FORCE CAPITAL ACCOUNT",
                "count": 232,
                "number_of_times": 27,
                "result": [
                    {
                        "date": "2018-09-01 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-09-06 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-10-02 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-10-29 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-11-20 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-12-01 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-12-21 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-01-27 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-02-21 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-03-13 00:00:00",
                        "count": 18
                    },
                    {
                        "date": "2019-03-14 00:00:00",
                        "count": 56
                    },
                    {
                        "date": "2019-04-01 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-04-23 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-04-28 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-28 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-06-27 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-07-29 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-08-27 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-09-27 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-03 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-04 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-10-07 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-24 00:00:00",
                        "count": 90
                    },
                    {
                        "date": "2019-10-30 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-11-15 00:00:00",
                        "count": 42
                    },
                    {
                        "date": "2019-12-12 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2020-02-10 00:00:00",
                        "count": 1
                    }
                ]
            }
        ],
        "first_page_url": "http:\/\/localhost\/api\/payments\/multiple?page=1",
        "from": 11,
        "last_page": 1861,
        "last_page_url": "http:\/\/localhost\/api\/payments\/multiple?page=1861",
        "next_page_url": "http:\/\/localhost\/api\/payments\/multiple?page=3",
        "path": "http:\/\/localhost\/api\/payments\/multiple",
        "per_page": 10,
        "prev_page_url": "http:\/\/localhost\/api\/payments\/multiple?page=1",
        "to": 20,
        "total": 18601
    }
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
    "count": "17",
    "page": "18",
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
    "description": "Payments without Organization, Beneficiary or Ministry Name",
    "payments": {
        "current_page": 18,
        "data": [
            {
                "id": 62201,
                "date": "2019-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2019,
                "payment_number": "1000606998-8",
                "payer_code": 517018007,
                "mother_ministry": "FEDERAL MINISTRY OF EDUCATION",
                "organization_name": "",
                "beneficiary_name": "FEDPOLY NASARAWA MICRO FINANCE BANK LTD",
                "amount": 20000000,
                "description": "Other deductions for August,2019",
                "irregularities": "",
                "created_at": "2020-06-08T12:33:24.000000Z",
                "updated_at": "2020-06-08T12:33:24.000000Z"
            },
            {
                "id": 62202,
                "date": "2019-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2019,
                "payment_number": "1000615293-11",
                "payer_code": 517018007,
                "mother_ministry": "FEDERAL MINISTRY OF EDUCATION",
                "organization_name": "",
                "beneficiary_name": "SENIOR STAFF ASSOCIATION OF NIGERIA POLYTECHNICS (SSANIP) FED. POLY.NASARAWA CHAPTER",
                "amount": 7277140.929999999701976776123046875,
                "description": "Being remittance of Loans deductions for September,2019",
                "irregularities": "",
                "created_at": "2020-06-08T12:33:24.000000Z",
                "updated_at": "2020-06-08T12:33:24.000000Z"
            },
            {
                "id": 62203,
                "date": "2019-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2019,
                "payment_number": "1000615293-13",
                "payer_code": 517018007,
                "mother_ministry": "FEDERAL MINISTRY OF EDUCATION",
                "organization_name": "",
                "beneficiary_name": "BURSARY STAFF COOPERATIVE SAVINGS AND LOAN SOC LTD FEDERAL POLY",
                "amount": 12177470.02999999932944774627685546875,
                "description": "Being remittance of BCSS deduction for September 2019",
                "irregularities": "",
                "created_at": "2020-06-08T12:33:24.000000Z",
                "updated_at": "2020-06-08T12:33:24.000000Z"
            },
            {
                "id": 62204,
                "date": "2019-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2019,
                "payment_number": "1000615293-8",
                "payer_code": 517018007,
                "mother_ministry": "FEDERAL MINISTRY OF EDUCATION",
                "organization_name": "",
                "beneficiary_name": "ASUP COOPERATIVE THRIFT AND LOAN SOCIETY LTD",
                "amount": 24775150,
                "description": "ASUP Cooperative Thrift for September,2019",
                "irregularities": "",
                "created_at": "2020-06-08T12:33:24.000000Z",
                "updated_at": "2020-06-08T12:33:24.000000Z"
            },
            {
                "id": 62205,
                "date": "2019-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2019,
                "payment_number": "1000615297-8",
                "payer_code": 517018007,
                "mother_ministry": "FEDERAL MINISTRY OF EDUCATION",
                "organization_name": "",
                "beneficiary_name": "AL=HALAL IHSAN MULTI=PURPOSE COOPERATIVE SOCIETY LIMITED",
                "amount": 9406517.460000000894069671630859375,
                "description": "Being ALHALAL deductions for September 2019",
                "irregularities": "",
                "created_at": "2020-06-08T12:33:24.000000Z",
                "updated_at": "2020-06-08T12:33:24.000000Z"
            },
            {
                "id": 62206,
                "date": "2019-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2019,
                "payment_number": "1000615141-1",
                "payer_code": 517018013,
                "mother_ministry": "FEDERAL MINISTRY OF EDUCATION",
                "organization_name": "",
                "beneficiary_name": "ASUPNEK NEKEDE (OWERRI WEST) MULTI-PURPOSE CO-OPERATIVE",
                "amount": 8006984.1600000001490116119384765625,
                "description": "SEPTEMBER 2019 ASUP LOAN RECOVERY DEDUCTIONS",
                "irregularities": "",
                "created_at": "2020-06-08T12:33:24.000000Z",
                "updated_at": "2020-06-08T12:33:24.000000Z"
            },
            {
                "id": 62207,
                "date": "2019-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2019,
                "payment_number": "1000615237-1",
                "payer_code": 517018019,
                "mother_ministry": "FEDERAL MINISTRY OF EDUCATION",
                "organization_name": "",
                "beneficiary_name": "YCT MICROFINANCE BANK LTD",
                "amount": 12821304.66999999992549419403076171875,
                "description": "",
                "irregularities": "",
                "created_at": "2020-06-08T12:33:24.000000Z",
                "updated_at": "2020-06-08T12:33:24.000000Z"
            },
            {
                "id": 62106,
                "date": "2019-09-29 00:00:00",
                "day": "29",
                "month": "09",
                "year": 2019,
                "payment_number": "1000613439-23",
                "payer_code": 231003001,
                "mother_ministry": "FEDERAL MINISTRY OF POWER",
                "organization_name": "",
                "beneficiary_name": "STERLING &amp; WILSON NIGERIA LIMITED",
                "amount": 124443719.4000000059604644775390625,
                "description": "ENERGIZING EDUCATION PROJECT,ABUBAKAR TAFAWA BALEWA UNIVERSITY,GUBI CAMPUS, BAUCHI STATE",
                "irregularities": "",
                "created_at": "2020-06-08T12:33:24.000000Z",
                "updated_at": "2020-06-08T12:33:24.000000Z"
            },
            {
                "id": 62107,
                "date": "2019-09-29 00:00:00",
                "day": "29",
                "month": "09",
                "year": 2019,
                "payment_number": "1000613439-24",
                "payer_code": 231003001,
                "mother_ministry": "FEDERAL MINISTRY OF POWER",
                "organization_name": "",
                "beneficiary_name": "FEDERAL INLAND REVENUE SERVICES",
                "amount": 6549669.440000000409781932830810546875,
                "description": "Payer:14367667-0001 STERLING &amp; WILSON NIGERIA LIMITED | MDA:0231003001 NATIONAL RURAL ELECTRIFICATION AGENCY | Tax:VAT5% | Invoice No: | Invoice Amount:137543058.28",
                "irregularities": "",
                "created_at": "2020-06-08T12:33:24.000000Z",
                "updated_at": "2020-06-08T12:33:24.000000Z"
            },
            {
                "id": 62108,
                "date": "2019-09-29 00:00:00",
                "day": "29",
                "month": "09",
                "year": 2019,
                "payment_number": "1000613439-25",
                "payer_code": 231003001,
                "mother_ministry": "FEDERAL MINISTRY OF POWER",
                "organization_name": "",
                "beneficiary_name": "FEDERAL INLAND REVENUE SERVICES",
                "amount": 6549669.440000000409781932830810546875,
                "description": "Payer:14367667-0001 STERLING &amp; WILSON NIGERIA LIMITED | MDA:0231003001 NATIONAL RURAL ELECTRIFICATION AGENCY | Tax:WHT5% | Invoice No: | Invoice Amount:137543058.28",
                "irregularities": "",
                "created_at": "2020-06-08T12:33:24.000000Z",
                "updated_at": "2020-06-08T12:33:24.000000Z"
            }
        ],
        "first_page_url": "http:\/\/localhost\/api\/payments\/without-names?page=1",
        "from": 171,
        "last_page": 263,
        "last_page_url": "http:\/\/localhost\/api\/payments\/without-names?page=263",
        "next_page_url": "http:\/\/localhost\/api\/payments\/without-names?page=19",
        "path": "http:\/\/localhost\/api\/payments\/without-names",
        "per_page": 10,
        "prev_page_url": "http:\/\/localhost\/api\/payments\/without-names?page=17",
        "to": 180,
        "total": 2626
    }
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
<td><code>page</code></td>
<td>optional</td>
<td>int The page of the records. Example 3</td>
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
    "count": "13",
    "page": "20",
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
    "http://localhost:8000/api/temporary-treasury/sit"
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
    "http://localhost:8000/api/temporary-treasury/omnis"
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
    "http://localhost:8000/api/temporary-treasury/voluptatem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "date": "omnis",
    "payment_number": "sed",
    "payer_code": 10,
    "mother_ministry": "et",
    "organization_name": "dicta",
    "beneficiary_name": "non",
    "amount": 12,
    "description": "itaque",
    "irregularities": "laudantium"
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
    "beneficiary_name": "occaecati",
    "date": "dicta"
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
    "count": "4",
    "page": "20",
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
    "date": "eius",
    "payment_number": "voluptatem",
    "payer_code": 1,
    "mother_ministry": "natus",
    "organization_name": "consequatur",
    "beneficiary_name": "est",
    "amount": 19,
    "description": "nihil",
    "irregularities": "blanditiis"
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
    "search_term": "eveniet",
    "start_date": "explicabo",
    "end_date": "quam",
    "count": "17",
    "page": "13",
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
    "http://localhost:8000/api/treasury/accusantium"
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
    "http://localhost:8000/api/treasury/aut"
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
    "http://localhost:8000/api/treasury/deleniti"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "date": "beatae",
    "payment_number": "non",
    "payer_code": 8,
    "mother_ministry": "qui",
    "organization_name": "voluptas",
    "beneficiary_name": "deleniti",
    "amount": 17,
    "description": "perferendis",
    "irregularities": "illo"
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
    "name": "repellat",
    "email": "velit",
    "password": "voluptas",
    "password_repeat": "ratione"
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
    "email": "voluptatibus",
    "password": "ducimus"
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