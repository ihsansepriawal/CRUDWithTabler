<?php include 'layout/header.php'; ?>

<div class="container mt-3">
    <?php if(isset($_SESSION['alert'])) {
        echo $_SESSION['alert'];
        unset($_SESSION['alert']);
    }?>
    <div class="card" id="card">
        <div class="card-header">
            <h3 class="card-title">Table Product</h3>
        </div>
        <div class="card-body border-bottom py-3">
            <div class="d-flex justify-content-between">
                <a href="add_product.php" class="btn btn-sm btn-primary btn-pill"><i
                        class="ti ti-circle-plus me-2"></i>Add Product</a>
                <div class="input-icon">
                    <span class="input-icon-addon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                            <path d="M21 21l-6 -6"></path>
                        </svg>
                    </span>
                    <input type="text" value="" class="form-control search" placeholder="Search…"
                        aria-label="Search in website">
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table card-table table-striped table-vcenter text-nowrap datatable">
                <thead>
                    <tr>
                        <th class="w-1"><button class="table-sort" data-sort="sort-no">No.</th>
                        <th> <button class="table-sort" data-sort="sort-no_product">No Product </th>
                        <th> <button class="table-sort" data-sort="sort-nama">Nama </th>
                        <th> <button class="table-sort" data-sort="sort-warna">Warna </th>
                        <th> <button class="table-sort" data-sort="sort-jumlah">Jumlah</th>
                        <th> <button class="table-sort" data-sort="sort-created">Created</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class=" table-tbody">
                    <?php
                            $query = "SELECT * FROM product ORDER BY created DESC";
$result = mysqli_query($conn, $query);
$no = 1;
while($row = mysqli_fetch_array($result)):
    ?>
                    <tr>
                        <td class="sort-no"><span class="text-muted"><?= $no++ ?></span></td>
                        <td class="sort-no_product"><a href="invoice.html" class="text-reset"
                                tabindex="-1"><?= $row['no'] ?></a></td>
                        <td class="sort-nama">
                            <span class="flag flag-country-us"></span>
                            <?= $row['nama']; ?>
                        </td>
                        <td class="sort-warna">
                            <?= $row['warna'] ?>
                        </td>
                        <td class="sort-jumlah">
                            <?= $row['jumlah']; ?>
                        </td>
                        <td class="sort-created">
                            <span class="badge bg-success me-1"></span> <?= $row['created']; ?>
                        </td>
                        <td class="text-end">
                            <span class="dropdown">
                                <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                                    data-bs-toggle="dropdown">Actions</button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="edit_product.php?id=<?= $row['id']; ?>">
                                        <span class="badge bg-warning me-2"></span><i class="ti ti-edit"></i>
                                    </a>
                                    <a onclick="return confirm('What are u sure ?')" name="delete" class="dropdown-item"
                                        href="process.php?id=<?= $row['id']; ?>">
                                        <span class="badge bg-danger me-2"></span><i class="ti ti-trash"></i>
                                    </a>
                                </div>
                            </span>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>

        </div>
        <div class="card-footer">
            <ul class="pagination my-3 d-flex justify-content-end">
            </ul>
        </div>
    </div>
</div>

<?php include 'layout/footer.php'; ?>