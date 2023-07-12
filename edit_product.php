<?php include 'layout/header.php';
require 'koneksi.php';
$id = $_GET['id'];
$query = "SELECT * FROM product WHERE id = '$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
?>

<div class="container my-3">
    <div class="row">
        <div class="col-md-6">
            <div class="card ">
                <div class="card-header">
                    <h3 class="card-title">Input Product</h3>
                </div>
                <div class="card-body border-bottom py-3">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="process.php" method="post">
                                <div class="mb-3">
                                    <label class="form-label">No Product</label>
                                    <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                    <input type="hidden" name="created" value="<?= $row['created']; ?>">
                                    <input type="text" class="form-control" name="no" value="<?= $row['no']; ?>"
                                        readonly />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Input nama"
                                        value="<?= $row['nama']; ?>" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Warna</label>
                                    <input type="text" class="form-control" name="warna" placeholder="Input warna"
                                        value="<?= $row['warna']; ?>" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Jumlah</label>
                                    <input type="number" class="form-control" name="jumlah" placeholder="Input jumlah"
                                        value="<?= $row['jumlah']; ?>" required />
                                </div>
                                <div class="mb-3 d-flex gap-2">
                                    <button class="btn btn-sm btn-success" name="edit" type="submit">Submit</button>
                                    <button class="btn btn-sm btn-danger" type="reset">Reset</button>
                                    <a href="index.php" class="btn btn-sm btn-info" type="cancel">Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php include 'layout/footer.php';
