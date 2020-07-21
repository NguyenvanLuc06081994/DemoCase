<?php
?>
    <style>

    </style>
    <a href="index.php?page=add-customer" class="btn btn-primary mt-3 mb-3">ADD NEW CUSTOMER</a>
    <a href="index.php?page=list-customer" class="btn btn-primary">Cancel</a>
    <form action="index.php?page=search-customer" method="post" class="form-group mt-3 mb-3">
        <input type="text" name="keyword" placeholder="KeyWord" class="form-control">
        <input type="submit" value="Search" class="btn btn-primary mt-3 mb-3">
    </form>

    <table class="table table-hover">

        <tr>
            <th>STT</th>
            <th>Ten</th>
            <th>SDT</th>
            <th>Email</th>
            <th>Dia Chi</th>
            <th colspan="2">Action</th>
        </tr>
        <?php if (empty($customers)): ?>
            <tr>
                <td>
                    No Data
                </td>
            </tr>
        <?php else: ?>
            <?php foreach ($customers as $key => $customer): ?>
                <tr>
                    <td><?php echo ++$key ?></td>
                    <td><?php echo $customer->getName() ?></td>
                    <td><?php echo $customer->getPhone() ?></td>
                    <td><?php echo $customer->getEmail() ?></td>
                    <td><?php echo $customer->getAddress() ?></td>
                    <td><a  href="index.php?page=update-customer&id=<?php echo $customer->getId() ?>" class="btn btn-primary">Update</a></td>
                    <td><a onclick="return confirm('Are You Sure?')" href="index.php?page=delete-customer&id=<?php echo $customer->getId() ?>" class="btn btn-danger">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>

        <tr>
        </tr>
        <?php ?>

    </table>

<?php
