<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>

<body>
    {{$content}}
    <?php
        $tschau = str_replace('Hello', 'Ciao', $content);
        print nl2br("$tschau\n");
    ?>
</body>

</html>