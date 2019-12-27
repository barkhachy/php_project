<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.bold {
  font-weight: bold;
}

/* Style all input fields */
.container .input-field, .container .submit-form{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}

/* Style the submit button */
.container .submit-form {
  background-color: #4CAF50;
  color: white;
}

/* Style the container for inputs */
.container {
  background-color: #f1f1f1;
  padding: 20px;
}

/* The message box is shown when the user clicks on the password field */
.messages {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

.messages p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}

</style>
</head>
<body>
<div class="container">
<body>
<div class="reg" style="float:left;background:peachpuff; 
width:60%;
height:500px;
borer:solid teal">
   <h2 class="offset-md-5"style="margin-top:20px">Personal Information</h2>
 <form style="margin-top:40px">
    <div class="form-group row">
        <label for="inputName3" class="col-sm-2 offset-md-1 col-form-label"style="font-weight:bold">Name:</label>
            <div class="col-sm-8">
                <input type="name" class="form-control" id="inputName3" placeholder="Name" required>
            </div>
    </div>
    <fieldset class="form-group">
        <div class="row">
            <legend class="col-form-label col-sm-2 offset-md-1  pt-0" style="font-weight:bold">Gender:</legend>
            <div class="col-sm-8">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                    <label class="form-check-label" for="gridRadios1"> Male </label>
                </div>
                        
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">Female</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" >
                    <label class="form-check-label" for="gridRadios3"> Others</label>
                </div>
             </div>
         </div>
    </fieldset>
                          
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2  offset-md-1 col-form-label" style="font-weight:bold">Email:</label>
        <div class="col-sm-8">
             <input type="email" class="form-control" id="inputEmail3" required placeholder="Email">
        </div>
    </div>
    
    <div class="form-group row">
        <label for="psw" class="col-sm-2 offset-md-1 col-form-label"style="font-weight:bold">Password:</label>
        <div class="col-sm-8">
            <input type="password" class="form-control" id="psw"  name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputMumber3" class="col-sm-2 offset-md-1 col-form-label"style="font-weight:bold">Mobile Number:</label>
        <div class="col-sm-8">
          <input type="tel" class="form-control input_user" id="inputMobile3" required placeholder="Mobile Number">
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleFormControlTextarea1"class="col-sm-2  offset-md-1 col-form-label"style="font-weight:bold">Short Introduction:</label>
        <div class="col-sm-8">
            <textarea class="form-control" id="exampleFormControlTextarea1"  required rows="5"></textarea>
        </div>
    </div>
  
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" style="background-color: lawngreen;"class="btn btn-primary offset-md-7">Submit</button>
        </div>
    </div>
 </form>
 </div>
<div class="login" style="float:left;background:peachpuff; 
width:40%;
height:500px;
border:solid black">
 <form>
     <h2 style="color:teal">Enter your details to login</h2>
    <div class="username">
      <label for="usrname">Username</label>
      <input type="text" id="usrname" name="usrname" class="input-field" required>
    </div>

    <div class="password">
      <label for="psw">Password</label>
      <input type="password" class="input-field" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
    </div>
    <button id="submitForm" type="submit" value="Submit" class="submit-form" >Submit</button>
  </form>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="message" class="messages">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <span class="bold">lowercase</span> letter</p>
  <p id="capital" class="invalid">A <span class="bold">capital (uppercase)</span> letter</p>
  <p id="number" class="invalid">A <span class="bold">number</span></p>
  <p id="length" class="invalid">Minimum <span class="bold">8 characters</span></p>
</div>
</div>
<script>
  (function () {
    var myInput = document.getElementById("psw");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");
    var message = document.getElementById("message");
		var submit = document.getElementById("submitForm");
		var username = document.getElementById("usrname");
    var generic;

    var validators = {
      lowerCaseLetters: /[a-z]/g,
      upperCaseLetters: /[A-Z]/g,
      numbers:  /[0-9]/g,
      length: 8
    }

    class Generic {
      addClass(el, className) {
        el.classList.add(className);
      }
      removeClass(el, className) {
        el.classList.remove(className)
      }
      addEvent(el, event, callback) {
        el.addEventListener(event, callback);
      }
    }


    function eventListeners () {
      generic.addEvent(myInput, 'keyup', keyupC);
      generic.addEvent(myInput, 'focus', focusC);
      generic.addEvent(myInput, 'blur', blurC);
			generic.addEvent(submit, 'click', submitC);
    }

    // When the user clicks on the password field, show the message box
    var focusC = function() {
      message.style.display = "block";
    }

    // When the user clicks outside of the password field, hide the message box
    var blurC = function() {
      message.style.display = "none";
    }

    // When the user starts to type something inside the password field
    var keyupC = function() {
      var validate = new Validate();
      validate.check();
    }

    class Validate {

      check() {
        if(myInput.value.match(validators.lowerCaseLetters)) {
          generic.removeClass(letter, "invalid");
          generic.addClass(letter, "valid");
        } else {
          generic.removeClass(letter, "valid");
          generic.addClass(letter, "invalid");
        }

        // Validate capital letters
        if(myInput.value.match(validators.upperCaseLetters)) {
          generic.removeClass(capital, "invalid");
          generic.addClass(capital, "valid");
        } else {
          generic.removeClass(capital, "valid");
          generic.addClass(capital, "invalid");
        }

        // Validate numbers
        if(myInput.value.match(validators.numbers)) {
          generic.removeClass(number, "invalid");
          generic.addClass(number, "valid");
        } else {
          generic.removeClass(number, "valid");
          generic.addClass(number, "invalid");
        }

        // Validate length
        if(myInput.value.length >= validators.length) {
          generic.removeClass(length, "invalid");
          generic.addClass(length, "valid");
        } else {
          generic.removeClass(length, "valid");
          generic.addClass(length, "invalid");
        }
      }
    }

    function init() {
      generic = new Generic();
      eventListeners();
    }

    init();
})();

</script>

</body>
</html>