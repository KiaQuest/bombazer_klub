@extends('tem')
@section('section')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        a {
            display: contents
        }

        .col-md-4 {
            /* margin: auto; */
            width: unset;
            flex-basis: initial;
        }

        .jc {
            justify-content: center;
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
            float: inline-end;
        }
    </style>
    <div class="back"><a href="{{ route('kateqory') }}"><button class="kategoryButton">Kategoria</button></a></div>
    <h1>Klublar</h1><br><br><br>

    <div class="container">
        <div class="row jc">
            {{-- {{ dd($colors) }} --}}
            @foreach ($klublar as $klub)
                <div class="col-md-4">
                    <a href="{{ route('clubin', [$klub->id]) }}">
                        <div class="card @if ($klub->group != 9 and $klub->group != 10) {{ 'text-white' }} @endif mb-3"
                            style="max-width: 18rem;background-color:{{ $klub->color }}">
                            <div class="card-header">{{ $klub->name }} <kbd>{{ $klub->members }}</kbd></div>
                            <div class="card-body">
                                <h5 class="card-title">Primary card title</h5>
                                <p class="card-text">{{ $klub->des }}Some quick example text to build on the card title
                                    and make up the bulk of
                                    the card's content.</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach




            @foreach ($klublar2 as $g1)
                <div class="col-md-4">
                    <a href="{{ route('clubin', [$g1->id]) }}">
                        <div class="card text-white mb-3" style="max-width: 18rem;background-color:{{ $mainColor }}">
                            <div class="card-header">{{ $g1->name }} <kbd>{{ $g1->members }}</div>
                            <div class="card-body">
                                <h5 class="card-title">Secondary card title</h5>
                                <p class="card-text">{{ $g1->des }}Some quick example text to build on the card title
                                    and make up the bulk of
                                    the card's content.</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
@endsection
