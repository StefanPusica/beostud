<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg fixed-top p-3">
    <div class="container">
      <x-nav-link url="/">LOGO</x-nav-link>
      <div class="d-flex align-items-center">
        <ul class="navbar-nav d-flex align-items-center" style="flex-direction: row !important; margin-right: 0.5rem !important;">
          <li class="nav-item prominently">
            <x-nav-link url="/rental">Rental</x-nav-link>
          </li>
          <li class="nav-item" style="margin-left: 0.5rem !important">
            <x-nav-link url="/cart" image="/images/icons/cart.svg"></x-nav-link>
          </li>
        </ul>        
        <button class="menu-toggle collapsed d-flex flex-column" type="button" id="menuToggle">
          <span class="toggler-icon top-bar"></span>
          <span class="toggler-icon middle-bar"></span>
          <span class="toggler-icon bottom-bar"></span>
        </button>
      </div>
    </div>
  </nav>
   <!-- Sidebar Menu -->
   <div id="sidebarMenu" class="sidebar">
    <ul class="navbar-nav d-flex flex-column align-items-center">
      <li class="nav-item"><x-nav-link url="/">Početna</x-nav-link></li>
      <li class="nav-item"><x-nav-link url="/o-nama">O nama</x-nav-link></li>
      <li class="nav-item"><x-nav-link url="/galerija">Galerija</x-nav-link></li>
      <li class="nav-item"><x-nav-link url="/kontakt">Kontakt</x-nav-link></li>
    </ul>
  </div>
  <!-- Sidebar end -->
  <!-- Navbar End -->