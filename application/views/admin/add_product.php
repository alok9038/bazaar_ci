
<div class="container-fluid pl-0 mt-2 pt-5">
    <div class="row p-0">
        <div class="col-lg-3 p-0 category-section">
            <?php include(APPPATH."views/admin/include/sidebar.php"); ?>
        </div>
        <div class="col-lg-9 p-4" style="position:absolute; right:0;">
           <h2 class="font-weight-light text-muted">Add Products</h2>
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" value="<?= set_value('title'); ?>">
                        <?= form_error('title'); ?>
                    </div>
                <div class="form-group">
                        <label for="">Price</label>
                        <input type="text" name="price" class="form-control" value="<?= set_value('price'); ?>">
                        <?= form_error('price'); ?>
                    </div>
                <div class="form-group">
                        <label for="">discount price</label>
                        <input type="text" name="discount_price" class="form-control" value="<?= set_value('discount_price'); ?>">
                        <?= form_error('discount_price'); ?>
                    </div>
                <div class="form-group">
                        <label for="">Brand</label>
                        <input type="text" name="brand" class="form-control" value="<?= set_value('brand'); ?>">
                        <?= form_error('brand'); ?>
                    </div>
                <div class="form-group">
                        <label for="">Model</label>
                        <input type="text" name="model" class="form-control" value="<?= set_value('model'); ?>">
                        <?= form_error('model'); ?>
                    </div>
               <div class="form-group">
                        <label for="">Category</label>
                        <select name="category" id="" class="form-control">
                            <option value="" selected disabled hidden>select category</option>
                            <?php foreach($category as $cat): ?>
                            <option value="<?= $cat->id; ?>"><?= $cat->title; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('category'); ?>
                        <a href="<?= base_url('admin/category'); ?>" class="small text-info">add categrory</a>
                    </div>
                    <div class="form-group">
                        <label for="">image</label>
                        <input type="file" name="image" class="form-control-file ">
                        <?= form_error('image'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" class="form-control"  id="myeditor" cols="30" rows="10"><?= set_value('description'); ?></textarea>
                        <?= form_error('description'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Summary</label>
                        <textarea name="summary" class="form-control"  id="" cols="30" rows="10"><?= set_value('description'); ?></textarea>
                        <?= form_error('description'); ?>
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" class="btn btn-info btn-block" name="send"> 
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>