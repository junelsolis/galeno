<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel='stylesheet' href='/css/app.css' />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="/js/app.js"></script>
    <title>MedicOffice</title>
  </head>
  <body>
    <div class='login'>
      <div class='box grid-x'>
        <div class='cell medium-6 left-box'>
          <div class='image'>
            <img src='images/medicoffice-logo.png'/><br />
          </div>
          <div class='text'>
            <span>
              by Junel Solis MD
            </span>
          </div>

        </div>
        <div class='cell medium-6 right-box'>
          <form method='post' action='/'>
            {{ csrf_field() }}

            <input type='text' name='username' required placeholder='Username or email address' />
            <input type='password' name='password' required placeholder='Password' />



            <button type='submit' class='primary button expanded'><i class="fas fa-sign-in-alt"></i>&nbsp;<strong>LOGIN</strong></button>

            @if (session('error'))
            <div class='alert-amber'>
              <div>
                {{ session('error') }}
              </div>
            </div>
            @endif

          </form>


        </div>
      </div>
    </div>

    <script>
      $(document).foundation();
    </script>
  </body>
</html>
