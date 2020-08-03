<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield("title")</title>

    <style type="text/css">
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .page-wrap header{
            width: 100%;
            height: 150px;
            background-color: gainsboro;
            text-align: center;
        }

        .page-wrap footer{
            width: 100%;
            height: 100px;
            background-color: gainsboro;
            text-align: center;
        }

        .main {
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
        }
        .main aside {
            flex: 30%;
            background-color: #70804c;
            padding: 20px;
        }

        .main main {
            flex: 70%;
            background-color: #0C9A9A;
            padding: 20px;
        }

        nav ul{
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            list-style: none;
        }

        nav li {
            width: 25%;
            padding: 20px;
            background-color: #ffcc74;
            border-right: 1px solid green;
        }
    </style>
</head>
<body>

<div class="page-wrap">

    @include("codebase.partials.header")

    @include("codebase.partials.navigation")


    <div class="main">
        @include("codebase.partials.sidebar")

        <main>
            @yield("content")
        </main>

    </div>

    @include("codebase.partials.footer")
</div>

</body>
</html>
