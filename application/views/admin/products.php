<div class="container-fluid pl-0 mt-5 pt-2">
    <div class="row p-0">
        <div class="col-lg-3 category-section p-0">
            <?php include(APPPATH."views/admin/include/sidebar.php"); ?>
        </div>
        <div class="col-lg-9 pt-4" style="right:0;position:absolute;">
            <h1 class="font-weight-light text-muted">Products Lists<span><a href="<?= base_url('admin/addProduct'); ?>" class="float-right btn btn-info rounded-0">Add Products</a></span></h1>
            <div class="clearfix"></div>
            <table class="table table-hover">
                <tr class="bg-light">
                    <th>Id</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Discount Price</th>
                    <th>Action</th>
                </tr>
                <?php foreach($product as $item): ?>
                <tr>
                    <td><?= $item->id; ?></td>
                    <td><?= $item->title; ?></td>
                    <td><?= $item->category; ?></td>
                    <td><?= $item->price; ?></td>
                    <td><?= $item->discount_price; ?></td>
                    <td><a href="" class="btn badge-danger badge rounded-circle p-2"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
</svg></a>
                    <a href="" class="btn badge badge-info rounded-circle ml-3 p-2"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></a></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>