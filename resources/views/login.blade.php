<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css" />
  </head>
  <body>
    <div class="container">
      <h2>LOGIN FORM</h2>
      <div class="form">
        <form action="/login" method="post">
          @csrf
          <label for="username">Email :</label>
          <input type="text" id="username" name="email" required />  <br> <br> 
          <label for="password">Password :</label>
          <input type="text"  name="password"  id="password"  required  /><br><br>
          <input id="submit" type="submit" value="login" />
        </form>
        <button><a href="{{ URL('/') }}/signup">SIGN-UP</a></button>
      </div>
    </div>
  </body>
</html>

