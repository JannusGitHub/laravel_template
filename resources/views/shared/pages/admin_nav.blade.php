<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ route('dashboard') }}" class="brand-link">
    <img src="{{ asset('public/images/pricon_logo2.png') }}"
         alt="CNPTS"
         class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">PATS - CN</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview">
          <a href="{{ route('dashboard') }}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-header">ADMINISTRATOR</li>
        <li class="nav-item">
          <a href="{{ route('station') }}" class="nav-link">
            <i class="fas fa-object-group"></i>
            <p>
              Station
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('machine') }}" class="nav-link">
            <i class="fas fa-hdd"></i>
            <p>
              Machine
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('mode_of_defect') }}" class="nav-link">
            <i class="fas fa-trash"></i>
            <p>
              Mode of Defect
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('assembly_line') }}" class="nav-link">
            <i class="fas fa-list"></i>
            <p>
              Assembly Lines
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('materialprocess') }}" class="nav-link">
            <i class="fas fa-list-ol"></i>
            <p>
              Material Processs
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('processtimeline') }}" class="nav-link">
            <i class="fas fa-calendar-alt"></i>
            <p>
              Process Timeline
            </p>
          </a>
        </li>

        <li class="nav-header">WAREHOUSE</li>
        <li class="nav-item">
          <a href="{{ route('warehouse') }}" class="nav-link">
            <i class="fas fa-qrcode"></i>
            <p>
              QR Code Issuance
            </p>
          </a>
        </li>

        <li class="nav-header">RAPID</li>
        <li class="nav-item">
          <a href="{{ route('rapid_acdcs') }}" class="nav-link">
            <i class="fas fa-file-pdf"></i>
            <p>
              ACDCS Reference
            </p>
          </a>
        </li>

        <li class="nav-header">EXPORT REPORT</li>
        <li class="nav-item">
          <a href="{{ route('exportshippingrecord') }}" class="nav-link">
            <i class="fa fa-file-excel"></i>
            <p>
              Shipment Record
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('exportpartslotrecord') }}" class="nav-link">
            <i class="fa fa-file-excel"></i>
            <p>
              Parts Lot Record
            </p>
          </a>
        </li>

        <li class="nav-header">PRODUCTION</li>
        <li class="nav-item">
          <a href="{{ route('materialissuancealias') }}" class="nav-link">
            <i class="fas fa-file-alt"></i>
            <p>
              Material Input
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('partspreparatoryalias') }}" class="nav-link">
            <i class="fas fa-clipboard-check"></i>
            <p>
              Parts Preparatory
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fas fa-cogs"></i>
            <p>
              Production
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <!-- <li class="nav-item">
              <a href="{{ route('prod_runcard') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Runcard</p>
              </a>
            </li> -->
            <li class="nav-item">
              <a href="{{ route('prod_runcard_new') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Runcard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('oqclotapp') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>OQC Lot Application</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="{{ route('oqclvisualinspection') }}" class="nav-link">
            <i class="fas fa-microscope"></i>
            <p>
              OQC
            </p>
          </a>
        </li>
        <li class="nav-header">PPC</li>
        <li class="nav-item">
          <a href="{{ route('shipmentconfirmationalias') }}" class="nav-link">
            <i class="fas fa-file-excel"></i>
            <p>
              Shipment Confirmation
            </p>
          </a>
        </li>

        <!-- <li class="nav-item">
          <a href="{{ route('prod_preliminary_inspection') }}" class="nav-link">
            <i class="fas fa-box-open"></i>
            <p>
              Prod'n Packing Inspection
            </p>
          </a>
        </li>

         <li class="nav-item">
          <a href="{{ route('oqc_packing_inspection') }}" class="nav-link">
            <i class="fas fa-truck"></i>
            <p>
              OQC Packing Inspection
            </p>
          </a>
        </li> -->
  <!--       <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fas fa-qrcode"></i>
            <p>
              DLABEL
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('packingoperator') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Packing Operator</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('packinginspector') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Packing Inspector</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('dlabelprintingalias') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>DLABEL Printing</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('dlabelcheckeralias') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>DLABEL Checker</p>
              </a>
            </li>
          </ul>
        </li> -->
        <!-- <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fas fa-dolly"></i>
            <p>
              Shipping
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('shippingoperator')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Shipping Operator</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('shippinginspector')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Shipping Inspector</p>
              </a>
            </li>
          </ul> -->
          <!-- <li class="nav-item">
            <a href="{{ route('warehouse') }}" class="nav-link">
              <i class="fas fa-warehouse"></i>
              <p>
                Warehouse
              </p>
            </a>
          </li> -->
        <!-- </li> -->
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>