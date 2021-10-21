<!--add faq quiz-->
<div class="row m-3">
	<h4 class="text-center">Answer the most frequently asked questions</h4>
	<div class="container">
		<form method="POST" action="process-add-quiz.php">
			<div class="form-group">
				<input type="text" name="question" class="form-control" placeholder="Question">
			</div>
			<div class="form-group">
				<textarea name="answer" placeholder="Answer" class="form-control" rows="5"></textarea>
			</div>
			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-primary">Submit</button>
				<button type="reset" name="reset" class="btn btn-warning">Reset</button>
			</div>
		</form>
	</div>
</div>