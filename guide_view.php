<?php ?>

<?php if (isset($_POST['request'])) : ?>
    <div class="mt-4">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-mysqli-tab" data-bs-toggle="pill" data-bs-target="#pills-mysqli" type="button" role="tab" aria-controls="pills-mysqli" aria-selected="true">Mysqli</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-mysqli-obj-tab" data-bs-toggle="pill" data-bs-target="#pills-mysqli-obj" type="button" role="tab" aria-controls="pills-mysqli-obj" aria-selected="false">Mysqli Object</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-pdo-tab" data-bs-toggle="pill" data-bs-target="#pills-pdo" type="button" role="tab" aria-controls="pills-pdo" aria-selected="false">PDO</button>
            </li>
        </ul>
        <hr>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                <?php if (inString($_POST['query'], ['SELECT', 'INSERT', 'UPDATE', 'DELETE'])) : ?>
                    <?php mysqli_basic_guide($_POST, '') ?>
                <?php else: ?>
                    <p>Panduan belum dibuat</p>    
                <?php endif; ?>

            </div>


            <div class="tab-pane fade" id="pills-mysqli-obj" role="tabpanel" aria-labelledby="pills-mysqli-obj-tab">

                soon ?

            </div>
            <div class="tab-pane fade" id="pills-pdo" role="tabpanel" aria-labelledby="pills-pdo-tab">

                soon ?

            </div>
        </div>
    </div>
<?php else : ?>
    <p>Lakukan Execute Query terlebih dahulu</p>
<?php endif; ?>