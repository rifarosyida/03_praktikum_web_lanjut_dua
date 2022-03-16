@extends('masterview.content')

@section('content')

<section class="tm-welcome-section">
  {{-- Mengecek apakah DB sudah masuk --}}
  {{-- @dd($all_menu) --}}
    <div class="container tm-position-relative">
      <div class="tm-lights-container">
        <img src="{{ asset('asset/img/light.png') }}" alt="Light" class="light light-1">
        <img src="{{ asset('asset/img/light.png') }}" alt="Light" class="light light-2">
        <img src="{{ asset('asset/img/light.png') }}" alt="Light" class="light light-3">  
      </div>        
      <div class="row tm-welcome-content">
        <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="{{ asset('asset/img/header-line.png') }}" alt="Line" class="tm-header-line">&nbsp;Our Menus&nbsp;&nbsp;<img src="{{ asset('asset/img/header-line.png') }}" alt="Line" class="tm-header-line"></h2>
        <h2 class="gold-text tm-welcome-header-2">Aada Cafe</h2>
        <p class="white-text tm-welcome-description"><span class="gold-text"> Aada Cafe </span> menyediakan menu <span class="gold-text"> berkualitas</span> serta rasa yang nikmat. Dibuat dari tangan chef internasional yang dimiliki oleh AADA Cafe, membuat cita rasa dari setiap hidangan tidak perlu diragukan lagi. Bahan yang langsung di datangkan dari negara asal, sehingga memiliki rasa yang autentik.</p>
        <a href="#main" class="tm-more-button tm-more-button-welcome">Read More</a>      
      </div>
      <img src="{{ asset('asset/img/table-set.png') }}" alt="Table Set" class="tm-table-set img-responsive">  
    </div>      
  </section>
  <div class="tm-main-section light-gray-bg">
    <div class="container" id="main">
      <section class="tm-section row">
        <div class="col-lg-9 col-md-9 col-sm-8">
          <h2 class="tm-section-header gold-text tm-handwriting-font">Variety of Menus</h2>
          <h2>AADA Cafe</h2>
          <p class="tm-welcome-description"><span class="blue-text"> AADA Cafe </span> mampu meyakinkan konsumen bahwa AADA Cafe adalah cafe
            yang mempunyai kualitas produk baik dari layanan maupun menu utamanya sendiri
            yaitu kopi dari pada pesaing yang lain. AADA Cafe sekarang berkembang dengan
            pesat baik dari segi interior, tempat, lokasi maupun fasilitas, berikut gambar
            perbandingan AADA Cafe yang lama dan yang sekarang</p>
          <a href="#" class="tm-more-button margin-top-30">Read More</a> 
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 tm-welcome-img-container">
          <div class="inline-block shadow-img">
            <img src="{{ asset('asset/img/1.jpg') }}" alt="Image" class="img-circle img-thumbnail">  
          </div>              
        </div>            
      </section>          
      <section class="tm-section row">
        <div class="col-lg-12 tm-section-header-container margin-bottom-30">
          <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="tm-site-logo"> Our Menus</h2>
          <div class="tm-hr-container"><hr class="tm-hr"></div>
        </div>

@include('masterview.sidebar')

<div class="tm-menu-product-content col-lg-9 col-md-9"> <!-- menu content -->
  <div class="jenis-menu">
    <a class="btn-primary" href="{{ url('menu/minuman') }}">Minuman</a>
    <a class="btn-primary" href="{{ url('menu/makanan') }}">Makanan</a>
  </div>
    @foreach ($all_menu as $objek)
    <div class="tm-product">
      <img src="{{ asset($objek->gambar) }}" alt="Product" width="136px">
      <div class="tm-product-text">
        <h3 class="tm-product-title">{{ $objek->nama }}</h3>
        <p class="tm-product-description">{{ $objek->deskripsi }} </p>
        <br><strong>Stok : {{ $objek->stok }}</strong>
        
      </div>
      <div class="tm-product-price">
        <a href="#" class="tm-product-price-link tm-handwriting-font"><span class="tm-product-price-currency">$</span>{{ $objek->harga }}</a>
      </div>
    </div>
    @endforeach
   {{-- <div class="tm-product">
      <img src="{{ asset('asset/img/menu2.jpg') }}" alt="Product">
      <div class="tm-product-text">
        <h3 class="tm-product-title">Americano</h3>
        <p class="tm-product-description">Americano dibuat dari campuran espresso berkualitas yang diseduh dan ditambahkan dengan air</p>
      </div>
      <div class="tm-product-price">
        <a href="#" class="tm-product-price-link tm-handwriting-font"><span class="tm-product-price-currency">$</span>20</a>
      </div>
    </div>
     <div class="tm-product">
      <img src="{{ asset('asset/img/menu3.jpg') }}" alt="Product">
      <div class="tm-product-text">
        <h3 class="tm-product-title">Cappucino</h3>
        <p class="tm-product-description">Cappucino dibuat dari campuran espresso berkualitas dengan susu segar, dibuat dengan foam lembut</p>
      </div>
      <div class="tm-product-price">
        <a href="#" class="tm-product-price-link tm-handwriting-font"><span class="tm-product-price-currency">$</span>15</a>
      </div>
    </div>
    <div class="tm-product">
      <img src="{{ asset('asset/img/menu4.jpg') }}" alt="Product">
      <div class="tm-product-text">
        <h3 class="tm-product-title">Blended Coffe</h3>
        <p class="tm-product-description">Blend coffee adalah kopi yang terdiri dari beberapa campuran jenis kopi, baik kopi arabika maupun kopi robusta</p>
      </div>
      <div class="tm-product-price">
        <a href="#" class="tm-product-price-link tm-handwriting-font"><span class="tm-product-price-currency">$</span>25</a>
      </div>
    </div>
    <div class="tm-product">
      
      <img src="{{ asset('asset/img/menu5.jpg') }}" alt="Product">
      <div class="tm-product-text">
        <h3 class="tm-product-title">Blended Cream</h3>
        <p class="tm-product-description">Blend Cream adalah minuman coklat Belgia dengan susu segar, serta cream lembut di atasnya</p>
      </div>
      <div class="tm-product-price">
        <a href="#" class="tm-product-price-link tm-handwriting-font"><span class="tm-product-price-currency">$</span>45</a>
      </div>
    </div> --}}
  </div>
</div>          
</section>
</div>
</div> 

 @endsection