<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BombAzzer Login</title>
    <style>
        input {
            border-bottom-color: gainsboro;
            border-right-color: gainsboro;
            border-top-color: ghostwhite;
            border-left-color: ghostwhite;
        }

        .s1 {
            text-align: center;
            padding: 6%;
        }
        @media all and (min-width: 800px) {
        .s1 input {
            padding: 10px;
            margin: 1.5%;
        }
        }
        .s1 input{
            border-radius: 50px;
        }
        hr {
            width: 200px;
            opacity: 20%;
        }
        .create {
            opacity: 60%;
            cursor: none;
        }

        @media all and (max-width: 800px) {
            .s2 {
                padding: 40% 0;
            }
            h3 {
                padding: 1% 0 5%;
            }
            .b1 , .b2 , .b3{
                padding: 4%;
                margin: 5%;
            }

        }
    </style>
</head>

<body style="background-color: darkslategray3">
    <div class="s1 s2">
        <h1>BOMBAZER</h1>
        <h3>Klub</h3>
        <form action="{{ route('login') }}" method="post">
            @csrf
            @include('eror')
            <input type="text" placeholder="Name" name="name" value="{{ old('name') }}" class="b1"><br>
            <input type="password" placeholder="Pass" name="password" value="{{ old('password') }}" class="b1"><br>
            <input type="submit" value="Bomb" class="b2">
        </form>
        <hr>
        <a href="{{ route('m1') }}"><input class="b3" type="button" class="create" value="Bizden ol"></a>
        @if (session('status'))
            <p style="color: darkseagreen">{{ session('status') }}</p>
        @endif
        @if (session('field'))
            <p style="color: chocolate">{{ session('field') }}</p>
        @endif

        <h5>version : 1.0.1</h5>
    </div>
</body>

</html>
