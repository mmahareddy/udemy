<?php include 'login.php'; ?>
 <form method="post" >
   <label for="name">Name</label>
   <input type="name" name="name" placeholder="enter name" value="<?php echo addslashes($emailName); ?>">
   <label for="email">Email</label>
   <input type="email" name="email" placeholder="enter email" value="<?php echo addslashes($emailEntry); ?>">
   <label for="passowrd">Password</label>
   <input type="password" name="password" placeholder="enter password" value="<?php echo addslashes($_POST['password']); ?>">
   <label for="confpassowrd">Confirm Password</label>
   <input type="password" name="confpassword" placeholder="Confirm password">
   <input type="submit" name="submit" value="Sign Up" >
 </form>

 <form method="post" >
   <label for="loginemail">Email</label>
   <input type="email" name="loginemail" placeholder="enter email" value="<?php echo addslashes($emailEntry); ?>">
   <label for="loginpassword">Password</label>
   <input type="password" name="loginpassword" placeholder="enter password" value="<?php echo addslashes($_POST['password']); ?>">
   <input type="submit" name="submit" value="Log In" >
 </form>
