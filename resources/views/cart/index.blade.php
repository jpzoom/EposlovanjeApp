@extends('layout.main')

@section('content')

<div class="row">
<br>
<h3>Proizvodi u košarici</h3>

<table class="table table-hover">
    <thead>
        <tr>
            <th>Naziv</th>
            <th>Cijena</th>
            <th>Količina</th>
            <th>Veličina</th>
        </tr>
    </thead>
    <tbody>

        @foreach($cartItems as $cartItem)
        <tr>
            <td>{{$cartItem->name}}</td>
            <td>{{$cartItem->price}}</td>
            <td width = "50px">
                
                {!! Form::open(['route' => ['cart.update', $cartItem->rowId], 'method' => 'PUT']) !!}
                <input name = "qty" type="text" value = "{{$cartItem->qty}}">
                

            </td>

            <td>
                <div>
                        {{ Form::select('size', ['extrasmall' => 'Extra small', 'small' => 'Small', 'medium' => 'Medium', 'large' => 'Large', 'extralarge' => 'Extra Large'], $cartItem->options->has('size')?$cartItem->options->size:'' ) }}
                </div>
            </td>

            <td>
                    <input style="float:left;" type="submit" class = "button success" value="Potvrdi">
                    {!! Form::close() !!}
            </td>

            <td>
                <form action="{{route('cart.destroy', $cartItem->rowId)}}" method = "POST">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <input type="submit" class="button alert" value="Poništi">
                </form>
            </td>


        </tr>
        @endforeach
        <tr>
                <td></td>
                <td>
                    Porez: {{Cart::tax()}} kn<br>
                    Cijena prije poreza: {{Cart::subtotal()}} kn<br>
                    Ukupna cijena: {{Cart::total()}} kn
                </td>
                <td>Items: {{Cart::count()}}
                        <td></td>
                </td>
                
                <td></td>
                <td></td>
                
                
                
                <tr>

                    <td></td>
                    <td></td>
                    <td></td>
                <td><a href="{{url('/checkout')}}" class="button">Završi</a></td>
                    
                </tr>
</tr>



    </tbody>
</table>

</div>

@endsection