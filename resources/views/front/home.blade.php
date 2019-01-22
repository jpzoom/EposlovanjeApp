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
            
            @endforelse
            @endforeach
        </div>
        <!-- Footer -->
        <br>
<footer class="footer">
  <div class="row full-width">
    <div class="small-12 medium-4 large-4 columns">
      <i class="fi-laptop"></i>
      <p>Coded with love by Webdevmatics for educational purpose only</p>
    </div>
    <div class="small-12 medium-4 large-4 columns">
      <i class="fi-html5"></i>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit impedit consequuntur at! Amet sed itaque nostrum, distinctio eveniet odio, id ipsam fuga quam minima cumque nobis veniam voluptates deserunt!</p>
    </div>
    
    <div class="small-6 medium-4 large-4 columns">
      <h4>Follow Us</h4>
      <ul class="footer-links">
        <li><a href="https://github.com/webdevmatics">GitHub</a></li>
        <li><a href="#">Facebook</a></li>
        <li><a href="https://twitter.com/webdevmatics">Twitter</a></li>
      <ul>
    </div>
  </div>

@endsection