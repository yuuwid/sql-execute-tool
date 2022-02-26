<?php
?>

<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Koneksi ke Mysqli
            </button>
        </h2>


        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <pre class="hljs" style="display: block; overflow-x: auto; padding: 0.5em; background: rgb(240, 240, 240); color: rgb(68, 68, 68);">$conn = mysqli_connect("<?= DB_HOST ?>", "<?= DB_USER ?>", "<?= DB_PASS != '' ? DB_PASS : "" ?>", "<?= DB_NAME ?>");

<span class="hljs-keyword" style="font-weight: 700;">if</span> (mysqli_connect_errno()) {
    <span class="hljs-keyword" style="font-weight: 700;">echo</span> <span class="hljs-string" style="color: rgb(136, 0, 0);">"Failed to connect - "</span> . mysqli_connect_errno();
}</pre>
            </div>
        </div>
    </div>


    <?php if ($prepare != '' && inString($query, ['?'])) : ?>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Prepare
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <pre class="hljs" style="display: block; overflow-x: auto; padding: 0.5em; background: rgb(240, 240, 240); color: rgb(68, 68, 68);"><span class="hljs-function"><span class="hljs-keyword" style="font-weight: 700;">function</span> <span class="hljs-title" style="color: rgb(136, 0, 0); font-weight: 700;">prepare</span><span class="hljs-params">($query, $param, $data = [])</span>
</span>{
    <span class="hljs-keyword" style="font-weight: 700;">global</span> $conn;

    $stmt = mysqli_prepare($conn, $query);

    mysqli_stmt_bind_param($stmt, $param, ...array_values($data));

    $result = mysqli_stmt_execute($stmt);

<?php if(inString($query, ["INSERT", "UPDATE", "DELETE"]) == true): ?>
    <span class="hljs-keyword" style="font-weight: 700;">return</span> $result;
<?php else: ?>
    <span class="hljs-keyword" style="font-weight: 700;">return</span> mysqli_stmt_get_result($stmt);
<?php endif; ?>
}

$prepare = prepare("<?= $query ?>", "<?= $param ?>", [<?= $prepareData ?>]);</pre>
                </div>
            </div>
        </div>
    <?php endif; ?>


    <?php if (!inString($query, ['?'])) : ?>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Query
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <pre class="hljs" style="display: block; overflow-x: auto; padding: 0.5em; background: rgb(240, 240, 240); color: rgb(68, 68, 68);"><span class="hljs-function"><span class="hljs-keyword" style="font-weight: 700;">function</span> <span class="hljs-title" style="color: rgb(136, 0, 0); font-weight: 700;">query</span><span class="hljs-params">($query)</span>
</span>{
    <span class="hljs-keyword" style="font-weight: 700;">global</span> $conn;
    <span class="hljs-keyword" style="font-weight: 700;">return</span> mysqli_query($conn, $query);
}

$result = query("<?= $query ?>");</pre>


                </div>
            </div>
        </div>
    <?php endif; ?>




    <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Fetch
            </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <pre class="hljs" style="display: block; overflow-x: auto; padding: 0.5em; background: rgb(240, 240, 240); color: rgb(68, 68, 68);"><span class="hljs-function"><span class="hljs-keyword" style="font-weight: 700;">function</span> <span class="hljs-title" style="color: rgb(136, 0, 0); font-weight: 700;">fetch</span><span class="hljs-params">($result)</span>
</span>{
    $data = [];
    <span class="hljs-keyword" style="font-weight: 700;">while</span> ($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    <span class="hljs-keyword" style="font-weight: 700;">return</span> $data;
}

<?php if( inString($query, ['?']) ): ?>
$prepare = prepare("<?= $query ?>", "<?= $param ?>", [<?= $prepareData ?>]);
<?php else: ?>
$result = query(<?= $query ?>);
<?php endif;?>
$data = fetch($result);</pre>
            </div>
        </div>
    </div>



    <div class="accordion-item">
        <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                Print Data
            </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <pre class="hljs" style="display: block; overflow-x: auto; padding: 0.5em; background: rgb(240, 240, 240); color: rgb(68, 68, 68);"><span class="hljs-keyword" style="font-weight: 700;">foreach</span> ($data <span class="hljs-keyword" style="font-weight: 700;">as</span> $d)
{
    <span class="hljs-keyword" style="font-weight: 700;">echo</span> $data[ $col_name ];
}</pre>
            </div>
        </div>
    </div>



</div>