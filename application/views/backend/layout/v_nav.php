 <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
      <!-- Sidebar user panel (optional) -->
    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview ">
            <a href="<?=base_url('backend/Home')?>" class="<?=$menuHome?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
            Home
              </p>
            </a>
            
          </li>
          
        <li class="nav-header"><h4>Data Master</h4></li>
          <li class="nav-item has-treeview">
            <a id="but_nav" href="#" class="nav-link">
              <i class="nav-icon fas fa-car"></i>
              <p>
                Mobil 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('backend/mobil/type')?>" id="type" class="<?=$menuType?>">
                  <i class="fas fa-i-cursor"> </i>
                  <p>Type</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="<?=base_url('backend/mobil/guide')?>" class="<?=$menuGuide?>">
                 <i class="fas fa-users"></i>
                  <p>Guide/Drivers</p>
                </a>
              </li>
                 <li class="nav-item">
                <a href="<?=base_url('backend/mobil/mobil')?>" class="<?=$menuMobil?>">
                 <i class="fas fa-car"></i>
                  <p>Data Mobil</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('backend/pegawai')?>" class="<?=$menuPegawai?>">
              <i class="fas fa-users nav-icon"></i>
              <p>Pegawai</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('backend/destinasi')?>" class="<?=$menuDestinasi?>">
              <i class="fas fa-map nav-icon"></i>
              <p>Destianasi</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('backend/destinasi/routing')?>" class="<?=$menuRouting?>">
              <i class="fas fa-map nav-icon"></i>
              <p>Routing Machine</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=base_url('backend/cuci')?>" class="<?=$menuCuci?>">
              <i class="fas fa-map nav-icon"></i>
              <p>Cuci</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=base_url('backend/blog/home')?>" class="<?=$menuCuci?>">
              <i class="fas fa-map nav-icon"></i>
              <p>Menu Blog</p>
            </a>
          </li>
          
         </li>

          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
 