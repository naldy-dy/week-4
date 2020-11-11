@php
  function checkRouteActive($route){
  if(Route::current()->uri == $route) return 'active';
}
@endphp

<div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="{{url('public')}}/assets/img/logo-small.png">
          </div> 
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          Lapak Kayong
          <!-- <div class="logo-image-big">
            <img src=".{{url('public')}}/assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="{{checkRouteActive('beranda')}}">
            <a href="{{url('beranda')}}">
              <i class="nc-icon nc-shop"></i>
              <p>Beranda</p>
            </a>
          </li>
          <li class="{{checkRouteActive('produk-admin')}}">
            <a href="{{url('produk-admin')}}">
              <i class="nc-icon nc-box-2"></i>
              <p>Data Produk</p>
            </a>
          </li>
           <li class="{{checkRouteActive('jual-produk')}}">
            <a href="{{url('jual-produk')}}">
              <i class="nc-icon nc-cart-simple"></i>
              <p>Jual Produk</p>
            </a>
          </li>
             <li class="{{checkRouteActive('histori-penjualan')}}">
            <a href="{{url('histori-penjualan')}}">
              <i class="nc-icon nc-money-coins"></i>
              <p>Histori Penjualan</p>
            </a>
          </li>
        </ul>
      </div>
    </div>