<!DOCTYPE html>
<html lang="en">
  <head>
<!-- end hiden navigasi -->
    <!-- Required meta tags -->
   

   @include('section.assets')


    <title>Lapak Kayong</title>
  </head>
  <body>
    <!-- header -->
    @include('section.header')

    <!-- end header -->
<!-- isi produk !-->
<div class="container">
  <div class="row">
    <div class="col-md-12 my-3">
      <div class="head-line">
        <div class="ml-3 pt-2 pb-2">
         <b>Sha-Sha Olshop</b>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
      <div class="col-md-6 pb-3">
        <div class="detail-box shadow">
          <img src="{{url('public')}}/assets/produk/1.jpg">
        </div>
      </div>
      <div class="col-md-6">
        <div class="head-line">
          <div class="ml-3">
            Detail Produk
          </div>
        </div>

        <table class="table">
          <tr>
            
            <td>Nama Produk</td>
       
            <td>{{$detail->nama}}</td>
        
          </tr>
          <tr>
            <td>Lokasi Produk</td>
            <td>Ketapang</td>
          </tr>
          <tr>
            <td>Jumlah Produk</td>
            <td> 7 Unit</td>
          </tr>
          <tr>
            <td>Ukuran Produk</td>
            <td>S</td>
          </tr>
          <tr>
            <td>Diskripsi</td>
            <td>Pakaian Anak buat umur 8 tahun, barang bagus, bahan catton</td>
          </tr>

          <tr>
            <td>Harga</td>
            <td style="color: red;font-weight: bold;">Rp. 90.000</td>
          </tr>
    
          <tr>
            <td><a href="" class="btn btn-danger shadow"><img src="{{url('public')}}/assets/icon/keranjang.png" width="20px"> Beli</a>
            </td>
            <td></td>
          </tr>
        </table>
      </div>
  </div>


</div>

<!-- end isi produk -->
<!-- footer -->
    @include('section.footer')


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.13.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>