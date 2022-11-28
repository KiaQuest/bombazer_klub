<!DOCTYPE html>
<html lang="en">

@if( session('must_login') != 'yes' )
<script> window.location.href = "{{url('/')}}";</script>
@endif


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BombAzer Klub</title>
    <style>
        .s1 {
            text-align: center;
            padding: 6%;
        }

        .ana {
            margin: 3% 10% 0;
            border-top-right-radius: 20px;
            border-bottom-left-radius: 20px;
        }


        @media all and (max-width: 800px) {

            .ana {
            margin: 20% 10% 0;
        }

        }
    </style>
</head>

<body>

    <a href="{{ route('ana') }}"><button class="ana">Ana Səfhə</button></a>
    <div class="s1">
        @yield('section')
    </div>
</body>

</html>
