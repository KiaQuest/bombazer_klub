@extends('tem')
@section('section')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <style>
            .jc {
            justify-content: center;
        }
        span{
            font: initial;
            font-style: oblique;
        }
        .ozv{
            margin: 2%;
        }
        .ozvBTN{
            background-color: lime;
            border-radius: 8px;
        }

/* CSS */
.button-33 {
  background-color: #6affa0;
  border-radius: 100px;
  box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset,rgba(44, 187, 99, .15) 0 1px 2px,rgba(44, 187, 99, .15) 0 2px 4px,rgba(44, 187, 99, .15) 0 4px 8px,rgba(44, 187, 99, .15) 0 8px 16px,rgba(44, 187, 99, .15) 0 16px 32px;
  color: green;
  cursor: pointer;
  display: inline-block;
  font-family: CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;
  padding: 7px 20px;
  text-align: center;
  text-decoration: none;
  transition: all 250ms;
  border: 0;
  font-size: 16px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-33:hover {
  box-shadow: rgba(44,187,99,.35) 0 -25px 18px -14px inset,rgba(44,187,99,.25) 0 1px 2px,rgba(44,187,99,.25) 0 2px 4px,rgba(44,187,99,.25) 0 4px 8px,rgba(44,187,99,.25) 0 8px 16px,rgba(44,187,99,.25) 0 16px 32px;
  transform: scale(1.05) rotate(-1deg);
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
        kbd{
            opacity: 70%;
        }
        @media all and (max-width: 800px) {
            h1{
                margin: 10% 10% auto;
            }
        }
        </style>

<div class="back"><a href="{{ route('kateqory') }}"><button class="kategoryButton">Kategoria</button></a></div>
@foreach ($club as $klub)
<h1>{{ $klub->name }}</h1><br><br><br>

    <div class="container">
        <div class="row jc">
            {{-- {{ dd($colors) }} --}}

                <div class="col-md-10">
                    {{-- <a href="{{ route('clubin', [$klub->id]) }}"> --}}
                        <div class="card @if ($klub->group != 9 and $klub->group != 10) {{ 'text-white' }} @endif mb-3"
                            style="opacity: 90%;background-color:{{ $klub->color }}">
                            <div class="card-header">Klub adi : <span>{{ $klub->name }}</span></div>
                            <div class="card-body">
                                <h6 class="card-title">Klubun təgi : <span>{{ $klub->clubTag }}</span></h6>
                                <p class="card-text">Təsvir : <span>{{ $klub->des }}</span></p>
                                    <p>Grup : <span>{{ $klub->groupTag }}</span></p>
                                    <div>Qiymət : <span>{{ $klub->fee }} Azer</span></div>
                            </div>
                            @if ( $klub->status == 2)
                            <div><p><kbd>Coming Soon</kbd></p></div>
                            @endif
                            @if ( $X == 0 )
                            <div class="ozv"><a href="{{ route('ozv', [$klub->fee , $klub->id, $klub->league]) }}">
                                <button class="button-33" role="button">Ozv ol - <span>({{ $klub->fee }} Azer)</span></button></a></div>
                            @elseif ($X == 1)
                            <div class="ozv"><kbd> ozv olupsan </kbd></div>
                            @endif
                            {{-- ozvlar --}}
                        </div>
                    {{-- </a> --}}
{{-- {{ dd(session()) }} --}}
                    @if(Session::has('ozv'))
                    <p style="color: rgb(132, 138, 49)">{{ Session::get('ozv') }}</p>
                    @endif
                    @if(Session::has('ozvOlmade'))
                    <p style="color: rgb(231, 81, 236)">{{ Session::get('ozvOlmade') }}</p>
                    @endif
                </div>

            @endforeach



@endsection
