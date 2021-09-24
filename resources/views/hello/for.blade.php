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
    <h1>Blade For</h1>
    <p>forディレクティブの例</p>

    <ol>
    @for ($i = 1; $i < 100; $i++)
    @if ($i % 2 == 1)
        @continue
    @elseif ($i <= 10)
        <li>No,{{ $i }}
    @else
        @break
    @endif
    @endfor
    </ol>

    <ol>
        @for ($i = 1; $i < 100; $i++)
            @if ($i % 3 == 0 && $i % 5 == 0)
                <li>No.{{$i}} FizzBuzz
            @elseif($i % 3 == 0)
                <li>No.{{$i}} Buzz
            @elseif($i % 5 == 0)
                <li>No.{{$i}} Fizz
            @else
                <li>No.{{$i}}
            @endif
        @endfor
    </ol>

</body>
</html>