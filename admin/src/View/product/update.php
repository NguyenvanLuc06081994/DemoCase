<form action="" method="post"  enctype="multipart/form-data">
    <input type="text" name="id" value="<?php echo $product['id'] ?>" hidden>
    <input type="file" name="my-file">
    <input type="text" name="name" placeholder="Name" value="<?php echo $product['name'] ?>">
    <input type="text" name="price" placeholder="Price" value="<?php echo $product['price'] ?>">
    <input type="text" name="quantity" placeholder="Quantity" value="<?php echo $product['quantity'] ?>">
    <input type="text" name="description" placeholder="Description" value="<?php echo $product['description'] ?>">
    <input type="text" name="category_id" placeholder="Category" value="<?php echo $product['category_id'] ?>">
    <input type="submit" value="Update">
</form>

