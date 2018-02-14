<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Biqube :: Dashboard</title>
    <link rel="stylesheet" href="/assets/css/layout-screen-desktop.css">
    <link rel="stylesheet" href="/assets/css/fonts-screen-desktop.css">
</head>
<body>

<header>

    <div class="logo-header">
        <div class="logo">Biqube</div>
    </div>

    <div class="content-header">

        <div class="top-navi">
            <a href="logout">logout</a>
        </div>

    </div>

</header>
<nav class="side-nav">
    <div class="side-nav-links">
        <h4>Bigquery</h4>
        <ul>
            <li class="toctree-l1">
                <a href="javascript:getMetaData()">MetaData</a>
            </li>
            <li class="toctree-l1">
                <a  href="#">Projects</a>
            </li>
            <li class="toctree-l1">
                <a class="current reference internal" href="#">Tables</a>
            </li>
            <li class="toctree-l2">
                <a  href="#">YAML</a>
            </li>
        </ul>
    </div>
</nav>
<main>

    <pre id="metadata"></pre>


    <label>Project ID
        <input type="text">
    </label>
    <input type="submit" value="+">
    <div>
        <ul>
            <li>Sample Project</li>
        </ul>
    </div>


    <label>Tables
        <input type="text">
    </label>
    <input type="submit" value="+">
    <div>
        <ul>
            <li>ProjectTables</li>
        </ul>
    </div>

</main>

<footer>Copyright (c) recruit 2017-<?php echo date("Y"); ?></footer>
<script type="text/javascript" href="/libs/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
    function getMetaData() {
        fetch('metadata', {
            credentials: 'same-origin',
            method: 'get'
        }).then(function(response) {
            return response.text();
        }).then(function(text) {
            document.getElementById("metadata").innerHTML = text;
        }).catch(function(err) {
            console.log(err);
        });
    }
</script>
</body>
</html>