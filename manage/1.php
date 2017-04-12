<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div>
        <h4>
            <a data-toggle="collapse" href="#One" aria-expanded="true">
                Collapsible Group Item #1
            </a>
        </h4>
    </div>
    <div id="One" class="collapse">
        <ul class="list-group">
            <li class="list-group-item"></li>
            <li class="list-group-item"></li>
            <li class="list-group-item"></li>
            <li class="list-group-item"></li>
        </ul>
    </div>
</div>
<hr/>
<div class="container">
    <h4>
        <a data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Collapsible Group Item #3
        </a>
    </h4>
    <div id="collapseThree" class="panel-collapse collapse" >
        <ul class="list-group">
            <li class="list-group-item"></li>
            <li class="list-group-item"></li>
            <li class="list-group-item"></li>
            <li class="list-group-item"></li>
        </ul>
    </div>
</div>
<hr/>
<div class="container">

        <h4 class="panel-title">
            <a data-toggle="collapse" href="#onr" aria-expanded="true">
                Collapsible Group Item #1
            </a>
        </h4>

    <div id="onr" class=" collapse in" >
        <ul class="list-group">
            <li class="list-group-item"></li>
            <li class="list-group-item"></li>
            <li class="list-group-item"></li>
            <li class="list-group-item"></li>
        </ul>
    </div>
</div>
<script src="../php/JQUERY/jquery-3.1.1.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
</body>
</html>