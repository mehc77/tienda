<div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
            <a href="" class="site_title"><i class="fa fa-paw"></i> <span>Store</span></a>
          </div>
          <div class="clearfix"></div>

          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="{{ asset('admin/images/img.jpg') }}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
               @if (Auth::guest())
              <span>Welcome,</span>
              <h2>John Doe</h2>
              @else  
              <span>Welcome,</span>
              <h2>{{ Auth::user()->name }}</h2>
              @endif
            </div>
          </div>
          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Tienda <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="{{ route('admin.productos.index') }}">Productos</a>
                    </li>
                    <li><a href="{{ route('admin.catalogo.index') }}">C&aacute;talogo</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-users"></i> Usuarios <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="{{ route('admin.emp.index') }}">Empleados</a>
                    </li>
                    <li><a href="form_advanced.html">Clientes</a>
                    </li>                    
                  </ul>
                </li>
                <li><a><i class="fa fa-pie-chart"></i> Ventas <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="{{ route('admin.sales.index') }}">Ventas</a>
                    </li>
                    <li><a href="media_gallery.html">Facturas</a>
                    </li>                  
                  </ul>
                </li>
                <li><a><i class="fa fa-table"></i> Reportes <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="tables.html">Tables</a>
                    </li>
                    <li><a href="tables_dynamic.html">Table Dynamic</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="chartjs.html">Chart JS</a>
                    </li>
                    <li><a href="chartjs2.html">Chart JS2</a>
                    </li>
                    <li><a href="morisjs.html">Moris JS</a>
                    </li>
                    <li><a href="echarts.html">ECharts </a>
                    </li>
                    <li><a href="other_charts.html">Other Charts </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="menu_section">
              
              <ul class="nav side-menu">
                <li><a><i class="fa fa-cogs"></i> Configuraci&oacute;n <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="{{ route('admin.entiti.index') }}">Tienda</a>
                    </li>
                    <li><a href="{{ route('admin.category.index') }}">Categor&iacute;as</a>
                    </li>
                    <li><a href="{{ route('admin.brand.index') }}">Marcas</a>
                    </li>
                    <li><a href="{{ route('admin.status.index') }}">Estados Pedido</a>
                    </li>
                    <li><a href="{{ route('admin.department.index') }}">Departamentos</a>
                    </li>
                    <li><a href="{{ route('admin.position.index') }}">Cargos</a>
                    </li>
                    <li><a href="{{ route('admin.pay.index') }}">Pagos</a>
                    </li>
                    <li><a href="">Pais</a>
                    </li>
                    <li><a href="">Provincias / Estados</a>
                    </li>
                  </ul>
                </li>
                
                <li><a href="{{ route('admin.proveedor.index') }}"><i class="fa fa-users"></i> Proveedores </a>
                </li>
                
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a href="{{ url('/logout') }}" data-toggle="tooltip" data-placement="top" title="Logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>