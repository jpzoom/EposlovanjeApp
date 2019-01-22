@extends('layout.main')

@section('content')
    <br>
<div class="row">
    <div class="small-6 small-centered columns">
        <h3>Unesite informacije o lokaciji primitka</h3>

        {!! Form::open(['route' => 'address.store', 'method' => 'post']) !!}

        <div class="form-group">
            {{ Form::label('adresa', 'Adresa') }}
            {{ Form::text('adresa', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('grad', 'Grad') }}
            {{ Form::text('grad', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
                {{ Form::label('zemlja', 'Zemlja') }}
                {{ Form::text('zemlja', null, array('class' => 'form-control')) }}
            </div>
        <div class="form-group">
            {{ Form::label('zupanija', 'Županija') }}
            {{ Form::text('zupanija', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('zip', 'Poštanski broj') }}
            {{ Form::text('zip', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('phone', 'Telefonski broj') }}
            {{ Form::text('phone', null, array('class' => 'form-control')) }}
        </div>

        {{ Form::submit('Nastavite s plaćanjem', array('class' => 'button success')) }}
        {!! Form::close() !!}
    </div>


</div>


@endsection