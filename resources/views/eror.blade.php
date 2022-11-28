@if ($errors->any())
<div class="alert alert-danger">
@foreach ($errors->all() as $error)
<p style="color: red">{{ $error }}</p>
@endforeach
</div>
@endif
