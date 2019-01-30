@extends('layout.main')

@section('content')
<section class="hero text-center">
            <br/>
            <br/>
            <br/>
            <br/>
            <h2 >
                <strong>
                    Pozdrav! Dobrodošli u Veleshop!
                </strong>
            </h2>
            <br>
            <a href="{{url('/proizvodi')}}">
            <button class="button large">Pregledajte izbor proizvoda</button></a>
        </section>
        <br/>
        <div class="subheader text-center">
             <h2>
            Najnoviji proizvodi Veleshopa
        </h2>
        </div>
       
        <!-- Latest SHirts -->
        <div class="row">

            @forelse ($proizvodi->chunk(4) as $chunk)
            @foreach ($chunk as $proizvod)   
            <div class="small-3 columns">
                    <div class="item-wrapper">
                        <div class="img-wrapper">
                        <a href="{{route('cart.addItem', $proizvod->id)}}" class="button expanded add-to-cart">
                                Dodaj u košaricu
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
            
            @endforelse
            @endforeach
        </div>
        <!-- Footer -->
        <br>


@endsection