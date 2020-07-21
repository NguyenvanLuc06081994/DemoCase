<div class="pt-3">
    <a href="index.php?page=add-product" class="btn btn-primary">ADD NEW PRODUCT</a>
    <table border="1" class="table table-hover">
        <thead class="badge-dark">
        <tr>
            <th>STT</th>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Description</th>
            <th>Category_ID</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <?php if (empty($products)): ?>
            <tr>
                <td>No data</td>
            </tr>
        <?php else: ?>
            <?php foreach ($products as $key => $product) : ?>
                <tr>
                    <td><?php echo ++$key ?></td>
                    <td><img src="<?php echo $product->getImg() ?>" alt="" width="100px" height="100px"></td>
                    <td><?php echo $product->getName() ?></td>
                    <td><?php echo $product->getPrice() ?></td>
                    <td><?php echo $product->getQuantity() ?></td>
                    <td><?php echo $product->getDescription() ?></td>
                    <td><?php echo $product->getCategoryId() ?></td>
                    <td><a href="index.php?page=update-product&id=<?php echo $product->getId() ?>"
                           class="btn btn-primary">Update</a></td>
                    <td><a onclick="return confirm('Are You Sure?')" href="index.php?page=delete-product&id=<?php echo $product->getId() ?>"
                           class="btn btn-danger">Delete</a></td>
                    <td><a href="index.php?page=list-cart&id=<?php echo $product->getId() ?>"
                           class="btn btn-primary">ADD TO CART</a></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
</div>