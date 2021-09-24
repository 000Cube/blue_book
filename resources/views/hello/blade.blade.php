<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello/Blade</title>
    <style>
        body {font-size: 16pt; color: #999;}
        h1 {font-size: 100pt; text-align: right; color: #f6f6f6; margin: -50px 0px -100px 0px;}
    </style>
</head>
<body>
    <h1>Blade Template</h1>
    @isset ($msg)
        <p>こんにちは{{$msg}}さん！</p>
    @else
        <p>何か入力してください</p>
    @endisset
    
    <form action="/hello/blade" method="POST">
        {{ csrf_field() }}
        <input type="text" name="msg">
        <input type="submit">
    </form>
</body>
</html>