<!doctype html>
<html lang="es" data-bs-theme="light">

<head>
  <?php include_once("../../config/template/mainHead.php") ?>
</head>

<body>

  <!--start header-->
  <header class="top-header">
    <?php include_once("../../config/template/mainHeader.php") ?>
  </header>
  <!--end header-->


  <!--start sidebar-->
  <aside class="sidebar-wrapper">
    <?php include("../../config/template/mainSidebar.php"); ?>
  </aside>
  <!--end sidebar-->



  <!--start main content-->
  <main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
      <div class="breadcrumb-title pe-3">Tables</div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Basic Table</li>
          </ol>
        </nav>
      </div>
      <div class="ms-auto">
        <div class="btn-group">
          <button type="button" class="btn btn-primary">Settings</button>
          <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item" href="javascript:;">Action</a>
            <a class="dropdown-item" href="javascript:;">Another action</a>
            <a class="dropdown-item" href="javascript:;">Something else here</a>
            <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
          </div>
        </div>
      </div>
    </div>
    <!--end breadcrumb-->

    <div class="row">
      <div class="col-xl-12 mx-auto">
        <h6 class="mb-0 text-uppercase">Basic Table</h6>
        <hr>
        <div class="card">
          <div class="card-body">

          </div>
        </div>
      </div>
    </div>
    <!--end row-->

  </main>
  <!--end main content-->

  <!--plugins-->
  <script src="../../public/js/jquery.min.js"></script>
  <script src="../../public/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <script src="../../public/plugins/metismenu/js/metisMenu.min.js"></script>
  <script src="../../public/plugins/simplebar/js/simplebar.min.js"></script>

  <!--BS Scripts-->
  <script src="../../js/bootstrap.bundle.min.js"></script>
  <script src="../../js/main.js"></script>
</body>

</html>