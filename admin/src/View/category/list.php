<a href="index.php?page=add-category">ADD NEW CATEGORY</a>
<div class="pt-3">
    <table border="1" class="table table-hover">
        <thead class="badge-dark">
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Country</th>
        </tr>
        </thead>
        <?php if (empty($categories)): ?>
            <tr>
                <td>No data</td>
            </tr>
        <?php else: ?>
            <?php foreach ($categories as $key => $category) : ?>
                <tr>
                    <td><?php echo ++$key ?></td>
                    <td><?php echo $category->getName() ?></td>
                    <td><?php echo $category->getCountry() ?></td>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
</div>