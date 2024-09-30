<?php 
    $signup = false;
    if(isset($_POST['username']) and isset($_POST['password']) and isset($_POST['email']) and isset($_POST['phone'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $error = User::signup($username, $password, $email, $phone);
        $signup = true;
        
    }?>

<?php 
if($signup) {
    if(!$error) { ?>
        <main class="container">
           <div class="bg-body-tertiary p-5 rounded">
               <h1>signup Successfull</h1>
               <p class="lead">now you can login form</p>
               <a class="btn btn-lg btn-primary" href="/loginapp/login.php" role="button">Login »</a>
           </div>
       </main>
<?php } else { ?>
       <main class="container">
           <div class="bg-body-tertiary p-5 rounded">
               <h1>signup faild</h1>
               <p class="lead">some thing whent worng,<?php print($error) ?></p>
               <a class="btn btn-lg btn-primary" href="/loginapp/signup.php" role="button">sign up »</a>
           </div>
       </main>
<?php }    
} else { ?>

<main class="form-signup w-100 m-auto">
    <form method="post" action="signup.php">
    <img class="mb-4" src="https://i.pinimg.com/originals/41/1a/48/411a4835d38ff899e55ce2802b08329c.jpg" alt="" width="90" height="100">
    <h1 class="h3 mb-3 fw-normal">Signup Here</h1>

    <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" name="username" placeholder="abc">
        <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
        <input type="text" class="form-control" id="floatingPassword" name="phone" placeholder="9171112XXX">
        <label for="floatingPassword">Phone</label>
    </div>
    <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
        <label for="floatingPassword">Password</label>
    </div>
    <button class="btn btn-primary w-100 py-2 hvr-shrink" type="submit">Sign up</button>
    <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2024</p>
    </form>
</main>
<?php } ?>