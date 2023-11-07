{{-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/signup.css" />
  </head>
  <body>
    <div class="container">
      <h2>SIGNUP FORM</h2>
      <div class="form">
        <form action="{{ URL('/') }}/signup" method="post">
          @csrf
            <label for="username" >Username :</label>
            <input type="text" id="username" name="name" required><br><br>
            <label for="contacno">Contact-no :</label>
            <input type="text" id="contactno" name="contact" required><br><br>
            <label for="email">Email-id :</label>
            <input type="text" id="email" name="email" required><br><br>
            <label for="password">Password :</label>
            <input type="text" id="password" name="password" required><br><br>
           
            <input type="submit" name="submit">
        </form>
      </div>
    </div>
  </body>
</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}"> <!-- Use Laravel's asset() helper to generate asset URLs -->
</head>
<body>
    <div class="container">
        <h2>SIGNUP FORM</h2>
        <div class="form">
            <form action="{{ URL('/') }}/signup" method="POST"> <!-- Use named routes for form action -->
                @csrf <!-- CSRF token for security -->
                <label for="username">Username:</label>
                <input type="text" id="username" name="name" required><br><br>
                
                <label for="contactno">Contact-no:</label>
                <input type="text" id="contactno" name="contact" required><br><br>
                
                <label for="email">Email-id:</label>
                <input type="email" id="email" name="email" required><br><br> <!-- Use type="email" for email input -->
                
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br><br> <!-- Use type="password" for password input -->
                
                <input type="submit" value="Submit"> <!-- Use value attribute for the submit button text -->
            </form>
        </div>
    </div>
</body>
</html>
