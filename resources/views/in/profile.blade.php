@extends('tem')
@section('section')

<style>
    span{
        display: flex;
    padding: 2%;
    justify-content: center;
    }
</style>
<br>
profile
<br>
{{-- name : {{ session('ad')}} --}}
<br>
{{-- id : {{ session('userID') }} --}}
<br><br><br>
@foreach ($data as $tak)
<span> Ad : {{ $tak->name }} </span><br>
<span>Soyad : {{ $tak->soyad }} </span><br>
<span>Nickname : {{ $tak->nickname }} </span><br>
<span>yas : {{ $tak->yas }} </span><br>
<span>insatgram : {{ $tak->insta }} </span><br>
<span>Telfon : {{ $tak->telfon }} </span><br>
<span>Sharj : {{ $tak->charge }} </span><br>
<span>PV : {{ $tak->pv }} </span><br>
@endforeach
<br><br>
{{-- <a href=""><button>Edit</button></a> --}}
@endsection
