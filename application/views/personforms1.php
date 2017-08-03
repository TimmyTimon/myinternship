<!doctype html>
<html>
<head>
<title>Saidizi</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<link href="css/bootstrap.min.css" rel="stylesheet">
<script text="type/javascript" src="jquery-3.0.0.min.js"></script>
</head>
<body>

	< <?php echo form_open('person1','class="form-horizontal"'); ?> 
	 <div class="page-header">
             <h2>Educational Information</h2>
           </div>
           <br>
           <br>
              
              <div class="form-group">
           	<label for="college" class="col-sm-2 control-label">College/University</label>
           		<div class="col-sm-5">
           			<input type="text" class="form-control" id="college" name="college" placeholder="College/University Name">
           		</div>
           	</div>

           	<div class="form-group">
           	<label for="degree" class="col-sm-2 control-label">Degere/Course</label>
           		<div class="col-sm-5">
           			<input type="text" class="form-control" id="degree" name="degree" placeholder="degree">
           		</div>
           	</div>


            <div class="page-header">
             <h2>Contact Details</h2>
           </div>
           <br>
           <br> 
               <div class="form-group">
           	<label for="phone" class="col-sm-2 control-label">Phone number</label>
           		<div class="col-sm-5">
           			<input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number">
           		</div>
           	</div>

           	<div class="form-group">
           	<label for="box" class="col-sm-2 control-label">P.O Box</label>
           		<div class="col-sm-5">
           			<input type="text" class="form-control" id="box" name="box" placeholder="P.O BOX">
           		</div>
           	</div>

           		<div class="form-group">
           	<label for="pemail" class="col-sm-2 control-label">Email</label>
           		<div class="col-sm-5">
           			<input type="text" class="form-control" id="pemail" name="pemail" placeholder="Email Address">
           		</div>
           	</div>
             
             <button input type="submit" class="btn btn-danger">Submit</button>
           	<button input type="reset" class="btn btn-warning">Clear</button>
            </form>

        </body>
        </html>