<style>
    th, td {
        border: 1px solid black;
        text-align: center;
    }

    table {
        width: 100%;
    }

</style>
<table>
    <tr>
        <th>Name</th>
        <td><?php echo $billDetails[0]['name'] ?></td>
    </tr>
    <tr>
        <th>Phone</th>
        <td><?php echo $billDetails[0]['phone'] ?></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><?php echo $billDetails[0]['email'] ?></td>
    </tr>
    <tr>
        <th>Address</th>
        <td><?php echo $billDetails[0]['address'] ?></td>
    </tr>
    <tr>
        <th>Total Price</th>
        <td><?php echo $billDetails[0]['totalPrice'] ?></td>
    </tr>
    <tr>
        <th>Status</th>
          <td><?php echo $billDetails[0]['status'] ?></td>
    </tr>

    </tr>
    <tr>







    </tr>
</table>
<table>
    <tr>
        <th>STT</th>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Product Price</th>
    </tr>

    <?php if (empty($billDetails)): ?>
        <tr>
            <td>
                No Data
            </td>
        </tr>
    <?php else: ?>
        <?php foreach ($billDetails as $key => $bills): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $bills[1] ?></td>
                <td><?php echo $bills['quantity'] ?></td>
                <td><?php echo $bills['price'] ?></td>


            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>
<?php
echo "<pre>";
print_r($billDetails); ?>