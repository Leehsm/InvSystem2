  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('stocklist.view') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link " href="{{ route('stocklist.add') }}">
          <i class="bi bi-bag-plus"></i>
          <span>Add New Item</span>
        </a>
      </li>

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#aboutus-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Stock</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="aboutus-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('stocklist.view') }}">
              <i class="bi bi-circle"></i><span>View</span>
            </a>
          </li>
          <li>
            <a href="{{ route('stocklist.add') }}">
              <i class="bi bi-circle"></i><span>Add</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav --> --}}

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#team-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-cart-plus"></i><span>Stock IN</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="team-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('stockin.view') }}">
              <i class="bi bi-circle"></i><span>View</span>
            </a>
          </li>
          <li>
            <a href="{{ route('stocklist.view') }}">
              <i class="bi bi-circle"></i><span>Add</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#misionvision-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-cart-dash"></i><span>Stock OUT</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="misionvision-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('stockout.view') }}">
              <i class="bi bi-circle"></i><span>View</span>
            </a>
          </li>
          <li>
            <a href="{{ route('stocklist.view') }}">
              <i class="bi bi-circle"></i><span>Add</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->
  </aside><!-- End Sidebar-->