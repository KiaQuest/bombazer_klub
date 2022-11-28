@extends('tem')
@section('section')

<style>
     @media all and (max-width: 800px) {
            .s1{padding: 10%;
            font-size: x-large;
            }
        }
</style>
<br>
statistika<br><br><br><br>

@php
    $a = $countGroup * $countClub;
    $b = $a * 90;
    $c = $countUser * 300;
    $d = $c + $b;
@endphp

İstifadəçilərin sayı : {{ $countUser }} <br>
Kategory sayı : {{ $countGroup }} <br>
Klub sayı : {{ $countClub }} <br>
<br><br><br><br>
<div>Veb saytin giriş xərcinin formulu</div> = <div>[( Kategory sayı * Klub sayı ) * 90]</div> +
    <div>( İstifadəçilərin sayı * 300)</div> = {{ $d }}
<br><br><br>
*ama felən bu verjendə giriş müftəde*
@endsection
