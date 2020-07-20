<form action="" method="post">
    <input type="text" name="date" placeholder="Date">
    <input type="text" name="status" placeholder="Status">
    <select name="product_price" id="">
        <?php foreach ($products as $key => $product): ?>
            <option value="<?php echo $product->getPrice() ?>"><?php echo $product->getName() ?></option>
        <?php endforeach; ?>
    </select>
    <select name="quantity_product" id="">
        <?php foreach ($details as $key => $detail): ?>
            <option value="<?php echo $detail->getQuantity() ?>"><?php echo $detail->getQuantity() ?></option>
        <?php endforeach; ?>
    </select>
    <select name="customer_id" id="">
        <?php
        foreach ($customers as $key => $customer): ?>
            <option value="<?php echo $customer->getId(); ?>"><?php echo $customer->getName(); ?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="ADD">
</form>
