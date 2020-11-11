<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- hiden navigasi -->
<!-- end hiden navigasi -->
    <!-- Required meta tags -->
   
   @include('section.assets')


    <title>Lapak Kayong</title>
  </head>
  <body>
    <!-- header -->

      @include('section.header')

    <!-- end header -->
<!-- Banner !-->
<div class="banner">
  <div class="container-fluid">
    <div class="row p-2">
      <div class="banner-1">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{url('public')}}/assets/banner/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{url('public')}}/assets/banner/3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{url('public')}}/assets/banner/2.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="banner-2">
        <div id="banner2" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#banner2" data-slide-to="0" class="active"></li>
            <li data-target="#banner2" data-slide-to="1"></li>
            <li data-target="#banner2" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{url('public')}}/assets/banner/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{url('public')}}/assets/banner/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{url('public')}}/assets/banner/2.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#banner2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#banner2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end banner -->

<!--head kategori -->
<div class="container-fluid">
  <div class="head-line my-2">
    <div class="row">
      <div class="col-md-12">
        <div class="ml-3 ">
          <h5>Kategori</h5>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- isi kategori -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 my-3">
      <div class="kategori">
         
      <a href="{{url('detail')}}">
        <div class="kategori-box">
          <img src="{{url('public')}}/assets/kategori/1.png">
          <div class="text-center pt-2">
            <p>Fasion Wanita</p>
          </div>
        </div>
      </a>

      <a href="">
      <div class="kategori-box">
          <img src="{{url('public')}}/assets/kategori/3.png">
          <div class="text-center pt-2">
            <p>Laptop / komputer</p>
          </div>
        </div>
      </a>

      <a href="">
      <div class="kategori-box">
          <img src="{{url('public')}}/assets/kategori/4.jpg">
          <div class="text-center pt-2">
            <p>Handphone</p>
          </div>
        </div>
      </a>
      <a href="">
      <div class="kategori-box">
          <img src="{{url('public')}}/assets/kategori/5.png">
          <div class="text-center pt-2">
            <p>Pakaian Anak</p>
          </div>
        </div>
      </a>
      <a href="">
      <div class="kategori-box">
          <img src="{{url('public')}}/assets/kategori/6.jpg">
          <div class="text-center pt-2">
            <p>Sepatu Pria</p>
          </div>
        </div>
      </a>
      <a href="">
      <div class="kategori-box">
          <img src="{{url('public')}}/assets/kategori/7.jpg">
          <div class="text-center pt-2">
            <p>Aksesoris</p>
          </div>
        </div>
      </a>
      <a href="">
      <div class="kategori-box">
          <img src="{{url('public')}}/assets/kategori/8.jpg">
          <div class="text-center pt-2">
            <p>Elektronik</p>
          </div>
        </div>
      </a>
      <a href="">
      <div class="kategori-box">
          <img src="{{url('public')}}/assets/kategori/9.png">
          <div class="text-center pt-2">
            <p>Hobby Pria</p>
          </div>
        </div>
      </a>
      <a href="">
      <div class="kategori-box">
          <img src="{{url('public')}}/assets/kategori/10.png">
          <div class="text-center pt-2">
            <p>Tas Wanita</p>
          </div>
        </div>
      </a>

       <a href="">
      <div class="kategori-box">
          <img src="{{url('public')}}/assets/kategori/makanan.png">
          <div class="text-center pt-2">
            <p>Tas Wanita</p>
          </div>
        </div>
      </a>
      <a href="">
      <div class="kategori-box">
          <img src="{{url('public')}}/assets/kategori/makanan.png">
          <div class="text-center pt-2">
            <p>Tas Wanita</p>
          </div>
        </div>
      </a>

       <a href="">
      <div class="kategori-box">
          <img src="{{url('public')}}/assets/kategori/makanan.png">
          <div class="text-center pt-2">
            <p>Tas Wanita</p>
          </div>
        </div>
      </a>
      </div>

       <a href="">
      <div class="kategori-box">
          <img src="{{url('public')}}/assets/kategori/makanan.png">
          <div class="text-center pt-2">
            <p>Tas Wanita</p>
          </div>
        </div>
      </a>
      </div>
      </div>
   



    </div>
  </div>
</div>

<!--head Produk -->
<div class="container-fluid">
  <div class="head-line my-2">
    <div class="row">
      <div class="col-md-12">
        <div class="ml-3 ">
          <h5>Produk Terbaru</h5>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- isi -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 my-3">

     <a href="{{url('detail')}}"> 
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/2.jpeg">
         <div class="p-2">
            <h4>Kemeja Pria</h4>
            <h5>Stock: 100 Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 90.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}"> 
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/5.jpg">
         <div class="p-2">
            <h4>Oppo Reno 4</h4>
            <h5>Stock: 6 Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 4.999.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/4.jpg">
         <div class="p-2">
            <h4>Kemeja Pria Panjang</h4>
            <h5>Stock: 50 Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 120.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/3.jpg">
         <div class="p-2">
            <h4>Sepatu Wanita</h4>
            <h5>Stock: Jumlah Produk Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 90.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/1.jpg">
         <div class="p-2">
            <h4>Pakaian Anak</h4>
            <h5>Stock: Jumlah Produk Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 90.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/2.jpg">
         <div class="p-2">
            <h4>Sepatu wanita</h4>
            <h5>Stock: Jumlah Produk Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 90.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/6.jpg">
         <div class="p-2">
            <h4>Nama Produk</h4>
            <h5>Stock: Jumlah Produk Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 90.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/7.jpg">
         <div class="p-2">
            <h4>Nama Produk</h4>
            <h5>Stock: Jumlah Produk Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 90.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/9.jpg">
         <div class="p-2">
            <h4>Nama Produk</h4>
            <h5>Stock: Jumlah Produk Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 90.000</h6>
         </div>
      </div>
     </a> 

      <a href="{{url('detail')}}"> 
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/5.jpg">
         <div class="p-2">
            <h4>Oppo Reno 4</h4>
            <h5>Stock: 6 Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 4.999.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/4.jpg">
         <div class="p-2">
            <h4>Kemeja Pria Panjang</h4>
            <h5>Stock: 50 Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 120.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/3.jpg">
         <div class="p-2">
            <h4>Sepatu Wanita</h4>
            <h5>Stock: Jumlah Produk Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 90.000</h6>
         </div>
      </div>
     </a> 

      <a href="{{url('detail')}}"> 
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/5.jpg">
         <div class="p-2">
            <h4>Oppo Reno 4</h4>
            <h5>Stock: 6 Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 4.999.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/4.jpg">
         <div class="p-2">
            <h4>Kemeja Pria Panjang</h4>
            <h5>Stock: 50 Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 120.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/3.jpg">
         <div class="p-2">
            <h4>Sepatu Wanita</h4>
            <h5>Stock: Jumlah Produk Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 90.000</h6>
         </div>
      </div>
     </a> 

      <a href="{{url('detail')}}"> 
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/5.jpg">
         <div class="p-2">
            <h4>Oppo Reno 4</h4>
            <h5>Stock: 6 Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 4.999.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/4.jpg">
         <div class="p-2">
            <h4>Kemeja Pria Panjang</h4>
            <h5>Stock: 50 Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 120.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/3.jpg">
         <div class="p-2">
            <h4>Sepatu Wanita</h4>
            <h5>Stock: Jumlah Produk Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 90.000</h6>
         </div>
      </div>
     </a> 

      <a href="{{url('detail')}}"> 
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/5.jpg">
         <div class="p-2">
            <h4>Oppo Reno 4</h4>
            <h5>Stock: 6 Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 4.999.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/4.jpg">
         <div class="p-2">
            <h4>Kemeja Pria Panjang</h4>
            <h5>Stock: 50 Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 120.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/3.jpg">
         <div class="p-2">
            <h4>Sepatu Wanita</h4>
            <h5>Stock: Jumlah Produk Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 90.000</h6>
         </div>
      </div>
     </a> 

      <a href="{{url('detail')}}"> 
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/5.jpg">
         <div class="p-2">
            <h4>Oppo Reno 4</h4>
            <h5>Stock: 6 Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 4.999.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/4.jpg">
         <div class="p-2">
            <h4>Kemeja Pria Panjang</h4>
            <h5>Stock: 50 Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 120.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/3.jpg">
         <div class="p-2">
            <h4>Sepatu Wanita</h4>
            <h5>Stock: Jumlah Produk Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 90.000</h6>
         </div>
      </div>
     </a> 

      <a href="{{url('detail')}}"> 
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/5.jpg">
         <div class="p-2">
            <h4>Oppo Reno 4</h4>
            <h5>Stock: 6 Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 4.999.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/4.jpg">
         <div class="p-2">
            <h4>Kemeja Pria Panjang</h4>
            <h5>Stock: 50 Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 120.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/3.jpg">
         <div class="p-2">
            <h4>Sepatu Wanita</h4>
            <h5>Stock: Jumlah Produk Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 90.000</h6>
         </div>
      </div>
     </a> 

      <a href="{{url('detail')}}"> 
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/5.jpg">
         <div class="p-2">
            <h4>Oppo Reno 4</h4>
            <h5>Stock: 6 Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 4.999.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/4.jpg">
         <div class="p-2">
            <h4>Kemeja Pria Panjang</h4>
            <h5>Stock: 50 Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 120.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/3.jpg">
         <div class="p-2">
            <h4>Sepatu Wanita</h4>
            <h5>Stock: Jumlah Produk Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 90.000</h6>
         </div>
      </div>
     </a> 

      <a href="{{url('detail')}}"> 
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/5.jpg">
         <div class="p-2">
            <h4>Oppo Reno 4</h4>
            <h5>Stock: 6 Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 4.999.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/4.jpg">
         <div class="p-2">
            <h4>Kemeja Pria Panjang</h4>
            <h5>Stock: 50 Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 120.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/3.jpg">
         <div class="p-2">
            <h4>Sepatu Wanita</h4>
            <h5>Stock: Jumlah Produk Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 90.000</h6>
         </div>
      </div>
     </a> 

      <a href="{{url('detail')}}"> 
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/5.jpg">
         <div class="p-2">
            <h4>Oppo Reno 4</h4>
            <h5>Stock: 6 Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 4.999.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/4.jpg">
         <div class="p-2">
            <h4>Kemeja Pria Panjang</h4>
            <h5>Stock: 50 Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 120.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/3.jpg">
         <div class="p-2">
            <h4>Sepatu Wanita</h4>
            <h5>Stock: Jumlah Produk Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 90.000</h6>
         </div>
      </div>
     </a> 

      <a href="{{url('detail')}}"> 
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/5.jpg">
         <div class="p-2">
            <h4>Oppo Reno 4</h4>
            <h5>Stock: 6 Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 4.999.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/4.jpg">
         <div class="p-2">
            <h4>Kemeja Pria Panjang</h4>
            <h5>Stock: 50 Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 120.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/3.jpg">
         <div class="p-2">
            <h4>Sepatu Wanita</h4>
            <h5>Stock: Jumlah Produk Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 90.000</h6>
         </div>
      </div>
     </a> 

      <a href="{{url('detail')}}"> 
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/5.jpg">
         <div class="p-2">
            <h4>Oppo Reno 4</h4>
            <h5>Stock: 6 Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 4.999.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/4.jpg">
         <div class="p-2">
            <h4>Kemeja Pria Panjang</h4>
            <h5>Stock: 50 Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 120.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/3.jpg">
         <div class="p-2">
            <h4>Sepatu Wanita</h4>
            <h5>Stock: Jumlah Produk Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 90.000</h6>
         </div>
      </div>
     </a> 

      <a href="{{url('detail')}}"> 
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/5.jpg">
         <div class="p-2">
            <h4>Oppo Reno 4</h4>
            <h5>Stock: 6 Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 4.999.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/4.jpg">
         <div class="p-2">
            <h4>Kemeja Pria Panjang</h4>
            <h5>Stock: 50 Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 120.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/3.jpg">
         <div class="p-2">
            <h4>Sepatu Wanita</h4>
            <h5>Stock: Jumlah Produk Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 90.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}"> 
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/10.jpg">
         <div class="p-2">
            <h4>Nama Produk</h4>
            <h5>Stock: Jumlah Produk Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 90.000</h6>
         </div>
      </div>
     </a> 
    </div>
  </div>
</div>

<!-- footer -->
<div class="footer fixed">
  <div class="container">
        <div class="row">
          <div class="col-md-12 my-5">
          <p class="text-white text-center">&copy; Copyright 2020 | Built By Tim IT <b>Naldy</b>
          </div>
        </div>
      </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.13.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>