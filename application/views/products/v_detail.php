<div class="col-lg-12">
    <br>
    <div class="card">
        <h5 class="card-header">Detail Product</h5>
        <div class="card-body">
            <table class="table">
                <tbody>
                <?php foreach ($query as $row): ?>
                    <tr>
                        <th scope="row">Product Name</th>
                        <td><?=$row->name?></td>
                    </tr>
                    <tr>
                        <th scope="row">Price</th>
                        <td><?=$row->price?></td>
                    </tr>
                    <tr>
                        <th scope="row">Category</th>
                        <td><?=$row->category?></td>
                    </tr>
                    <tr>
                        <th scope="row">Description</th>
                        <td><?=$row->description?></td>
                    </tr>
                    <tr>
                        <th scope="row">Last Update</th>
                        <td><?=date("d M Y H:i", strtotime($row->last_update))?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

<hr>
    <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>

</div> <!-- /.col-lg-3 -->