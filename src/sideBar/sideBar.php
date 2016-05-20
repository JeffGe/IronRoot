<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>

<style>
    * {
        margin: 0px;
        padding: 0;
    }

    .container {
        display: table;
        width: 100%;
    }

    #titleDiv {
        background: #3086DD;
        color: white;
        font-family: Trattatello;
        width: 200px;
        height: 50px;
        text-align: center;
        vertical-align: middle;
        line-height: 50px;
        font-weight: bold;
        font-size: 25px;
        display: table-cell;

    }

    #headerDiv {
        background: #3A9CFF;
        display: table-cell;
        width: auto;
    }

    .containerTwo {

        display: table;
        width: 100%;
    }


    nav {
        background: #3D464D;
        width: 200px;

        top: 50px;;
        left: 0px;;
        bottom: 0px;
        position: absolute;
    }

    nav ul {
        list-style-type: none;
    }

    nav ul li {
        margin: 0px;
        padding: 10px;
        text-align: left;
        color: floralwhite;
    }

    nav ul li a {
        text-decoration: none;
    }

</style>

<body>

<header class="container">
    <div id="titleDiv">
        IronRoot
    </div>
    <div id="headerDiv">
    </div>

</header>

<nav>
    <ul id="nav"
    <li><a href="#">Dashboard</a></li>
    <li>Dashboard</li>
    <li>Dashboard</li>
    </ul>
    <p onclick="alert('word')" ;>this is </p>
    <p onclick="$(this).hide();">asdfasdddddf</p>
</nav>

<script type='text/javascript' src='../../js/jquery.js'>

    $(document).ready(function () {

        $('#nav li a').click(function () {
            // function here
            alert('test');
        });
    });


</script>
</body>
</html>