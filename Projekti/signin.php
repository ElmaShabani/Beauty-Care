
</html>
=======
<!DOCTYPE html> 
<html lang="en">
     <head> 
        <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Sign Up</title> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
         <style> html, body { height: 100%; margin: 0; display: flex; align-items: center; justify-content: center; } .container { width: 500px; } </style>
         </head> 
         <body> 
            <div class="container"> 
                <form class="bg-light shadow rounded border" method="post"> 
                    <div class="p-5"> 
                        <div> <label for="validationDefaultUsername" class="form-label">First name::</label> 
                        <div class="input-group"> <span class="input-group-text" id="inputGroupPrepend2"></span> 
                        <input type="text" class="form-control" id="validationDefaultUsername" name="firstname" placeholder="First name" aria-describedby="inputGroupPrepend2" required> </div> 
                    </div> <div> <label for="validationDefault01" class="form-label">Last name::</label>
                     <input type="text" class="form-control" id="validationDefault01" name="lastname" placeholder="Last name" required> </div>
                      <div> <label for="validationDefault02" class="form-label">Username:</label> 
                      <input type="text" class="form-control" id="validationDefault02" name="username" placeholder="Set Username" required> </div> 
                      <label for="validationDefault02" class="form-label">Password:</label> 
                      <input type="password" class="form-control" id="validationDefault02" name="password" placeholder="Set Password" required> </div> 
                      <div class="mt-4 d-flex align-items-center"> <button class="btn btn-success mx-3" type="submit" name="signup">Sign Up</button>
                       <a href="Login.php" class="text-primary">Log In</a> </div> </div> </form> 
                       <?php include("connect.php"); 
                       if(isset($_POST["signup"])){ $username = $_POST["username"]; $password = $_POST["password"]; $email = $_POST["email"]; $sql = "INSERT INTO users(firstname,lastname,username,password) VALUES('{$username}','{$password}','{$email}','user');"; try{ mysqli_query($connect,$sql);
                        echo"<p class='text-center text-success p-3'>Registration Completed Succesfuly</p>"; } 
                        catch(mysqli_sql_exception){ echo"<p class='text-center text-danger p-3'>Registration Failed</p>"; } } ?>
                         </div> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> </body> 
                </html>
>>>>>>> a39bbf24e848a3481c9304b64c1dcefdf12f92ac
