<?php

?>
    <style>

        td,th {
            border: 1px solid black;
        }
    </style>
    <a href="index.php?page=add-bill" class="btn btn-primary mt-3 mb-3">ADD NEW BILL</a>
    <table class="table table-hover">

        <tr>
            <th>Bill_ID</th>
            <th>Customer Name</th>
        </tr>
        <?php if (empty($bills)): ?>
            <tr>
                <td>
                    No Data
                </td>
            </tr>
        <?php else: ?>
            <?php foreach ($bills as $key => $bill): ?>
                <tr>
                    <td><a href="index.php?page=bill-detail&id=<?php echo $bill->getId()?>"><?php echo $bill->getId() ?></a></td>
                    <td><?php echo $customers[$key]->getName()?></td>

                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
<!--        --><?php
//        echo "<pre>";
//        print_r($customers); ?>

    </table>

<?php
