<?php if (!empty($animals)): ?>
    <section>
        <table>
            <?php foreach ($animals as $animal): ?>
                <tr>
                    <td><?= $animal->__get('id'); ?></td>
                    <td><?= $animal->__get('name'); ?></td>
                    <td>
                        <form action="" method="get">
                            <input type="hidden" name="id" value="<?= $animal->__get('id'); ?>">
                            <input type="submit" value="Modifier" name="getproduct">
                        </form>
                    </td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $animal->__get('id'); ?>">
                            <input type="submit" value="Supprimer" name="deleteproduct">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
<?php endif; ?>