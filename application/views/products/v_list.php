<div class="col-lg-12">
    <br>
    
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($query as $row): ?>
            <tr>
                <td><?=$row->name?></td>
                <td><?=$row->price?></td>
                <td><?=$row->category?></td>
                <td><?=$status = $row->active == 1 ? $status="Active" : $status="Not Active";?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div> <!-- /.col-lg-3 -->