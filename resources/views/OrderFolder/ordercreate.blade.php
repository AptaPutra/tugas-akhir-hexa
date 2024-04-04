
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB User create order</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="../assets/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">ToolsPro</a>
            <!-- Sidebar Toggle-->
            <!-- <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button> -->
            <!-- Navbar Search-->
            <!-- <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form> -->
            <!-- Navbar-->
            <ul class="navbar-nav  ms-auto me-0 me-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('show') }}" >Settings</a></li>
                        <!-- <li><a class="dropdown-item" href="#!">Activity Log</a></li> -->
                        <li><hr class="dropdown-divider" /></li>

                        <!-- <a class="nav-link" href="{{ route('logout') }}"  class="far fa-user">Logout</a>  -->

                        <li> <form method="POST" action="{{ route('logout') }}" x-data> @csrf
                            <!-- <a class=" ">Logout</a> -->
                            <button class="dropdown-item text-danger" type="submit">Logout</button>
                        </form>
                        </li>

                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>

                            <a class="nav-link" href="dashboard_user">
                                <div class="sb-nav-link-icon"href="{{ route('dashboard_user') }}"  class="far fa-user"></i> Dashboard </href=>
                                
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                               
                            
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Menu
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    

                                <a class="nav-link" href="{{ route('userview') }}"  class="far fa-user">Order</a> 

                                    <a class="nav-link" href="{{ route('history') }}"  class="far fa-user">history</a> 
                                </nav>





                            </div>
                            
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>

                                   
                            </div>
                           
                    </div>
                    <!-- <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div> -->
                </nav>
            </div>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h2 class="mt-4">Order</h2>
                        <div id="app">
                            <div class="main-wrapper">
                                <div class="main-content">
                                <div class="container">


                                    <form method="POST" action="{{ route('createorder') }}" enctype="multipart/form-data">
                                    @csrf
                                    <!-- @method('PUT') -->
                                    <div class="card mt-5">
                                        <div class="card-header">
                                        <h3>New Product</h3>
                                        </div>
                                        <div class="card-body">
                                            @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <div class="alert-title"><h4>Whoops!</h4></div>
                                                There are some problems with your input.
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div> 
                                            @endif

                                            @if (session('success'))
                                            <div class="alert alert-success">{{ session('success') }}</div>
                                            @endif

                                            @if (session('error'))
                                            <div class="alert alert-danger">{{ session('error') }}</div>
                                            @endif
                                            <div class="mb-3">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="name">
                                            </div>
                                            <div class="mb-3">
                                            <label class="form-label">Vehicle</label>
                                            <input type="text" class="form-control" name="vehicle" value="{{ old('vehicle') }}"  placeholder="vehicle">
                                            </div>
                                            <div class="mb-3">
                                            <label class="form-label">merk</label>
                                            <input type="text" class="form-control" name="merk" value="{{ old('merk') }}"  placeholder="merk">
                                            </div>


                                            <div class="mb-4">
              <label for="option" class="block text-start text-gray-700 text-sm font-bold mb-2">Jenis Kerusakan:</label>
              <select wire:model="option" id="option" class="form-select rounded-md shadow-sm mt-1 block w-full" name="option" value="{{ old('option') }}"  placeholder="option">>
                <option value="">Jenis Kerusakan</option>
                <option value="ban bocor">ban bocor</option>
                <option value="isi oli">isi oli</option>
                <option value="cas aki">cas aki</option>
                <option value="ganti kampas">ganti kampas</option>
              </select>
              @error('option')
                <span class="text-red-500">{{ $message }}</span>
              @enderror
            </div>




           
                                        </div>
                                        <div class="card-footer">
                                        <!-- <a class="nav-link" href="{{ route('history') }}"  class="far fa-user">Order</a>  -->
                                        <!-- <button class="btn btn-primary" onclick="location.href="{{ route('history') }}">Orderssss</button> -->
                                        <button class="btn btn-primary" type="submit">order</a>
                                        </div>
                                    </div>
                                    </form>

                                </div>
                                </div>
                            </div>
                            </div>
                           </main>
                                    
                                    
                       
                                   


                               
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script> -->
    </body>
</html>
