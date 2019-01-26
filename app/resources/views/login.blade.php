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
      <div class='box'>
        <div class='image text-center'>
          <img src='images/medicoffice-logo@2x.png' />
        </div>
        <form method='post' action='/'>
          {{ csrf_field() }}
          <input type='text' name='username' required placeholder='Username or email address' />

          <input type='password' name='password' required placeholder='Password' />

          <button type='submit' class='primary button expanded'><i class="fas fa-sign-in-alt"></i>&nbsp;<strong>LOGIN</strong></button>
        </form>

        @if (session('error'))
        <div class='errors' >
          <div class='callout alert-amber'data-closable>
            {{ session('error') }}
            <button class="close-button" aria-label="Close alert" type="button" data-close>
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
        @endif
      </div>
    </div>

    <script>
      $(document).foundation();
    </script>
  </body>
</html>
