<div class="container">

	<br>

	<h1 class="text-center"><?=company;?></h1>

	<br>

	<h3 class="text-center">Give us your feedback</h3>

	<br><hr /><br><br>
	
	<div class="row">

		<div class="col-md-4">
			
			<form action="post.php" method="POST" role="form">

				<div class="form-group">

					<label for="selecttrainer">Select Trainer</label>

					<select class="form-control" name="trainer" id="selecttrainer" required>

					<option></option>

					<?php

						foreach ($trainerList as $trainer) 
						{
							
							echo "<option>{$trainer->trainer_name}</option>";

						}

					?>

					</select>

				</div>

				<div class="form-group">

					<label for="liketrainercomment">What do you like about this trainer</label>

					<textarea class="form-control" rows="3" name="liketrainercomment" id="liketrainercomment"></textarea>

				</div>

				<div class="form-group">
					
					<label for="liketrainer">Do you like this trainer</label><br>

					<input type="checkbox" value="yes" name="checkbox"> Check box if yes

				</div>

		</div>

		<div class="col-md-4">

				<div class="form-group">

					<label for="unliketrainercomment">What dont you like about this trainer</label>

					<textarea class="form-control" rows="4" name="unliketrainercomment" id="unliketrainercomment"></textarea>

				</div>	

				<div class="form-group">

					<label for="improveOn">What should this trainer improve on </label>

					<textarea class="form-control" rows="4" name="improveOn" id="improveOn"></textarea>

				</div>			

		</div>

		<div class="col-md-4">
			
				<div class="form-group">

					<label for="milestoneImproveOn">What should <?=company;?> improve on</label>

					<textarea class="form-control" rows="4" name="milestoneImproveOn" id="milestoneImproveOn"></textarea>

				</div>

				<div class="form-group">

					<label for="understand">Do you understand what he teaches.</label>

					<textarea class="form-control" rows="4" name="understand" id="understand"></textarea>

				</div>

				<button type="submit" name="submit" class="btn btn-info">Submit</button>

			</form>

		</div>

	</div>

</div>

