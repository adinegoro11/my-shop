<div class="col-lg-12">
    <br>
    <a href="<?= base_url()?>product/add" class="btn btn-primary">Add New</a>
    <hr>
    <table class="table" id="tabel-data">
        <thead class="thead-light">
            <tr>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col">Status</th>
                <th scope="col">Last Update</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($query as $row): ?>
            <tr>
                <td><a href="<?= base_url()."product/detail/". base64_encode($row->id)?>" class="btn btn-link"><?=$row->name?></a></td>
                <td><?=$row->price?></td>
                <td><?=$row->category?></td>
                <td><?=$status = $row->active == 1 ? $status="Active" : $status="Not Active";?></td>
                <td><?=date("d M Y H:i", strtotime($row->last_update))?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div> <!-- /.col-lg-3 -->

<script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>