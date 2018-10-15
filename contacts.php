<!DOCTYPE html>
<html>
<head>
    <title>Съобщения</title>
    <meta charset="UTF-8">
</head>  
<body>
    <h1> Получени Съобщения</h1>
    <div id="dv1">
        <b><i>Дата:</i></b></br>
        echo("date");
    </div>
    <b><i>Име:<i></b></br>
    <?php
    echo($_POST["nm"]);
    ?></br>
     <b><i>Фамилия:<i></b></br>
    <?php
    echo($_POST["snm"]);
    ?></br>
     <b><i>E-mail:<i></b></br>
    <?php
    echo($_POST["email"]);
    ?></br>
     <b><i>Съобщение:<i></b></br>
    <?php
    echo($_POST["mess"]);
    ?></br>
</body>  
<style>
    #dv1{float: right;}
    body{ background-color: aqua;}
    </style>
</html>    