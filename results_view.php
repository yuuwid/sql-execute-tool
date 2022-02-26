<?php

?>

<div class="container mt-3">
    <?php if ($error == false) : ?>
        <h5>Query: <?= $query ?></h5>
        <hr>
        <?php if ($results !== []) : ?>
            <table class="table table-hover table-responsive">
                <thead>
                    <tr>
                        <?php foreach ($columns as $col) : ?>
                            <th scope="col"><?= $col ?></th>
                        <?php endforeach ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($results as $data) : ?>
                        <tr>
                            <?php foreach ($columns as $col) : ?>
                                <td><?= $data[$col] ?></td>
                            <?php endforeach ?>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        <?php else : ?>
            <?php if (inString($query, ['INSERT', 'UPDATE', 'DELETE'])) : ?>
                <h5>OKE</h5>
            <?php else: ?>
                <h5>Tidak Ditemukan</h5>
            <?php endif; ?>
        <?php endif; ?>
    <?php else : ?>
        <h5>Query: <?= $query ?></h5>
        <h6>Error: <?= $error ?></h6>
    <?php endif; ?>
</div>