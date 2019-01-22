<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>
            @yield('title', 'Prodavaonica')
        </title>
        <script src="https://js.stripe.com/v3/"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="{{asset('/dist/css/foundation.css')}}"/>
        <link rel="stylesheet" href="{{asset('/dist/css/app.css')}}"/>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">


    </head>
    <body>
        <div  class="top-bar">
            <div style="color:white" class="top-bar-left">
                <h4 class="brand-title">
                    <a href="{{route('front')}}">
                        <i class="fa fa-home fa-lg" aria-hidden="true">
                        </i>
                       Veleshop - vaše mjesto za kupnju
                    </a>
                </h4>
            </div>
            <div class="top-bar-right">
                <ol class="menu">
                    <li>
                        <a href="route{{('proizvodi')}}">
                            SHIRTS
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Kontakt
                        </a>
                    </li>
                    <li>
                    <a href="{{route('cart.index')}}">
                            <i class="fa fa-shopping-cart fa-2x" aria-hidden="true">
                            </i>
                            Košarica
                            <span class="alert badge">
                                {{Cart::count()}}
                            </span>
                        </a>
                    </li>
                </ol>
            </div>
        </div>


@yield('content')

<footer class="footer">
        <div class="row full-width">
          <div class="small-6 medium-4 large-4 columns">
            
            <ul>
                <br>
                <br>
                <br>
                <a href="https://www.veleri.hr/">Veleučilište u Rijeci</a>
                <br>
                <br>
                <a href="https://www.veleri.hr/?q=node/149">Internet tehnologije i E-poslovanje</a>
                <br>

            </ul>
            

          </div>
          <div class="small-12 medium-4 large-4 columns">
            <i class="fi-laptop"></i><br>

                    <a>Antonio Čupić</a>
                    <br>
                    <a>Josip Panić</a>
                    <br>
    

          </div>
          
          <div class="small-6 medium-4 large-4 columns">
            <h4>Follow Us</h4>
            <ul class="footer-links">
              <li><a href="https://dashboard.stripe.com/test/dashboard">Stripe</a></li>
              <li><a href="https://trello.com/b/rnNzY8Sl/internet-tehnologije-i-e-poslovanje">Trello</a></li>
              <li><a href="https://twitter.com/webdevmatics">Github</a></li>
            <ul>
          </div>
        </div>

</footer>
    
    <script src="{{URL::asset('/dist/js/vendor/jquery.js')}}"></script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript">
        Stripe.setPublishableKey('pk_test_yx0yHdd7TO7kaTP31sTEw1Uf');
    </script>
    <script src="{{URL::asset('/dist/js/app.js')}}"></script>
    </body>
</html>
