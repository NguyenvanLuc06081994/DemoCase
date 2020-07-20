<form action="" method="post">
    product: <select name="product_id" id="">
        <?php foreach ($products as $key => $product) : ?>
            <option value="<?php echo $product->getId(); ?>"><?php echo $product->getName(); ?></option>
        <?php endforeach; ?>
    </select>
    bill_id: <select name="bill_id" id="">
        <?php foreach ($bills as $key => $bill) : ?>
            <option value="<?php echo $bill->getId(); ?>"><?php echo $bill->getId(); ?></option>
        <?php endforeach; ?>
    </select>
    <input type="text" name="quantity" placeholder="Quantity Product">
    <input type="submit" value="ADD">
</form>
