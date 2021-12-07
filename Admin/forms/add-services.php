<div class="row m-3">
	<h4 class="text-center">Add services that you offer</h4>
	<div class="container">
		<form method="POST" action="process-add-services.php">
			<div class="form-group">
				<input type="text" name="service_title" placeholder="Title of the service" class="form-control">
			</div>
			<div class="form-group">
				<textarea name="sevice_description" placeholder="Description of the service" class="form-control" rows="5"></textarea>
			</div>
			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-success">Submit</button>
				<button type="reset" name="reset" class="btn btn-warning">Reset</button>
			</div>
		</form>
	</div>
</div>