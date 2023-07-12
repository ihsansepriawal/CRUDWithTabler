<?php include 'layout/header.php' ?>
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
                                    <input type="text" class="form-control" name="no" value="PR<?= substr(time(), 5) ?>"
                                        readonly />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Input nama"
                                        required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Warna</label>
                                    <input type="text" class="form-control" name="warna" placeholder="Input warna"
                                        required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Jumlah</label>
                                    <input type="number" class="form-control" name="jumlah" placeholder="Input jumlah"
                                        required />
                                </div>
                                <div class="mb-3 d-flex gap-2">
                                    <button class="btn btn-sm btn-success" name="add" type="submit">Submit</button>
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
