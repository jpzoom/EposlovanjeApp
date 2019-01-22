{{-- Side Navigation --}}
<div class="col-md-2">
        <div class="sidebar content-box" style="display: block;">
            <ul class="nav">
                <!-- Main menu -->
                <li class="current"><a href="{{route('admin.index')}}"><i class="glyphicon glyphicon-home"></i>
                        Dashboard</a></li>
                <li class="submenu">
                    <a href="#">
                        <i class="glyphicon glyphicon-list"></i> Proizvodi
                        <span class="caret pull-right"></span>
                    </a>
                    <!-- Sub menu -->
                    <ul>
                        <li><a href="{{route('product.index')}}">Proizvodi</a></li>
                        <li><a href="{{route('product.create')}}">Dodaj proizvod</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#">
                        <i class="glyphicon glyphicon-list"></i> Kategorija
                        <span class="caret pull-right"></span>
                    </a>
                    <!-- Sub menu -->
                    <ul>
                        <li><a href="{{route('category.index')}}">Dodaj kategoriju</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#">
                        <i class="glyphicon glyphicon-list"></i> Narudžbe
                        <span class="caret pull-right"></span>
                    </a>
                    <!-- Sub menu -->
                    <ul>
                        <li><a href="{{url('admin/orders/pending')}}">Zaprimljenje</a></li>
                        <li><a href="{{url('admin/orders/delivered')}}">Dovršene</a></li>
                        <li><a href="{{url('admin/orders')}}">Sve</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div> <!-- ADMIN SIDE NAV-->