@extends('tem')
@section('section')
    <style>
        /* span {
            display: flex;
            justify-content: center;
        } */
        button{
            margin: 1%;
        }

        @media all and (max-width: 800px) {
            button {
                margin: 2%;
            }
        }
    </style>
    <br>
    <h2> Ozv olduğum Klublar </h2>
    <br>
    {{-- name : {{ session('ad')}} --}}
    <br>
    {{-- id : {{ session('userID') }} --}}
    <br><br><br>
    @foreach ($data as $tak)
        {{-- <span>ID : {{ $tak->club_id }} </span> --}}
         {{-- <span>Ad : {{ $tak->name }} </span> --}}
         {{-- <span>Gurup : {{ $tak->group }} </span> --}}
         <a href="klubice/{{ $tak->club_id }}"><button> {{ $tak->name }} </button></a><br>


    @endforeach
    <br><br>
    {{-- <a href=""><button>Edit</button></a> --}}
@endsection
