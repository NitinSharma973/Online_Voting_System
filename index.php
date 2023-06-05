<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Voting System</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">


</head>

<body class="bg-dark">

<h1 class="text-info text-center p-3">Voting system</h1>
<div class="bg-info py-4">
    <h2 class="text-center">Login</h2>
    <div class="container text-center ">

    <form action="./actions/login.php" method="POST">


    <div class="mb-3">
<input type="text" name="username"  class="form-control w-50 m-auto"  placeholder="enter your name" required="required">
    </div>
<div class="mb-3">
<input type="text" name="mobile"  class="form-control w-50 m-auto"  placeholder="enter your mobile" required="required" maxlength="10" minlength="10">
    </div>
    <div class="mb-3">
<input type="text" name="password"  class="form-control w-50 m-auto"  placeholder="enter your password" required="required" >

    </div>

    <div class="mb-3">


    <select name="std" class="form-select w-50 m-auto" >
<option value="group">Group</option>
<option value="voter">Voter</option>

    </select>
    </div>

    <button type="submit" class="btn btn-dark my-4">Login</button>
<p>Don't have an account? <a href="./partials/registration.php" class="text-white">Register here</a></p>
    

    </form>
    </div>

</div>

    
</body>
</html>