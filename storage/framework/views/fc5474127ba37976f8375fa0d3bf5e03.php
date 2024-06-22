<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
  <!-- Sidebar Toggle (Topbar) -->
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
  </button>
  
  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">
    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
    <?php if(!preg_match('/\./', Route::current()->getName()) && Route::current()->getName() !== 'dashboard'): ?>
    <li class="nav-item dropdown no-arrow d-sm-none">
      <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-search fa-fw"></i>
      </a>
      <!-- Dropdown - Messages -->
      <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
        <form  action="<?php echo e(route(Route::current()->getName())); ?>" method="GET" class="form-inline mr-auto w-100 navbar-search">
          <div class="input-group">
            <input type="text" name="search" class="form-control bg-light border-0 small" placeholder="Cari..." value="<?php echo e(request('search')); ?>">
            <div class="input-group-append">
              <button class="btn btn-success" type="submit">
                <i class="fas fa-search fa-sm"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </li>
    <?php endif; ?>
  
  
    <div class="topbar-divider d-none d-sm-block"></div>
  
    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small">
          <?php echo e(auth()->user()->name); ?>

          <br>
          <small><?php echo e(auth()->user()->level); ?></small>
        </span>
        <img class="img-profile rounded-circle" src="/admin_assets/img/undraw_profile.svg">
      </a>
      <!-- Dropdown - User Information -->
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="/profile">
          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
          Profile
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          Logout
        </a>
      </div>
    </li>
  
  </ul>
  
</nav><?php /**PATH C:\Users\mozart\Desktop\UAS Pemograman WEB\toko-lancar\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>