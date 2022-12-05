<?= session()->getFlashData("Error") ?>
<?= service("validation")->listErrors() ?>

<div class="container">
	<div class="row">
		<div class="col col-md-6">
			<form class="my-5" action="/news/create" method="POST">
				<?= csrf_field() ?>

				<label for="title">Title</label>
				<input class="form-control mb-3" name="title" id="title" type="text" required/>

				<label for="body">Text</label>
				<textarea class="form-control mb-3" rows="10" name="body" id="body" required></textarea>

				<button class="btn btn-primary" type="submit">Create news item</button>
			</form>
		</div>
	</div>
</div>
