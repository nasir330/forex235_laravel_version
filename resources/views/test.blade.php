<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML DOM Document</title>

    <style>

    </style>
</head>

<body>
    <div>
        <button onclick="myCookies()">Show Cookies</button>
        <p id="showCookies"></p>
    </div>
    <div>
        <button onclick="myDomain()">My Domain</button>
       <h2 id="showDomain"></h2>
    </div>
    <div>
        <button onclick="showModified()">Modified Info</button>
       <h4 id="showModified"></h4>
    </div>
    <div>
        <button onclick="showTitle()">Show Title</button>
       <h3 id="showtitle"></h3>
    </div>
    <div>
        <button onclick="showUrl()">Show URL</button>
       <h3 id="showUrl"></h3>
    </div>
  
    <script>
        //show cookies
      function myCookies(){
        var cookieData = document.cookie;
        document.getElementById('showCookies').innerHTML=cookieData;
      }
      //show domain
      function myDomain(){
        var domainName = document.domain;
        document.getElementById('showDomain').innerHTML=domainName;
      }
      //show last modified
      function showModified(){
        var modified = document.lastModified;
        document.getElementById('showModified').innerHTML=modified;
      }
      //show dodument title
      function showTitle(){
        var title = document.title;
        document.getElementById('showtitle').innerHTML=title;
      }
      //show url
      function showUrl(){
        var url = document.URL;
        document.getElementById('showUrl').innerHTML=url;
      }

    </script>
</body>

</html>