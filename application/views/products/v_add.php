<div class="col-lg-12">
    <br>
    <div class="card">
        <h5 class="card-header">Add New Product</h5>
        <div class="card-body">
            <form action="<?= base_url()?>product/add" method="post">
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" class="form-control" name="name" value="<?= set_value('name'); ?>" placeholder="Product Name" required="required" autocomplete="off">
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" name="price" value="<?= set_value('price'); ?>" placeholder="Price" min="100" max="1000000000" required="required">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Category</label>
                    <select name="category_id" class="form-control" required="required">
                        <option selected>Choose one</option>
                        <?php
                            foreach ($categories as $row) {
                                echo "<option value=".$row->id.">".ucwords($row->name)."</option>";
                            }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" rows="3" required="required"><?= set_value('description'); ?></textarea>
                </div>
                
                <?= validation_errors(); ?>
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="<?= base_url()?>product/list" class="btn btn-light">Cancel</a>
            </form>
        </div>
    </div>
</div> <!-- /.col-lg-3 -->