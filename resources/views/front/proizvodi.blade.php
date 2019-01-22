@extends('layout.main')

@section('title', 'Proizvodi')
@section('content')
<!-- products listing -->
         <!-- Latest SHirts -->
         <div class="row">

                @forelse ($proizvodi as $proizvod)
                <div class="small-3 columns">
                        <div class="item-wrapper">
                            <div class="img-wrapper">
                            <a href="{{route('cart.addItem', $proizvod->id)}}" class="button expanded add-to-cart">
                                    Add to Cart
                                </a>
                                <a href="#">
                                    <img src="{{url('images', $proizvod->image)}}"/>
                                </a>
                            </div>
                            <a href="{{route('proizvod')}}">
                                <h3>
                                    {{$proizvod -> name}}
                                </h3>
                            </a>
                            <h5>
                                {{$proizvod -> price}} kn
                            </h5>
                            <p>
                                {{$proizvod -> description}}
                            </p>
                        </div>
                    </div>
                
                @empty
                   <h3>Nema proizvoda</h3> 
                @endforelse

        </div>

@endsection