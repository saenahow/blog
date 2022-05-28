<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= base_url('assets/styles/main.css') ?>">
	<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">
	<title>Document</title>
</head>

<body>
	<div class="flex flex-col">
		<?php $this->load->view("./layouts/header"); ?>
		<div class="mt-[75px]">
			<?php $this->load->view($page); ?>
		</div>
		<?php $this->load->view("./layouts/footer"); ?>
	</div>
</body>

</html>
