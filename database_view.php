<?php
$tables = $db->list_tables();
?>

<div class="mt-4 text-end">
    <form action="./" method="post">
        <button name="reset_db" class="btn btn-sm btn-danger">Reset Database</button>
    </form>
</div>
<div class="d-flex align-items-start mt-4">


    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <?php $i = 1; ?>
        <?php foreach ($tables as $table) : ?>
            <button class="nav-link <?= ($i++ == 1) ? 'active' : '' ?>" id="v-pills-<?= $table ?>-tab" data-bs-toggle="pill" data-bs-target="#v-pills-<?= $table ?>" type="button" role="tab" aria-controls="v-pills-<?= $table ?>" aria-selected="true"><?= $table ?></button>
        <?php endforeach ?>
    </div>
    <div class="tab-content container border-start" id="v-pills-tabContent">
        <?php $i = 1; ?>
        <?php foreach ($tables as $table) : ?>
            <?php
            $data = $db->query("SELECT * FROM $table", [])->execute(FETCH_MULTI)->results();

            $columns = [];
            foreach ($data as $d) {
                foreach ($d as $col => $val) {
                    $columns[] = $col;
                }
                break;
            }
            ?>
            <div class="tab-pane fade <?= ($i++ == 1) ? 'show active' : '' ?>" id="v-pills-<?= $table ?>" role="tabpanel" aria-labelledby="v-pills-<?= $table ?>-tab">
                <div class="container">
                    <table class="table table-hover table-responsive">
                        <thead>
                            <tr>
                                <?php foreach ($columns as $col) : ?>
                                    <th scope="col"><?= $col ?></th>
                                <?php endforeach ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $d) : ?>
                                <tr>
                                    <?php foreach ($columns as $col) : ?>
                                        <td><?= $d[$col] ?></td>
                                    <?php endforeach ?>
                                </tr>
                            <?php endforeach ?>

                        </tbody>
                    </table>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>