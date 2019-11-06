<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Consumer Feedback</title>
  </head>
  
  <body>
    <img src="logo.jpg" width="190"><br>
    <br>
    <h1>
    ABC Restaurant - Consumer Feedback
    </h5>
    <br>
    <p>Welcome to the ABC Restaurant Customer Feedback Form. We want to hear from you! Please share you comments or concerns regarding any of ABC outlets in Malaysia</p>
    <i>This feedback from pertains to ABC restaurants in Malaysia</i> <br>
    <b>Details about your Experience</b>
    <hr>
    <form name="consumerform" action="addconsumer.php" method="post">
      <select name="optExperience">
        <option selected>Select from List</option>
        <option value="Satisfied">Satisfied</option>
        <option value="Unsatisfied">Unsatisfied</option>
      </select>
      <br>
      <br>
      <b>Please tell us which ABC restaurant you are writing about.</b>
      <hr>
      <select name="selRestaurant" id="selRestaurant">
        <option selected>Select from list</option>
        <option value="Machang">Machang</option>
        <option value="Kota Bharu">Kota Bharu</option>
      </select>
      <br>
      <input type="checkbox" name="chkSpecific" onClick="chkClicked()" id="chkSpecific">
      Not about a specific restaurant
      </button>
      <br>
      <br>
      <b>Date of Service:</b>
      <hr>
      <input type="date" name="dateService">
      <br>
      <b>Your Feedback:</b>
      <hr>
      <textarea rows="5" name="txtFeedback" style="width: 100%"></textarea>
      <br>
      Salutation
      <input type="radio" name="radSalutation" value="Mr">
      Mr
      <input type="radio" name="radSalutation" value="Mrs">
      Mrs
      <input type="radio" name="radSalutation" value="Miss">
      Miss<br>
      <b>Name:</b>
      <hr>
      <input type="text" name="txtName">
      <br>
      <br>
      <b>Email Address:</b>
      <hr>
      <input type="text" name="txtEmail">
      <br>
      <br>
      <b>Phone Number:</b>
      <hr>
      <input type="text" name="txtPhone">
      <br>
      <br>
      <input type="button" value="Send Feedback" onClick="verify()">
      <input type="button" value="View feedback" onclick="window.location.href='ViewFeedback.php'">
    </form>
    <script>
        function chkClicked()
        {
            var checkBox = document.getElementById("chkSpecific");
            var sel = document.getElementById("selRestaurant");

            if(checkBox.checked)
                sel.disabled=true;
            else
                sel.disabled=false;
        }
        
        function verify()
        {
            var email= document.getElementsByName("txtEmail").text;
            var number = document.getElementsByName("txtPhone").text;
            
            
            if(!validateEmail(email))
            {
                alert("You entered invalid email!");
                return;
            }
            else if(!Number.isInteger(number))
            {
                alert("You entered invalid phone number!");
                return;
            }
            document.getElementById("consumerform").submit();
        }
                    
        
        function validateEmail(email) 
        {
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.emailAddr.value))
                return (true);
            return (false);
        }
    </script>
  </body>
</html>
