@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{url('/investigador/'.$investigador->id)}}" method="post">
@csrf
{{ method_field('PATCH')}}
@include('investigador.form',['modo'=>'Editar'])

</form>
</div>
@endsection