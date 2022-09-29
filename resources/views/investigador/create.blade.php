@extends('layouts.app')

@section('content')
<div class="container">
<form method="post" action="{{ url('/investigador')}}" enctype="multipart/form-data">
@csrf
@include('investigador.form',['modo'=>'Crear'])

</form>
</div>
@endsection