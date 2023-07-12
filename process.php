<?php

session_start();
require 'koneksi.php';

if(isset($_POST['add'])) {
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $warna = $_POST['warna'];
    $jumlah = $_POST['jumlah'];
    $created = date("Y-m-d H:i:s");

    $query = "INSERT INTO product VALUES ('','$no', '$nama', '$warna', '$jumlah', '$created')";

    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
        $_SESSION['alert'] = '<div class="alert alert-success alert-dismissible" role="alert">
  <div class="d-flex">
    <div>
      <h4 class="alert-title">Input Item Successfull !!!</h4>
    </div>
  </div>
  <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
</div>';

    } else {
        echo "Terjadi kesalahan dalam menambahkan data: " . mysqli_error($conn);
    }

} elseif(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $warna = $_POST['warna'];
    $jumlah = $_POST['jumlah'];
    $created = $_POST['created'];

    $query = "UPDATE product SET no='$no', nama='$nama', warna='$warna', jumlah='$jumlah', created='$created' WHERE id = '$id'";
    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
        $_SESSION['alert'] = '<div class="alert alert-warning alert-dismissible" role="alert">
  <div class="d-flex">
    <div>
      <h4 class="alert-title">Edit Item Successfull !!!</h4>
    </div>
  </div>
  <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
</div>';

    } else {
        echo "Terjadi kesalahan dalam menambahkan data: " . mysqli_error($conn);
    }

} else {
    $id = $_GET['id'];

    $query = "DELETE FROM product WHERE id = '$id'";
    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
        $_SESSION['alert'] = '<div class="alert alert-danger alert-dismissible" role="alert">
  <div class="d-flex">
    <div>
      <h4 class="alert-title">Delete Item Successfull !!!</h4>
    </div>
  </div>
  <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
</div>';

    } else {
        echo "Terjadi kesalahan dalam menambahkan data: " . mysqli_error($conn);
    }

}
