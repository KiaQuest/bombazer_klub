@extends('tem')
@section('section')
    <style>


        body {
                font-size: x-large;
            }

        @media all and (max-width: 800px) {
            .ss {

                width: 70%;
                margin: auto;
            }
        }
    </style>
    <br>
    İstifadəçilər<br><br><br><br>

    <div class="ss">
        @foreach ($users as $item)
           <button> {{ $item->nickname }} </button> 
           @if (!$loop->last)
{{ ',' }}
           @endif
        @endforeach
    </div>
@endsection
