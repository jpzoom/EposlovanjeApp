@extends('admin.layout.admin')

@section('content')

<h3>Dodaj proizvod</h3>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
    
    

    {!! Form::open(['route' => 'product.store', 'method' => 'post', 'files' => true]) !!}

        <div class="form-group">
            {{ Form::label('name', 'Naziv') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div> 

        <div class="form-group">
            {{ Form::label('description', 'Opis') }}
            {{ Form::text('description', null, array('class' => 'form-control')) }}
        </div> 

        <div class="form-group">
            {{ Form::label('size', 'Veličina') }}
            {{ Form::select('size', ['extrasmall' => 'Extra small', 'small' => 'Small', 'medium' => 'Medium', 'large' => 'Large', 'extralarge' => 'Extra Large'], null, ['class' => 'form-control', 'placeholder' => 'Odaberite veličinu']) }}
        </div>

        <div class="form-group">
            {{ Form::label('category_id', 'Kategorije') }}
            {{ Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Odaberite kategoriju']) }}
        </div>

        <div class="form-group">
                {{ Form::label('price', 'Cijena') }}
                {{ Form::text('price', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('image', 'Slika') }}
            {{ Form::file('image', null, array('class' => 'form-control')) }}
        </div> 
    {{ Form::submit('Potvrdi unos', array('class' => 'btn btn-default')) }}
    {!! Form::close() !!}
    </div>
</div>

@endsection