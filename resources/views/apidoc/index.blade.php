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
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "start_time": "2020-08-11T11:24:50.073070Z",
    "end_time": "2020-08-11T11:24:54.674100Z",
    "payments": {
        "current_page": 10,
        "data": [
            {
                "beneficiary_name": "REYNOLDS CONSTRUCTION COMPANY ( NIG.) LTD",
                "count": 47,
                "number_of_times": 17,
                "result": [
                    {
                        "date": "2018-09-17 00:00:00",
                        "count": 8
                    },
                    {
                        "date": "2018-09-18 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-09-19 00:00:00",
                        "count": 4
                    },
                    {
                        "date": "2018-11-12 00:00:00",
                        "count": 5
                    },
                    {
                        "date": "2018-12-28 00:00:00",
                        "count": 5
                    },
                    {
                        "date": "2019-01-14 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-01-15 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-08 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-06-13 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-17 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-10-22 00:00:00",
                        "count": 5
                    },
                    {
                        "date": "2019-12-20 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-24 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-12-30 00:00:00",
                        "count": 5
                    },
                    {
                        "date": "2020-02-19 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2020-02-21 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2020-02-27 00:00:00",
                        "count": 1
                    }
                ]
            },
            {
                "beneficiary_name": "ROCK BRIDGE CONSTRUCTION LIMITED",
                "count": 47,
                "number_of_times": 33,
                "result": [
                    {
                        "date": "2018-09-17 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-09-19 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-09-24 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-10-03 00:00:00",
                        "count": 4
                    },
                    {
                        "date": "2018-11-12 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2018-12-05 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-12-28 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-12-30 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-01-14 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-01-15 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-01-22 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-01-30 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-02-07 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-03-29 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-04-01 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-04-09 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-08 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-14 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-15 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-30 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-31 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-06-19 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-15 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-17 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-22 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-11-13 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-11-15 00:00:00",
                        "count": 2
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
                        "date": "2019-12-24 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-30 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-12-31 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2020-02-21 00:00:00",
                        "count": 2
                    }
                ]
            },
            {
                "beneficiary_name": "KADUNA STATE INTERNAL REVENUE SERVICE KADUNA",
                "count": 47,
                "number_of_times": 38,
                "result": [
                    {
                        "date": "2018-09-27 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-09-28 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-10-27 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-10-30 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-11-15 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-11-25 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-11-28 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-12-21 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-12-22 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-01-27 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-01-31 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-02-22 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-03-25 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-04-02 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-04-25 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-04-29 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-08 00:00:00",
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
                        "date": "2019-07-08 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-07-25 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-07-28 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-08-27 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-09-08 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-09-28 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-09-30 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-03 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-10-04 00:00:00",
                        "count": 3
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
                        "date": "2019-11-07 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-11-13 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-03 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-07 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-30 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2020-02-07 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2020-02-13 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2020-03-03 00:00:00",
                        "count": 1
                    }
                ]
            },
            {
                "beneficiary_name": "OAGF",
                "count": 47,
                "number_of_times": 11,
                "result": [
                    {
                        "date": "2018-10-23 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-11-09 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-02-11 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-04-16 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-06-20 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-07 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-12-10 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-19 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-12-20 00:00:00",
                        "count": 8
                    },
                    {
                        "date": "2019-12-30 00:00:00",
                        "count": 11
                    },
                    {
                        "date": "2019-12-31 00:00:00",
                        "count": 14
                    }
                ]
            },
            {
                "beneficiary_name": "RADIO TELEVISION THEATRE AND ARTS WORKERS UNION",
                "count": 46,
                "number_of_times": 29,
                "result": [
                    {
                        "date": "2018-09-01 00:00:00",
                        "count": 1
                    },
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
                        "count": 4
                    },
                    {
                        "date": "2018-11-28 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-12-01 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-12-27 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-01-27 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-02-20 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-03-27 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-04-30 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-01 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-27 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-06-27 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-07-27 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-08-28 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-08-29 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-09-27 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-09-28 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-03 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-31 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-11-08 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-05 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-12 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-30 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-31 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2020-01-31 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2020-02-03 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2020-03-02 00:00:00",
                        "count": 3
                    }
                ]
            },
            {
                "beneficiary_name": "ADAMAWA BOARD OF INTERNAL REVENUE YOLA",
                "count": 46,
                "number_of_times": 37,
                "result": [
                    {
                        "date": "0000-11-29 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-09-03 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-09-27 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-09-28 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-10-29 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-10-30 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-12-22 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-12-24 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-01-26 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-02-03 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-02-21 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-02-22 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-03-31 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-04-02 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-04-03 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-04-29 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-01 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-06-05 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-06-27 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-06-28 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-07-26 00:00:00",
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
                        "date": "2019-08-29 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-09-29 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-09-30 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-03 00:00:00",
                        "count": 2
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
                        "date": "2019-11-05 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-05 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-07 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-24 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-31 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2020-02-05 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2020-03-05 00:00:00",
                        "count": 2
                    }
                ]
            },
            {
                "beneficiary_name": "NIGER STATE BOARD OF INTERNEL REVENUE",
                "count": 46,
                "number_of_times": 39,
                "result": [
                    {
                        "date": "2018-09-06 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-09-09 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-09-10 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-09-25 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-10-02 00:00:00",
                        "count": 4
                    },
                    {
                        "date": "2018-10-28 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-10-31 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-11-28 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-11-30 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-12-21 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-12-22 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-12-29 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-01-28 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-01-29 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-02-21 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-02-22 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-03-26 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-04-03 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-04-04 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-04-29 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-01 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-30 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-31 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-06-28 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-06-30 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-07-26 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-08-01 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-08-27 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-09-01 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-09-28 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-03 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-04 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-07 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-31 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-11-28 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-05 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-07 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-30 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2020-02-05 00:00:00",
                        "count": 1
                    }
                ]
            },
            {
                "beneficiary_name": "SENSTAFF COOPERATIVE MULTIPURPOSE SOCIETY LTDFPB",
                "count": 46,
                "number_of_times": 24,
                "result": [
                    {
                        "date": "2018-09-07 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-09-09 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-09-10 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-10-02 00:00:00",
                        "count": 4
                    },
                    {
                        "date": "2018-10-31 00:00:00",
                        "count": 4
                    },
                    {
                        "date": "2018-11-30 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-12-22 00:00:00",
                        "count": 4
                    },
                    {
                        "date": "2019-01-29 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-02-22 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-04-04 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-01 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-03 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-30 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-06-30 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-08-01 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-09-01 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-10-04 00:00:00",
                        "count": 2
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
                        "count": 1
                    },
                    {
                        "date": "2019-11-28 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-12-05 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-12-30 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2020-02-05 00:00:00",
                        "count": 2
                    }
                ]
            },
            {
                "beneficiary_name": "PRESIDENTIAL AIR FLEET NAIRA TRANSIT ACCOUNT",
                "count": 46,
                "number_of_times": 34,
                "result": [
                    {
                        "date": "2018-09-09 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-09-10 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-09-28 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2018-11-03 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-11-09 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-11-22 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2018-11-28 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-12-24 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-01-31 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-02-21 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-02-22 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-04-03 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-04-13 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-04-27 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-12 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-15 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-06-05 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-06-21 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-07-09 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-07-21 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-08-07 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-09-01 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-09-08 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-09-24 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-18 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-11-01 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-11-08 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-11-29 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-04 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-30 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-31 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2020-02-03 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2020-02-24 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2020-03-02 00:00:00",
                        "count": 1
                    }
                ]
            },
            {
                "beneficiary_name": "NIGERIAN ARMY",
                "count": 46,
                "number_of_times": 28,
                "result": [
                    {
                        "date": "2017-12-12 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-09-20 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-09-25 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-10-09 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-10-11 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-11-05 00:00:00",
                        "count": 6
                    },
                    {
                        "date": "2018-11-16 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-11-20 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-12-24 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-12-29 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-01-24 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-01-25 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-03-01 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-03-19 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-04-26 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-17 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-06-03 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-06-24 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-06-26 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-07-09 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-07-26 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-08-05 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-09-05 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-09-12 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-09 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-23 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-12 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-30 00:00:00",
                        "count": 1
                    }
                ]
            }
        ],
        "first_page_url": "http:\/\/localhost\/api\/payments\/multiple?page=1",
        "from": 91,
        "last_page": 1861,
        "last_page_url": "http:\/\/localhost\/api\/payments\/multiple?page=1861",
        "next_page_url": "http:\/\/localhost\/api\/payments\/multiple?page=11",
        "path": "http:\/\/localhost\/api\/payments\/multiple",
        "per_page": 10,
        "prev_page_url": "http:\/\/localhost\/api\/payments\/multiple?page=9",
        "to": 100,
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
    "page": "14",
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
        "current_page": 14,
        "data": [
            {
                "id": 62161,
                "date": "2019-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2019,
                "payment_number": "1000614700-5",
                "payer_code": 215012001,
                "mother_ministry": "FEDERAL MINISTRY OF AGRICULTURE AND\n RURAL DEVELOPMENT",
                "organization_name": "",
                "beneficiary_name": "PENCOM ifoFEDERAL UNIVERSITY OF AGRICULTURE, ABEOKUTA",
                "amount": 30853814.710000000894069671630859375,
                "description": "September, 2019 PENCOM (Employer) Deductions from Salary of Agric, Science, Health and Other MDAs",
                "irregularities": "",
                "created_at": "2020-06-08T12:33:24.000000Z",
                "updated_at": "2020-06-08T12:33:24.000000Z"
            },
            {
                "id": 62162,
                "date": "2019-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2019,
                "payment_number": "1000614700-6",
                "payer_code": 215012002,
                "mother_ministry": "FEDERAL MINISTRY OF AGRICULTURE AND\n RURAL DEVELOPMENT",
                "organization_name": "",
                "beneficiary_name": "PENCOM ifoFEDERAL UNIVERSITY OF AGRICULTURE, MAKURDI",
                "amount": 35696914.990000002086162567138671875,
                "description": "September, 2019 PENCOM (Employer) Deductions from Salary of Agric, Science, Health and Other MDAs",
                "irregularities": "",
                "created_at": "2020-06-08T12:33:24.000000Z",
                "updated_at": "2020-06-08T12:33:24.000000Z"
            },
            {
                "id": 62163,
                "date": "2019-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2019,
                "payment_number": "1000614700-7",
                "payer_code": 215012003,
                "mother_ministry": "FEDERAL MINISTRY OF AGRICULTURE AND\n RURAL DEVELOPMENT",
                "organization_name": "",
                "beneficiary_name": "PENCOM ifoMICHAEL OKPARA UNIVERSITY OF AGRICULTURE, UMUDIKE",
                "amount": 40096813.20000000298023223876953125,
                "description": "September, 2019 PENCOM (Employer) Deductions from Salary of Agric, Science, Health and Other MDAs",
                "irregularities": "",
                "created_at": "2020-06-08T12:33:24.000000Z",
                "updated_at": "2020-06-08T12:33:24.000000Z"
            },
            {
                "id": 62164,
                "date": "2019-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2019,
                "payment_number": "1000615128-2842",
                "payer_code": 215012003,
                "mother_ministry": "FEDERAL MINISTRY OF AGRICULTURE AND\n RURAL DEVELOPMENT",
                "organization_name": "",
                "beneficiary_name": "MICHAEL OKPARA UNIVERSITY OF AGRICULTURE, UMUDIKE",
                "amount": 40452887.820000000298023223876953125,
                "description": "BEING TRANSFER FOR THE PAYMENT OF NEW STAFF SALARY AND DEDUCTIONS FOR SEPTEMBER 2019",
                "irregularities": "",
                "created_at": "2020-06-08T12:33:24.000000Z",
                "updated_at": "2020-06-08T12:33:24.000000Z"
            },
            {
                "id": 62165,
                "date": "2019-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2019,
                "payment_number": "1000615128-2843",
                "payer_code": 215012003,
                "mother_ministry": "FEDERAL MINISTRY OF AGRICULTURE AND\n RURAL DEVELOPMENT",
                "organization_name": "",
                "beneficiary_name": "BOARD OF INTERNAL REVENUE, ABIA STATE",
                "amount": 10796329.039999999105930328369140625,
                "description": "PAYMENT OF TAX DEDUCTED FROM MOUAU STAFF SALARIES FOR THE MONTH OF SEPTEMBER 2019",
                "irregularities": "",
                "created_at": "2020-06-08T12:33:24.000000Z",
                "updated_at": "2020-06-08T12:33:24.000000Z"
            },
            {
                "id": 62166,
                "date": "2019-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2019,
                "payment_number": "1000614700-3",
                "payer_code": 215015001,
                "mother_ministry": "FEDERAL MINISTRY OF AGRICULTURE AND\n RURAL DEVELOPMENT",
                "organization_name": "",
                "beneficiary_name": "PENCOM ifoINSTITUTE OF AGRICULTURAL RESEARCH AND TRAINING- IBADAN",
                "amount": 6877044.530000000260770320892333984375,
                "description": "September, 2019 PENCOM (Employer) Deductions from Salary of Agric, Science, Health and Other MDAs",
                "irregularities": "",
                "created_at": "2020-06-08T12:33:24.000000Z",
                "updated_at": "2020-06-08T12:33:24.000000Z"
            },
            {
                "id": 62167,
                "date": "2019-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2019,
                "payment_number": "1000614700-4",
                "payer_code": 215018001,
                "mother_ministry": "FEDERAL MINISTRY OF AGRICULTURE AND\n RURAL DEVELOPMENT",
                "organization_name": "",
                "beneficiary_name": "PENCOM ifoNATIONAL AGRIC. EXTENSION RESEARCH LIAISON SERVICES- ZARIA",
                "amount": 5430744.889999999664723873138427734375,
                "description": "September, 2019 PENCOM (Employer) Deductions from Salary of Agric, Science, Health and Other MDAs",
                "irregularities": "",
                "created_at": "2020-06-08T12:33:24.000000Z",
                "updated_at": "2020-06-08T12:33:24.000000Z"
            },
            {
                "id": 62168,
                "date": "2019-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2019,
                "payment_number": "1000614720-1",
                "payer_code": 220012001,
                "mother_ministry": "#N\/A",
                "organization_name": "",
                "beneficiary_name": "NATIONAL INTELLIGENT AGENCY",
                "amount": 2829013569,
                "description": "September, 2019 Personnel Cost ifo NIA as per Warrant No. W01-00011782",
                "irregularities": "",
                "created_at": "2020-06-08T12:33:24.000000Z",
                "updated_at": "2020-06-08T12:33:24.000000Z"
            },
            {
                "id": 62169,
                "date": "2019-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2019,
                "payment_number": "1000614720-2",
                "payer_code": 220012001,
                "mother_ministry": "#N\/A",
                "organization_name": "",
                "beneficiary_name": "NATIONAL SECURITY ADVISER",
                "amount": 454401562.10000002384185791015625,
                "description": "September, 2019 Personnel Cost ifo NSA as per Warrant No. W01-00011782",
                "irregularities": "",
                "created_at": "2020-06-08T12:33:24.000000Z",
                "updated_at": "2020-06-08T12:33:24.000000Z"
            },
            {
                "id": 62170,
                "date": "2019-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2019,
                "payment_number": "1000614720-3",
                "payer_code": 220012001,
                "mother_ministry": "#N\/A",
                "organization_name": "",
                "beneficiary_name": "DIRECTORATE OF STATE SECURITY SERVICE",
                "amount": 3391227761,
                "description": "September, 2019 Personnel Cost ifo DSS as per Warrant No. W01-00011782",
                "irregularities": "",
                "created_at": "2020-06-08T12:33:24.000000Z",
                "updated_at": "2020-06-08T12:33:24.000000Z"
            }
        ],
        "first_page_url": "http:\/\/localhost\/api\/payments\/without-names?page=1",
        "from": 131,
        "last_page": 263,
        "last_page_url": "http:\/\/localhost\/api\/payments\/without-names?page=263",
        "next_page_url": "http:\/\/localhost\/api\/payments\/without-names?page=15",
        "path": "http:\/\/localhost\/api\/payments\/without-names",
        "per_page": 10,
        "prev_page_url": "http:\/\/localhost\/api\/payments\/without-names?page=13",
        "to": 140,
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
    "count": "4",
    "page": "14",
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
    "http://localhost:8000/api/temporary-treasury/rem"
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
    "http://localhost:8000/api/temporary-treasury/quisquam"
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
    "http://localhost:8000/api/temporary-treasury/qui"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "date": "quis",
    "payment_number": "rerum",
    "payer_code": 16,
    "mother_ministry": "voluptatem",
    "organization_name": "aspernatur",
    "beneficiary_name": "laborum",
    "amount": 13,
    "description": "reprehenderit",
    "irregularities": "eos"
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
    "beneficiary_name": "vero",
    "date": "enim"
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
    "count": "17",
    "page": "6",
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
    "payment_number": "et",
    "payer_code": 18,
    "mother_ministry": "voluptatum",
    "organization_name": "quaerat",
    "beneficiary_name": "praesentium",
    "amount": 1,
    "description": "reprehenderit",
    "irregularities": "odit"
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
    "search_term": "rerum",
    "start_date": "voluptatum",
    "end_date": "saepe",
    "count": "4",
    "page": "1",
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
    "http://localhost:8000/api/treasury/ipsa"
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
    "http://localhost:8000/api/treasury/iure"
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
    "http://localhost:8000/api/treasury/beatae"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "date": "dolores",
    "payment_number": "pariatur",
    "payer_code": 12,
    "mother_ministry": "saepe",
    "organization_name": "qui",
    "beneficiary_name": "quidem",
    "amount": 9,
    "description": "perferendis",
    "irregularities": "iusto"
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
    "name": "omnis",
    "email": "laudantium",
    "password": "non",
    "password_repeat": "deserunt"
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
    "email": "asperiores",
    "password": "commodi"
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
      </div>
      <div class="dark-box">
                        <div class="lang-selector">
                                    <a href="#" data-language-name="javascript">javascript</a>
                              </div>
                </div>
    </div>
  </body>
</html>