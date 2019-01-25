<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel='stylesheet' href='/css/app.css' />
    <script src="/js/app.js"></script>
    <title>MedicOffice</title>
  </head>
  <body>
    <div class='login'>
      <div class='box'>
        <div class='image text-center'>
          <img src='images/medicoffice-logo@2x.png' />
        </div>
        <form method='post' action='/'>
          {{ csrf_field() }}
          <input type='text' name='username' required placeholder='Username or email address' />

          <input type='password' name='password' required placeholder='Password' />

          <button type='submit' class='primary button expanded'>Login</button>
        </form>
      </div>
    </div>

    <script>
      $(document).foundation();
    </script>
  </body>
</html>
