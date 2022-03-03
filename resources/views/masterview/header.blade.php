   {{--ini view header --}}
   <div class="tm-top-header">
      <div class="container">
        <div class="row">
          <div class="tm-top-header-inner">
            <div class="tm-logo-container">
              <img src="asset/img/logo.png" alt="Logo" class="tm-site-logo">
              <h1 class="tm-site-name tm-handwriting-font">AADA Cafe</h1>
            </div>
            <div class="mobile-menu-icon">
              <i class="fa fa-bars"></i>
            </div>
            <nav class="tm-nav">
              <ul>
                <li><a href="/" class="{{ ($title == "Cafe House-Home" )? "active" : "" }}">Home</a></li>
                <li><a href="/today-special" class="{{ ($title == "Cafe House-Today Special" )? "active" : "" }}">Today Special</a></li>
                <li><a href="/menu" class="{{ ($title == "Cafe House-Menu" )? "active" : "" }}">Menu</a></li>
                <li><a href="/contact" class="{{ ($title == "Cafe House-Contact" )? "active" : "" }}">Contact</a></li>
              </ul>
            </nav>   
          </div>           
        </div>    
      </div>
    </div>
