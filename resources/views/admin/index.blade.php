@extends('admin.layout.admin')
@section('content')
    <h3>Dobar dan, {{Auth::user()->name}}</h3>
@endsection