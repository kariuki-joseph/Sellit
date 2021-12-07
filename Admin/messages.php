<div class="container">
<div class="row">
			<?php
			include 'dbConnect.php';
			//get messages
			$query = mysqli_query($conn,"SELECT * FROM messages");
			if (mysqli_num_rows($query)>0) {
				while ($row = mysqli_fetch_array($query)) {
			?>
			<div class="col-sm-6 col-md-6">
			<div class="card m-2">
				<div class="card-header">
					Message from <strong><?php echo $row['name'];?></strong>. Email/phone: <strong><?php echo $row['email'];?></strong>
					on <strong><?php echo $row['time']; ?></strong>
				</div>
				<div class="card-body">
					<h4><b><?php echo $row['subject']; ?>.</b></h4>
					<p>
						<?php echo $row['message']; ?>
					</p>
				</div>
			</div>
			</div>
			<?php
		}
			}else{
				die("You currently have no messages");
			}
			?>
	</div>
</div>