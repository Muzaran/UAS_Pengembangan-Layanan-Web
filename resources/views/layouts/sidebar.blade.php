<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-store"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Z-STOK</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-chart-line"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('products') }}">
      <i class="fas fa-fw fa-box"></i>
      <span>Produk</span>
    </a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="{{ route('categories') }}">
      <i class="fas fa-fw fa-layer-group"></i>
      <span>Kategori</span>
    </a>
  </li>

  <!-- New Nav Item - Supplier -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('suppliers') }}">
      <i class="fas fa-fw fa-truck"></i>
      <span>Supplier</span>
    </a>
  </li>
  
  <!-- New Nav Item - Transaksi Penjualan -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('transactions.index') }}">
      <i class="fas fa-fw fa-money-check-alt"></i>
      <span>Transaksi Penjualan</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <li class="nav-item">
    <a class="nav-link" href="/profile">
      <i class="fas fa-fw fa-user-alt"></i>
      <span>Profil</span>
    </a>
  </li>
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
