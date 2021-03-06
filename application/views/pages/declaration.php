<!DOCTYPE html>
<html lang="en">
<head>
  <title>Personal Declaration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
  <script>
  function terms_changed(termsCheckBox){
    //If the checkbox has been checked
    if(termsCheckBox.checked){
        //Set the disabled property to FALSE and enable the button.
        document.getElementById("submit_button").disabled = false;
    } else{
        //Otherwise, disable the submit button.
        document.getElementById("submit_button").disabled = true;
    }
}
</script>
  
  
  <style>
	body{
		background: #aaa;
	}
	.container{
		background: #fff;
		padding: 10px;
		margin-top: 10px;
		border-radius: 10px;
		max-width: 700px;
	}
</style>
</head>
<body>

<div class="container">
  <h2></h2>
  <form action="/action_page.php">
    <div class="form-group">
      <h2 style="text-align:center">Applicant's Declaration</h2>
    </div>
<ol style="line-height:25px; text-align:justify">
    <li> I am aware that I have forwarded my application in accordance with paragraph10.0 of the Gazette Notification, after reading and comprehending the Gazette Notification well.</li>
    <li> I certify that I have already acquired the qualifications mentioned in the Gazette Notification relevant to the Courses that have been applied by me.</li>
    <li> I am aware that the particulars furnished in the application by me are true and correct. I am aware that if any particulars given by me in this application are found to be false or incorrect or contradictory to the Gazette Notification, I am liable to be disqualified before selection or to be discontinued after selection.</li>
    <li> I certify that I have not registered to follow a course in a University/University Institute/any other Higher Education Institute/ I am not currently following a relevant course in an afore mentioned institute. I further certify that I agree to be discontinued from the course if It is found that the section 8.4 of the Gazette Notification has been/is violated by me.</li>
    <li> I declare that I agree to accept any punishment pronounced by the disciplinary board of the National College of Education and the Ministry of Education if I am found and proven to have been engaged in any action against the code of conduct of National Colleges of Education.</li>

</ol>
    <p style="text-align:justify">
    
    
    </p>
    <br>
   
    <div class="form-group row">
    <!-- <div class="col-sm-2">Checkbox</div> -->
    <div class="col-sm-10">
      <div class="form-check" style="font-size:20px;padding-left:50px">
        <input class="form-check-input" onclick="terms_changed(this)" type="checkbox" id="gridCheck1" >
        <label style="font-size:20px;padding-left:10px" class="form-check-label" for="gridCheck1">
          Agree 
        </label>
      </div>
    </div>
    <div class="form-group">
    <button type="submit" id="submit_button" name="btnnext" class="btn btn-info" disabled><span  class="glyphicon glyphicon-arrow-right" ></span> Next </button>
     </div>
  </div>
  </form>
</div>

</body>
</html>
