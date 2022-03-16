@extends('masterview.content')

@section('content')
<section class="tm-welcome-section">
        <div class="container tm-position-relative">
        <div class="tm-lights-container">
            <img src="{{ asset('asset/img/light.png') }}" alt="Light" class="light light-1">
            <img src="{{ asset('asset/img/light.png') }}" alt="Light" class="light light-2">
            <img src="{{ asset('asset/img/light.png') }}" alt="Light" class="light light-3">   
        </div>        
        <div class="row tm-welcome-content">
            <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="{{ asset('asset/img/header-line.png') }}" alt="Line" class="tm-header-line">&nbsp;Today's Special&nbsp;&nbsp;<img src="{{ ('asset/img/header-line.png') }}" alt="Line" class="tm-header-line"></h2>
            <h2 class="gold-text tm-welcome-header-2">AADA Cafe</h2>
            <p class="white-text tm-welcome-description">Today Special adalah menu <span class="gold-text">Eksklusif</span> yang di buat khusus oleh chef profesional yang ada di AADA Cafe. Special menu yang disajikan akan selalu berbeda di setiap minggunya. Sehingga menu yang disajikan adalah
            menu - menu yang ekslusif serta berkualitas.</p>
            <a href="#main" class="tm-more-button tm-more-button-welcome">Read More</a>      
        </div>
        <img src="{{ asset('asset/img/table-set.png') }}" alt="Table Set" class="tm-table-set img-responsive">
        </div>      
    </section>
    <div class="tm-main-section light-gray-bg">
        <div class="container" id="main">
        <section class="tm-section tm-section-margin-bottom-0 row">
            <div class="col-lg-12 tm-section-header-container">
            <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="tm-site-logo"> Popular Items</h2>
            <div class="tm-hr-container"><hr class="tm-hr"></div>
            </div>
            <div class="col-lg-12 tm-popular-items-container">

            @foreach($all_menu as $objek)
            
                <div class="tm-popular-item">
                    <img src="{{ asset($objek->gambar) }}" alt="Popular" class="tm-popular-item-img" style="width: 286px; height: 166px;">
                    <div class="tm-popular-item-description">
                        <h3 class="tm-handwriting-font tm-popular-item-title">{{ $objek->nama }}</h3><hr class="tm-popular-item-hr">
                        <p>{{ $objek->deskripsi }}</p>
                    <div class="order-now-container">
                        <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                    </div>
                    </div>              
                </div>
          
            @endforeach
        </div> 
        <div class="page-item">
            {{ $all_menu->links() }}
        </div>
       
            {{-- <div class="tm-popular-item">
                <img src="{{ asset('asset/img/Pavlova-1.jpg') }}" alt="Popular" class="tm-popular-item-img" style="width: 286px; height: 166px;">
                <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">b</span>erry pavlova</h3><hr class="tm-popular-item-hr">
                <p>Crunchy diluar dan lembut di dalam dengan manisnya berry</p>
                <div class="order-now-container">
                    <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                </div>
                </div>              
            </div>
            <div class="tm-popular-item">
                <img src="{{ asset('asset/img/almond-croissant-1.png') }}" alt="Popular" class="tm-popular-item-img" style="width: 286px; height: 166px;">
                <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">a</span>lmond croissant</h3><hr class="tm-popular-item-hr">
                <p>Croissant lembut dan berlayer dengan Crunchy Almond di luar</p>
                <div class="order-now-container">
                    <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                </div>
                </div>              
            </div>
            <div class="tm-popular-item">
                <img src="{{ asset('asset/img/prawn-aglio-1.png') }}" alt="Popular" class="tm-popular-item-img" style="width: 286px; height: 166px;">
                <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">p</span>rwan aglio e olio</h3><hr class="tm-popular-item-hr">
                <p>Spagetti gurih dengan tambahan udang yang kenyal</p>
                <div class="order-now-container">
                    <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                </div>
                </div>              
            </div>
            <div class="tm-popular-item">
                <img src="{{ asset('asset/img/camomile-tea.jpg') }}" alt="Popular" class="tm-popular-item-img" style="width: 286px; height: 166px;">
                <div class="tm-popular-item-description">
                    <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">c</span>hamomile tea</h3><hr class="tm-popular-item-hr">
                    <p>Teh herbal dari bunga chamomile yang berguna untuk mengatasi insomnia</p>
                <div class="order-now-container">
                    <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                </div>
                </div>              
            </div>
            <div class="tm-popular-item">
                <img src="{{ asset('asset/img/pea-tea-butterfly.jpg') }}" alt="Popular" class="tm-popular-item-img" style="width: 286px; height: 166px;">
                <div class="tm-popular-item-description">
                    <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">p</span>ea tea butterfly</h3><hr class="tm-popular-item-hr">
                    <p>teh bunga telang yang dapat membuat suasana hati yang seimbang</p>
                <div class="order-now-container">
                    <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                </div>
                </div>              
            </div> --}}
                  
        </section>
        <section class="tm-section">
            <div class="row">
            <div class="col-lg-12 tm-section-header-container">
                <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="tm-site-logo"> Daily Menu</h2> 
                <div class="tm-hr-container"><hr class="tm-hr"></div> 
            </div>  
            </div>          
            <div class="row">
            <div class="tm-daily-menu-container margin-top-60">
                <div class="col-lg-4 col-md-4">
                    <img src="{{ asset('asset/img/menu-board.png') }}" alt="Menu board" class="tm-daily-menu-img">      
                </div>            
                <div class="col-lg-8 col-md-8">
                AADA Cafe juga memiliki menu harian yang dapat di pesan setiap jam operasional cafe. 
                  Hidangan yang nikmat dan juga berkualitas di setiap saatnya. Berikut daftar menu harian AADA Cafe:</p>
                    <ol class="margin-top-30">
                    <li>Americano</li> 
                    <li>Cappuccino</li>
                    <li>Mocha</li> 
                    <li>Blended Cream</li> 
                    <li>Blended Coffee</li> 
                    </ol>
                <a href="#" class="tm-more-button margin-top-30">Read More</a>    
                </div>
            </div>
            </div>          
        </section>
        </div>
    </div> 
@endsection
