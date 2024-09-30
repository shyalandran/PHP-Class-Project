<?php 
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $result = validate_creadentials($email, $pass);
    if ($result) { ?>
        <main class="container">
            <div class="bg-body-tertiary p-5 rounded">
                <h1>Login Successfull</h1>
                <p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
                <a class="btn btn-lg btn-primary" href="/docs/5.3/components/navbar/" role="button">View navbar docs »</a>
            </div>
        </main>
<?php   
    } else { 
?>

<main class="form-signin w-100 m-auto">
    <form method="post" action="login.php">
    <img class="mb-4" src="https://i.pinimg.com/originals/41/1a/48/411a4835d38ff899e55ce2802b08329c.jpg" alt="" width="90" height="100">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
        <label for="floatingPassword">Password</label>
    </div>

    <div class="form-check text-start my-3">
        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
        Remember me
        </label>
    </div>
    <button class="btn btn-primary w-100 py-2 hvr-shrink" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2024</p>
    </form>
</main>

<?php } ?>