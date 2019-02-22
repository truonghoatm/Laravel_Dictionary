<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="{{route('DictionaryController')}}">
    <h1>Dictionary</h1>
    <p>@csrf</p>
    <input type="text" name="word" placeholder="Nhap tu can tim"><br/>
    <input type="submit" id="submit" value="Search"><br/>

</form>
</body>
</html>