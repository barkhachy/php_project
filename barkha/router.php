<?php
    function home($name) 
    {
        echo "
        <!DOCTYPE html>
        <html>
            <h1>Welcome {$name} You have successfully registered</h1>
        </html>
        "
    ;}

    function alumniRegister()
    {
        echo '
        <!DOCTYPE html>
        <html> 
            <form method="POST", action="register.php">
                <div class="container">
                    <h1>Register</h1>
                    <p>Please fill in this form to create an account.</p>
                    <hr>
                    <label for="Name"><b>Name</b></label>
                    <input type="text" placeholder="Enter Your Name" name="Name" required>
    
                    <label for="UserName"><b>UserName</b></label>
                    <input type="text" placeholder="Enter A unique UserName" name="UserName" required>
    
                    <label for="Email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="Email" required>
    
                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="Password" required>
    
                    <label for="Mobile"><b>Mobile</b></label>
                    <input type="text" placeholder="Mobile" name="Mobile" required>
                    
                    <label for="Address"><b>Address</b></label>
                    <input type="text" placeholder="Enter Your Address" name="Address" required>
                    <hr>
    
                    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                    <button type="submit" class="registerbtn">Register</button>
                </div>
    
                <div class="container signin">
                    <p>Already have an account? <a href="#">Sign in</a>.</p>
                </div>
            </form>
        </html>
        
        ';
    }
?>