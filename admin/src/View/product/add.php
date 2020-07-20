<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="my-file">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="price" placeholder="Price">
    <input type="text" name="quantity" placeholder="Quantity">
    <input type="text" name="description" placeholder="Description">
    <select name="category_id" id="">
        <?php foreach ($categories as $category): ?>
            <option value="<?php echo $category->getId() ?>"><?php echo $category->getName() ?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="ADD">
</form>
