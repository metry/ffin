<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple REST</title>
</head>
<body>
    <h1>Simple REST</h1>
    <form action="/">
        <h2>Show all</h2>
        <input type="button" value="Show" name="show" id="show">
        <h2>Ticker search</h2>
        <input type="text" name="q" title="search">
        <input type="button" value="Find" name="search" id="search">
    </form>
    <h3>Result:</h3>
    <div id="result"></div>
    <script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>