<?php
 include_once 'header.php';
 include_once 'sidebar.php';
 ?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Fixed Layout</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Layout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Title</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <?php
 include_once 'header.php';
 include_once 'sidebar.php';
 ?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Fixed Layout</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Layout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Title</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM BELANJA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="m-2">
	<div class="row">
		<div class="col-md-8">
      <h2>Belanja Online</h2>
      <hr>
<form method="POST">
<div class="Container">
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="pilih_produk" id="pilih_produk_0" type="checkbox" class="custom-control-input" value="Televisi"> 
        <label for="pilih_produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="pilih_produk" id="pilih_produk_1" type="checkbox" class="custom-control-input" value="Kulkas"> 
        <label for="pilih_produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="pilih_produk" id="pilih_produk_2" type="checkbox" class="custom-control-input" value="Mesin Cuci"> 
        <label for="pilih_produk_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" value="simpan" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</div>
</div>
<div class="col-md-4">
<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
    Daftar Harga
  </a>
  <a href="#" class="list-group-item list-group-item-action">TV : 4.200.000</a>
  <a href="#" class="list-group-item list-group-item-action">KULKAS : 3.100.000</a>
  <a href="#" class="list-group-item list-group-item-action">MESIN CUCI : 3.800.000</a>
  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
    Harga Dapat Berubah Setiap Saat
  </a>
</div>
</div>
</form>
      </div>	
		</div>
</div>
<hr>

<?php
$proses = $_POST['proses'];
$customer = $_POST['customer'];
$pilih_produk = $_POST['pilih_produk'];
$jumlah = $_POST['jumlah'];

if ($pilih_produk == 'Televisi'){
    $harga_total = 4200000;
}elseif($pilih_produk == 'Kulkas'){
    $harga_total = 31000000;
}elseif($pilih_produk == 'Mesin Cuci'){
    $harga_total = 38000000;
}
if ($pilih_produk == 'Televisi'){
    $pilihan_produk = "TV";
}elseif($pilih_produk == 'Kulkas'){
    $pilihan_produk = "kulkas";
}elseif($pilih_produk == 'Mesin Cuci'){
    $pilihan_produk = "mesin cuci";
}

$harga = $harga_total * $jumlah;
if(!empty($proses)){
    echo "Customer : $customer";
    echo "<br/>Produk : $pilihan_produk";
    echo "<br/>Jumlah : $jumlah";
    echo "<br/>total belanja : $harga";
}
?>
</body>
</html>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include_once 'footer.php';
?>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include_once 'footer.php';
?>