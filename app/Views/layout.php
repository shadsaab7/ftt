<!DOCTYPE html>
<html lang="en">

<head>
	<?= view('components/head') ?>
</head>

<body>
	<div class="container w-100 p-0 m-0">
		<div class="top_panel">
			<?= view('components/top-panel') ?>
		</div>

		<?= $this->renderSection('content') ?>

		<?= view('components/footer-menu') ?>

	</div>

	<?= view('components/footer') ?>

	<?= $this->renderSection('javascript') ?>
</body>

</html>