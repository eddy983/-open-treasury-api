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
    "count": "16",
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
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "start_time": "2020-08-11T10:51:37.500762Z",
    "end_time": "2020-08-11T10:51:42.136430Z",
    "payments": {
        "current_page": 13,
        "data": [
            {
                "beneficiary_name": "FCF IBADAN CICS",
                "count": 41,
                "number_of_times": 25,
                "result": [
                    {
                        "date": "2018-09-02 00:00:00",
                        "count": 2
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
                        "count": 1
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
                        "date": "2019-05-02 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-29 00:00:00",
                        "count": 2
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
                        "date": "2019-10-31 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-11-01 00:00:00",
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
                        "date": "2019-12-31 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2020-01-31 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2020-02-03 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2020-03-02 00:00:00",
                        "count": 2
                    }
                ]
            },
            {
                "beneficiary_name": "FEDERAL POLYTECHNIC NEKEDE MICROFINANCE BANK LTD",
                "count": 41,
                "number_of_times": 24,
                "result": [
                    {
                        "date": "2018-09-04 00:00:00",
                        "count": 5
                    },
                    {
                        "date": "2018-10-06 00:00:00",
                        "count": 4
                    },
                    {
                        "date": "2018-10-10 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-11-05 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2018-11-30 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-12-03 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-12-05 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-01-31 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-04-04 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-04-30 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-30 00:00:00",
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
                        "date": "2019-07-30 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-08-29 00:00:00",
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
                        "date": "2019-10-31 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-11-01 00:00:00",
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
                        "date": "2020-03-05 00:00:00",
                        "count": 1
                    }
                ]
            },
            {
                "beneficiary_name": "KADUNA ELECTRICITY DISTRIBUTION PLC",
                "count": 41,
                "number_of_times": 38,
                "result": [
                    {
                        "date": "2018-09-23 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-11-28 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-01-31 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-03-15 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-04-02 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-04-23 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-04-30 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-24 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-28 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-30 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-06-20 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-06-26 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-06-28 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-07-18 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-07-29 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-07-30 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-08-16 00:00:00",
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
                        "date": "2019-08-30 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-09-18 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-09-27 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-09-30 00:00:00",
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
                        "date": "2019-10-17 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-18 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-11-01 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-11-04 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-11-13 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-11-19 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-11-30 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-01 00:00:00",
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
                        "count": 2
                    },
                    {
                        "date": "2019-12-31 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2020-02-07 00:00:00",
                        "count": 1
                    }
                ]
            },
            {
                "beneficiary_name": "OSUN TAX",
                "count": 40,
                "number_of_times": 20,
                "result": [
                    {
                        "date": "2018-09-02 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-09-27 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-10-27 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-11-28 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-01-27 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-02-20 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-03-27 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-05-01 00:00:00",
                        "count": 2
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
                        "count": 2
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
                        "date": "2019-11-05 00:00:00",
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
                        "date": "2020-01-31 00:00:00",
                        "count": 3
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
                "beneficiary_name": "FEDERAL UNIVERSITY OF PETROLEUM RESOURCES EFFURUN (FUPRE) STAFF MULTI - PURPOSE CO-OPERATIVE SOCIETY, EFFURUN",
                "count": 40,
                "number_of_times": 19,
                "result": [
                    {
                        "date": "0000-11-29 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-09-03 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-09-28 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-10-30 00:00:00",
                        "count": 4
                    },
                    {
                        "date": "2018-12-21 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-01-29 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-03-31 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-04-02 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-05-07 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-06-27 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-07-31 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-08-28 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-09-30 00:00:00",
                        "count": 2
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
                        "date": "2019-11-01 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-12-07 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-12-30 00:00:00",
                        "count": 2
                    }
                ]
            },
            {
                "beneficiary_name": "RIVERS STATE BOARD OF INTERNAL REVENUE",
                "count": 40,
                "number_of_times": 32,
                "result": [
                    {
                        "date": "2018-09-05 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-09-06 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-09-12 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-09-28 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-10-05 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-10-06 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-11-02 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-11-05 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-11-15 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-11-23 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-12-05 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-12-19 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-12-20 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-12-24 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-12-27 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-02-03 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-02-05 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-03-02 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-04-06 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-04-10 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-04-12 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-05 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-06-03 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-07-03 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-08-06 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-08-07 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-09-06 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-08 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-11-01 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-07 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-12-30 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2020-03-05 00:00:00",
                        "count": 1
                    }
                ]
            },
            {
                "beneficiary_name": "BULAMA, MR. SADIQ ABUBAKAR",
                "count": 40,
                "number_of_times": 26,
                "result": [
                    {
                        "date": "2018-09-24 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-10-04 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-11-26 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-12-06 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-12-07 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-12-27 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-01-16 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-02-11 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-02-14 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-02-15 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-03-15 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-03-18 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-04-16 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-01 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-05-15 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-22 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-30 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-22 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-11-27 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-07 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-10 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-12-12 00:00:00",
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
                        "count": 2
                    },
                    {
                        "date": "2019-12-30 00:00:00",
                        "count": 5
                    }
                ]
            },
            {
                "beneficiary_name": "JRB SOLAR INVESTMENT LTD",
                "count": 40,
                "number_of_times": 24,
                "result": [
                    {
                        "date": "2018-10-03 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-10-22 00:00:00",
                        "count": 4
                    },
                    {
                        "date": "2018-10-30 00:00:00",
                        "count": 4
                    },
                    {
                        "date": "2018-11-06 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-11-17 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-12-19 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-12-20 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-12-27 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-12-29 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-01-21 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-02-08 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-02-09 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-03-24 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-03-26 00:00:00",
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
                        "date": "2019-05-14 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-16 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-22 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-06-10 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-06-14 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-14 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-19 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-12-20 00:00:00",
                        "count": 2
                    }
                ]
            },
            {
                "beneficiary_name": "UYK NIGERIA LIMITED",
                "count": 40,
                "number_of_times": 27,
                "result": [
                    {
                        "date": "2018-10-09 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2018-10-11 00:00:00",
                        "count": 4
                    },
                    {
                        "date": "2018-10-31 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-01-22 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-01-24 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-01-25 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-01-26 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-02-01 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-02-04 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-02-08 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-04-04 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-04-12 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-04-16 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-04-24 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-04-26 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-04 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-05-12 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-31 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-06-03 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-06-12 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-06-26 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-09 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-26 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-11-08 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-12-03 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-12 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-30 00:00:00",
                        "count": 2
                    }
                ]
            },
            {
                "beneficiary_name": "PEKAMOL VENTURES NIGERIA LIMITED",
                "count": 40,
                "number_of_times": 29,
                "result": [
                    {
                        "date": "0000-11-29 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2018-10-19 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-01-26 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-01-30 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-03-01 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-03-04 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-03-20 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-03-30 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-04-02 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-04-04 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-04-05 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-04-15 00:00:00",
                        "count": 3
                    },
                    {
                        "date": "2019-04-17 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-04-28 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-02 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-05-12 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-05-30 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-06-27 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-09-18 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-09-23 00:00:00",
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
                        "date": "2019-10-10 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-10-11 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-06 00:00:00",
                        "count": 2
                    },
                    {
                        "date": "2019-12-27 00:00:00",
                        "count": 1
                    },
                    {
                        "date": "2019-12-30 00:00:00",
                        "count": 4
                    },
                    {
                        "date": "2019-12-31 00:00:00",
                        "count": 3
                    }
                ]
            }
        ],
        "first_page_url": "http:\/\/localhost\/api\/payments\/multiple?page=1",
        "from": 121,
        "last_page": 1861,
        "last_page_url": "http:\/\/localhost\/api\/payments\/multiple?page=1861",
        "next_page_url": "http:\/\/localhost\/api\/payments\/multiple?page=14",
        "path": "http:\/\/localhost\/api\/payments\/multiple",
        "per_page": 10,
        "prev_page_url": "http:\/\/localhost\/api\/payments\/multiple?page=12",
        "to": 130,
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
    "beneficiary_name": "doloremque",
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
    "name": "iure",
    "email": "sunt",
    "password": "autem",
    "password_repeat": "aperiam"
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
    "email": "sequi",
    "password": "minima"
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
    "count": "2",
    "page": "12",
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
    "date": "omnis",
    "payment_number": "omnis",
    "payer_code": 11,
    "mother_ministry": "perferendis",
    "organization_name": "distinctio",
    "beneficiary_name": "quibusdam",
    "amount": 20,
    "description": "voluptatem",
    "irregularities": "et"
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
    "search_term": "soluta",
    "start_date": "qui",
    "end_date": "et",
    "count": "8",
    "page": "17",
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
    "http://localhost:8000/api/treasury/saepe"
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
    "http://localhost:8000/api/treasury/repellendus"
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
    "http://localhost:8000/api/treasury/tempora"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "date": "facilis",
    "payment_number": "labore",
    "payer_code": 14,
    "mother_ministry": "nostrum",
    "organization_name": "in",
    "beneficiary_name": "tempora",
    "amount": 20,
    "description": "et",
    "irregularities": "aperiam"
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
    "count": "5",
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
    "http://localhost:8000/api/temporary-treasury/dicta"
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
    "http://localhost:8000/api/temporary-treasury/amet"
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
    "http://localhost:8000/api/temporary-treasury/pariatur"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "date": "ad",
    "payment_number": "aut",
    "payer_code": 13,
    "mother_ministry": "aut",
    "organization_name": "ex",
    "beneficiary_name": "nesciunt",
    "amount": 20,
    "description": "ipsam",
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
    "count": "4",
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
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "description": "Payments without Organization, Beneficiary or Ministry Name",
    "payments": {
        "current_page": 13,
        "data": [
            {
                "id": 62151,
                "date": "2019-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2019,
                "payment_number": "1000614677-7",
                "payer_code": 157001001,
                "mother_ministry": "NATIONAL SECURITY ADVISER",
                "organization_name": "",
                "beneficiary_name": "Pension Deductions ifo NATIONAL SECURITY ADVISER",
                "amount": 10741258.2300000004470348358154296875,
                "description": "September, 2019 Pension Deductions from Salary of Military and other Security Agencies (EMPLOYER)",
                "irregularities": "",
                "created_at": "2020-06-08T12:33:24.000000Z",
                "updated_at": "2020-06-08T12:33:24.000000Z"
            },
            {
                "id": 62152,
                "date": "2019-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2019,
                "payment_number": "1000614677-8",
                "payer_code": 157001001,
                "mother_ministry": "NATIONAL SECURITY ADVISER",
                "organization_name": "",
                "beneficiary_name": "Pension Deductions ifo NATIONAL SECURITY ADVISER",
                "amount": 10741258.2300000004470348358154296875,
                "description": "September, 2019 Pension Deductions from Salary of Military and other Security Agencies (EMPLOYEE)",
                "irregularities": "",
                "created_at": "2020-06-08T12:33:24.000000Z",
                "updated_at": "2020-06-08T12:33:24.000000Z"
            },
            {
                "id": 62153,
                "date": "2019-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2019,
                "payment_number": "1000614685-10",
                "payer_code": 157001001,
                "mother_ministry": "NATIONAL SECURITY ADVISER",
                "organization_name": "",
                "beneficiary_name": "NHIS ifo NATIONAL SECURITY ADVISER",
                "amount": 7160838.820000000298023223876953125,
                "description": "September, 2019 NHIS Deductions from Salary of Military and other Security Agencies",
                "irregularities": "",
                "created_at": "2020-06-08T12:33:24.000000Z",
                "updated_at": "2020-06-08T12:33:24.000000Z"
            },
            {
                "id": 62154,
                "date": "2019-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2019,
                "payment_number": "1000614685-11",
                "payer_code": 157002001,
                "mother_ministry": "NATIONAL SECURITY ADVISER",
                "organization_name": "",
                "beneficiary_name": "NHIS ifo DIRECTORATE OF STATE SECURITY SERVICE",
                "amount": 87673579.5999999940395355224609375,
                "description": "September, 2019 NHIS Deductions from Salary of Military and other Security Agencies",
                "irregularities": "",
                "created_at": "2020-06-08T12:33:24.000000Z",
                "updated_at": "2020-06-08T12:33:24.000000Z"
            },
            {
                "id": 62155,
                "date": "2019-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2019,
                "payment_number": "1000615062-1",
                "payer_code": 157002001,
                "mother_ministry": "NATIONAL SECURITY ADVISER",
                "organization_name": "",
                "beneficiary_name": "DIRECTORATE OF STATE SECURITY SERVICE",
                "amount": 1125413082,
                "description": "September, 2019 DSS Pensions Including Arrears as per Warrants Nos: W01-00011784",
                "irregularities": "",
                "created_at": "2020-06-08T12:33:24.000000Z",
                "updated_at": "2020-06-08T12:33:24.000000Z"
            },
            {
                "id": 62156,
                "date": "2019-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2019,
                "payment_number": "1000614685-12",
                "payer_code": 157003001,
                "mother_ministry": "NATIONAL SECURITY ADVISER",
                "organization_name": "",
                "beneficiary_name": "NHIS ifo NATIONAL INTELLIGENCE AGENCY",
                "amount": 108224086.20000000298023223876953125,
                "description": "September, 2019 NHIS Deductions from Salary of Military and other Security Agencies",
                "irregularities": "",
                "created_at": "2020-06-08T12:33:24.000000Z",
                "updated_at": "2020-06-08T12:33:24.000000Z"
            },
            {
                "id": 62157,
                "date": "2019-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2019,
                "payment_number": "1000615062-2",
                "payer_code": 157003001,
                "mother_ministry": "NATIONAL SECURITY ADVISER",
                "organization_name": "",
                "beneficiary_name": "NATIONAL INTELLIGENCE AGENCY",
                "amount": 309094547.300000011920928955078125,
                "description": "September, 2019 NIA Pensions\/Dendants Benefits as per Warrants Nos: W01-00011786",
                "irregularities": "",
                "created_at": "2020-06-08T12:33:24.000000Z",
                "updated_at": "2020-06-08T12:33:24.000000Z"
            },
            {
                "id": 62158,
                "date": "2019-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2019,
                "payment_number": "1000615251-1",
                "payer_code": 161022001,
                "mother_ministry": "SECRETARY TO THE GOVERNMENT OF\n THE FEDERATION",
                "organization_name": "",
                "beneficiary_name": "MURTALA AHMED BABA",
                "amount": 13580000,
                "description": "BEING PARTPAYMENT FOR 2019 PROJECTION SITE IDENTIFICATION",
                "irregularities": "",
                "created_at": "2020-06-08T12:33:24.000000Z",
                "updated_at": "2020-06-08T12:33:24.000000Z"
            },
            {
                "id": 62159,
                "date": "2019-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2019,
                "payment_number": "1000614700-1",
                "payer_code": 215009001,
                "mother_ministry": "FEDERAL MINISTRY OF AGRICULTURE AND\n RURAL DEVELOPMENT",
                "organization_name": "",
                "beneficiary_name": "PENCOM ifoINSTITUTE OF AGRICULTURAL RESEARCH- ZARIA",
                "amount": 6337931.7699999995529651641845703125,
                "description": "September, 2019 PENCOM (Employer) Deductions from Salary of Agric, Science, Health and Other MDAs",
                "irregularities": "",
                "created_at": "2020-06-08T12:33:24.000000Z",
                "updated_at": "2020-06-08T12:33:24.000000Z"
            },
            {
                "id": 62160,
                "date": "2019-09-30 00:00:00",
                "day": "30",
                "month": "09",
                "year": 2019,
                "payment_number": "1000615160-1",
                "payer_code": 215009001,
                "mother_ministry": "FEDERAL MINISTRY OF AGRICULTURE AND\n RURAL DEVELOPMENT",
                "organization_name": "",
                "beneficiary_name": "BANKOTEX NIGERIA LIMITED",
                "amount": 6534500.08000000007450580596923828125,
                "description": "Part of September, 2019 Recoveries.",
                "irregularities": "",
                "created_at": "2020-06-08T12:33:24.000000Z",
                "updated_at": "2020-06-08T12:33:24.000000Z"
            }
        ],
        "first_page_url": "http:\/\/localhost\/api\/payments\/without-names?page=1",
        "from": 121,
        "last_page": 263,
        "last_page_url": "http:\/\/localhost\/api\/payments\/without-names?page=263",
        "next_page_url": "http:\/\/localhost\/api\/payments\/without-names?page=14",
        "path": "http:\/\/localhost\/api\/payments\/without-names",
        "per_page": 10,
        "prev_page_url": "http:\/\/localhost\/api\/payments\/without-names?page=12",
        "to": 130,
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
      </div>
      <div class="dark-box">
                        <div class="lang-selector">
                                    <a href="#" data-language-name="javascript">javascript</a>
                              </div>
                </div>
    </div>
  </body>
</html>