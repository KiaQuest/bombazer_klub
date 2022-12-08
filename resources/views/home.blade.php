@extends('tem')
@section('section')


<style>

    .mid{
       width: 70%;
       text-align: left;
       margin: auto;
    }
    a{
       margin: 1%;
    }
    li{
        font-size: larger;
    }
    .back{
            text-align: left;
            margin-left: 5%;
            margin-top: -5%;
        }

        .kategoryButton{
            border-top-left-radius: 25px;
            border-bottom-right-radius: 25px;
        }


        @media all and (max-width: 800px) {

            h1{
                margin: 15%;
            }

            .s1 {
            padding: 10%;
            }
            li{
                padding: 5%;
            }

        }

</style>

<div class="back"><a href="{{ route('logout') }}"><button class="kategoryButton">Çıxış </button></a></div>

<h1>ana səfhəyə xoş gəlipsiz</h1>
<div class="mid">
<ul>
    <a href="{{ route('prof') }}">
        <li>Profil</li>
    </a>
    <a href="{{ route('stats') }}">
        <li>Statistika</li>
    </a>
    <a href="{{ route('kateqory') }}">
        <li>Klublar</li>
    </a>
    <a href="{{ route('pay') }}">
        <li>Azer alişe</li>
    </a>
    <a href="{{ route('qayide') }}">
        <li>Qaydalar <kbd>< Rules ></kbd></li>
    </a>
    <a href="{{ route('forum') }}">
        <li>Forum <kbd>< anjoman ></kbd></li>
    </a>
    <a href="{{ route('joined') }}">
        <li>ozv olduğum</li>
    </a>
</ul>
</div>
@if(Session::has('buy'))
<p style="color: darkorange">{{ Session::get('buy') }}</p>
@endif
{{-- {{ var_dump(session()->all()); }} --}}

@endsection
