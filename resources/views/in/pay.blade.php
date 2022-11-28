@extends('tem')
@section('section')

<h1>Azer alişe</h1>
<br><br>
<h2>hər Azer 1000 tumande</h2>
<br><br>
<form method="post" action="{{ route('shop') }}">

    {{csrf_field()}}

    <button type="submit" value="200000" name="inp1">20 Azer<br> 20,000</button>
    <button type="submit" value="450000" name="inp1">50 Azer<br> 45,000</button>
    <button type="submit" value="850000" name="inp1">100 Azer<br> 85,000</button>
    <button type="submit" value="8000000" name="inp1">premium<br> 800,000</button>

    </form>
@endsection
