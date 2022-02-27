<?php
require('./f_home.php');

require('./layouts/main_header.php');
require('./layouts/main_navbar.php');
?>


<div class="container mt-4">

	<form method="post" action="./">

		<div class="mb-3">
			<label for="queryInput" class="form-label fw-bold">Query</label>
			<textarea name="query" class="form-control" id="queryInput" rows="3" required><?= old('query') ?></textarea>
		</div>
		<div class="d-flex justify-content-end">
			<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="checkboxData" onchange="inputPrepareData()" <?= old('data') ? 'checked' : '' ?>>
				<label class="form-check-label" for="checkboxData">
					Perlu Prepare Data ?
				</label>
			</div>
		</div>

		
		<div class="" id="prepareData" style="visibility: <?= old('data') ? 'visible' : 'hidden' ?>; height: <?= old('data') ? 'auto' : '0px' ?>;">
			<div class="mb-3">
				<label for="dataInput" class="form-label fw-bold">Data</label>
				<textarea name="data" class="form-control" id="dataInput" rows="2"><?= old('data') ?></textarea>
			</div>
			<div class="mb-3">
				<label for="formatInput" class="form-label fw-bold">Format Data</label>
				<input name="format" class="form-control" id="formatInput" value="<?= old('format') ?>"></input>
				<div id="emailHelp" class="form-text">String = <b>s</b>; Integer = <b>i</b>; Float/Double = <b>d</b>; Boolean = <b>b</b></div>
  
			</div>
		</div>

		<div class="text-end mt-3">
			<button name="request" type="submit" class="btn btn-primary">Execute</button>
			<a href="./" type="submit" class="btn btn-warning">Clear</a>
		</div>
	</form>
</div>

<div class="results container pb-5">

	<nav>
		<div class="nav nav-tabs" id="nav-tab" role="tablist">
			<button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Results</button>

			<button class="nav-link" id="nav-database-tab" data-bs-toggle="tab" data-bs-target="#nav-database" type="button" role="tab" aria-controls="nav-database" aria-selected="false">Database</button>

			<button class="nav-link" id="nav-panduan-tab" data-bs-toggle="tab" data-bs-target="#nav-panduan" type="button" role="tab" aria-controls="nav-panduan" aria-selected="false">Panduan</button>
		</div>
	</nav>
	<div class="tab-content" id="nav-tabContent">
		<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
			<?php if (isset($results)) : ?>
				<?php
				require './results_view.php';
				?>
			<?php endif; ?>
		</div>


		<div class="tab-pane fade" id="nav-database" role="tabpanel" aria-labelledby="nav-database-tab">
			<?php
			require './database_view.php'
			?>
		</div>


		<div class="tab-pane fade" id="nav-panduan" role="tabpanel" aria-labelledby="nav-panduan-tab">
			<?php 
			require './guide_view.php'
			?>
		</div>
	</div>

</div>

<script>
	function inputPrepareData() {
		const divInput = document.querySelector('#prepareData');
		const dataInput = document.querySelector('#dataInput');
		const formatInput = document.querySelector('#formatInput');
		const checkboxData = document.querySelector('#checkboxData');

		if (divInput.style.visibility  == 'visible'){
			checkboxData.checked = false;
			divInput.style.visibility  = 'hidden';
			divInput.style.height  = '0px';
			dataInput.value = '';
			dataInput.required  = false;
			formatInput.value = '';
			formatInput.required  = false;
		} else {
			checkboxData.checked = true;
			divInput.style.visibility  = 'visible';
			divInput.style.height  = 'auto';
			dataInput.required  = true;
			formatInput.required  = true;
		}
	}
</script>

<?php
require('./layouts/footer.php')
?>