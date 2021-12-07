<div class="row m-3">
<h4 class="text-center">Add an item update</h4>
	<div class="container">
		<form method="POST" action="process-add-update.php" enctype="multipart/form-data">
			<div class="form-group">
				<input type="text" name="title" class="form-control" placeholder="Tiltle">
			</div>
			<div class="form-group">
				<textarea name="description" class="form-control" placeholder="Description" rows="5"></textarea>
			</div>
			<div class="form-group">
				<label for="file"> Select an image</label>
				<input type="file" name="image" class="form-control">
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit" name="submit">Submit</button>
				<button class="btn btn-warning" type="reset" name="reset">Reset</button>
			</div>
		</form>
	</div>
</div>