<!doctype html>
<html>
<head>
	<title>Saidizi</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<link href="css/bootstrap.min.css" rel="stylesheet">
<script text="type/javascript" src="jquery-3.0.0.min.js"></script>
</head>
<body>
	<div id="container">
		<div class="jumbotron">
			<h1>Saidizi</h1>
		</div>

		<div id="maincontainer">

      <?php echo validation_errors();?>

        <?php echo form_open('person','class="form-horizontal"');?> 

			<div class="page header">
				<h2>Personal Details</h2>
			</div>
           <br>
           <br>
           
           <div class="form-group">
           	<label for="fname" class="col-sm-2 control-label">First Name</label>
           		<div class="col-sm-5">
           			<input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
           		</div>
           	</div>

           	<div class="form-group">
           	<label for="lname" class="col-sm-2 control-label">Last Name</label>
           		<div class="col-sm-5">
           			<input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
           		</div>
           	</div>

           	<div class="form-group">
           	<label for="dob" class="col-sm-2 control-label">Date Of Birth</label>
           		<div class="col-sm-5">
           			<input type="date" class="form-control" id="dob" name="dob" placeholder="DOB">
           		</div>
           	</div>

           	<div class="form-group">
           	<label for="gender" class="col-sm-2 control-label">Gender</label>
           		<div class="col-sm-5">
           			<select class="form-control" id="gender" name="gender">
           				<option value='male' <?php echo set_select('gender','male',TRUE)?>>Male</option>
           				<option value='female' <?php echo set_select('gender','female')?>>Female</option>
           			</select>
           			           		</div>
           	</div>

           	<button input type="submit" class="btn btn-danger">Submit</button>
           	<button input type="reset" class="btn btn-warning">Clear</button>

 </form>
     <br>
     <br>
     <br>

          
            <br>
            <br>
            <br>

            
            <br>
            <br>
            <br>

            <div  class="jumbotron">
            	<p>Copyright (C) Saidizi Inc 2017</p>
            </div>

		</div>

	</div>

	<script src="//code.jquery.com/jquery-3.0.0.min.js">
     $(document).ready(function(){
     	$("form").submit(function(event){
     		if($("#fname").val()== "" ){
     			alert("Please fill in all the fields");
     			event.preventDefault();
     			return false;
     		}
     	});
     });
	</script>
</body>
</html>