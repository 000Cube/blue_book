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
    <h1>Blade While</h1>

    <p>whileディレクティブの例</p>
        <ol>
            @php
                $counter = 0;
            @endphp
            @while($counter < count($data))
            <li>{{$data[$counter]}}</li>
            @php
                $counter++;
            @endphp
            @endwhile
        </ol>

</body>
</html>