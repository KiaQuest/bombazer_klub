<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sign up</title>
    <style>
           .s1{
        text-align: center;
        padding: 3% 0 0;
             }
             input {
             margin: 1%;
             padding: 10px;
            /* margin: 1.5%; */
            border-radius: 50px;
            }
            .part {
             margin: 1%;
            }
            p{
                padding-bottom: 2%;
            }
            .s1 span{
                color: rgb(167, 26, 26);
                opacity: 24%;
            }

        input {
            border-bottom-color: gainsboro;
            border-right-color: gainsboro;
            border-top-color: ghostwhite;
            border-left-color: ghostwhite;
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

        @media all and (max-width: 800px) {
            .s1 {
                padding: 7% 0 0;
            }
            input[type="text"] {
                padding: 4%;
                margin: 3%;
            }
            input[type="submit"]{
                padding: 4%;
                margin: 5%;
            }
            .part {
                margin: 1%;
                padding: 2%;
            }

        }

    </style>
</head>
<body>
    <form action="{{ route('m2') }}" method="post">
    <div class="s1">
    <p>Qrupumuza xoş gəlipiz</p>
    @csrf
    @include('eror')
    <div class="part"><label for="num1"> Ad</label><span> *</span><br> <input type="text" placeholder="sth" name="name" value="{{ old('name') }}"><br></div>
    <div class="part"><label for="num1"> SoyAd</label> <br><input type="text" placeholder="sth" name="soyad" value="{{ old('soyad') }}"><br></div>
    <div class="part"><label for="num1"> Password</label><span> *</span> <br><input type="text" placeholder="sth" name="password"><br></div>
    <div class="part"><label for="num1"> NickName</label><span> *</span> <br><input type="text" placeholder="sth" name="nickname" value="{{ old('nickname') }}"><br></div>
    <div class="part"><label for="num1"> Telfon Numarasi</label> <br><input type="text" placeholder="09120001122" name="telfon" value="{{ old('telfon') }}"><br></div>
    <div class="part"><label for="num1"> Yaş</label><br> <input type="text" placeholder="sth" name="yas" value="{{ old('yas') }}"><br></div>
    <div><label for="pv"> Heç kimə göstərmə </label> <input type="checkbox" placeholder="sth" name="pv" id="pv"></div><br>
    {{-- <label for="num1"> Ad </label> <input type="text" placeholder="sth"><br> --}}

<input type="submit">
</div>
</form>
</body>
</html>
