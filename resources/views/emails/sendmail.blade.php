<!DOCTYPE html>
<html>
<head>
    <title>Soyomboprinting.com сайтаар зочлогч</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <br><strong>Холбогдох төрөл</strong>: {{$details['infotype']}}
    <br><strong>Харилцагч нэр</strong>: {{$details['username']}}
    <br><strong>Харилцагч утас</strong>: {{$details['phone']}}
    <br><strong>Цахим хаяг</strong>: {{$details['email']}}
    <br><strong>Бичвэр</strong>: {{$details['addition']}}
    <br><strong>Төрөл</strong>: {{$details['proprice']}}
    <br><strong>Эх</strong>:

    @foreach ($details['file'] as $item)
        {{$item}}<br>
    @endforeach
</body>
</html>
