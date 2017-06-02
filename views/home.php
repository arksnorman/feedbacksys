<div class="container">

	<!--Jumbotron-->
    <div style="background-color: #5fcf80; margin-top: 50px;" class="text-center jumbotron">
    
        <h1 class="text-white h1-responsive"><?=brand;?> Internship Feedback</h1>

        <p class="text-white lead">Give us your feedback about our Internship Services</p>

    </div>
    <!--/.Jumbotron-->

    <br />

    <?php 

    	if (isset($_GET['status']) && $_GET['status'] = 'success') 
    	{
    		
    		echo '
    		<div class="card card-success text-center z-depth-2">
        		<div class="card-block">
           		 <p class="white-text">Thanks for your feedback</p>
       			 </div>
    		</div>

    		<br />';

    	}

    	elseif (count($errorList)) 
    	{

    		echo '<div class="card card-danger text-center z-depth-2">
	        		<div class="card-block">';

    		foreach ($errorList as $error) 
    		{

    			echo '<p class="white-text">' . $error . '</p>';
    		}

    		echo "</div></div><br />";

    	}

    ?>

    <div class="row">

	    <div class="col-md-6">

	    	<form action="/" method="POST" role="form">

			<div class="card card-block">

				<br />

				<div class="md-form">

					<select class="mdb-select colorful-select dropdown-info" name="trainer">

					    <option></option>

					    <?php

							foreach ($trainerList as $trainer) 
							{
								
								echo "<option>{$trainer->name}</option>";

							}

						?>

					</select>

					<label>Select trainer *</label>

				</div>

			    <div class="md-form">
			        <i class="fa fa-user prefix"></i>
			        <input type="text" id="form4" class="form-control" name="trainerImproveOn">
			        <label for="form4">What should this trainer improve on *</label>
			    </div>

			    <div class="md-form">
			        <label for="like">Do you like this trainer</label>
			    </div>

				<div class="switch md-form">
					<label>No<input type="checkbox" name="like"><span class="lever"></span>Yes</label>
				</div>

				<br />

				<br />

				<div class="md-form">
			        <label for="understand">Do you understand what he/she teaches</label>
			    </div>

				<div class="switch md-form">
					<label>No<input type="checkbox" name="understand"><span class="lever"></span>Yes</label>
				</div>

				<br />

				<br />

			</div>

		</div>

		<div class="col-md-6">

			<div class="card card-block">

			    <div class="md-form">
				    <i class="fa fa-pencil prefix"></i>
				    <textarea type="text" id="form1" class="md-textarea" name="likeComment"></textarea>
				    <label for="form1">What do you like about this trainer *</label>
				</div>


				<div class="md-form">
				    <i class="fa fa-pencil prefix"></i>
				    <textarea type="text" id="form2" class="md-textarea" name="dontLikeComment"></textarea>
				    <label for="form2">What don't you like about this trainer *</label>
				</div>

				<div class="md-form">
				    <i class="fa fa-pencil prefix"></i>
				    <textarea type="text" id="form3" class="md-textarea" name="milestoneImproveOn"></textarea>
				    <label for="form3">What should <?=brand;?> improve on *</label>
				</div>

			    <div class="text-center">
			        <button class="btn btn-info" name="submit">Submit</button>
			    </div>

			</div>

			</form>

		</div>

	</div>

</div>

