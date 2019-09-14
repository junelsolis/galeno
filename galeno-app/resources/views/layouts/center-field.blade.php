<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @include('header-tags')

    <title>Galeno &mdash; @yield('title')</title>
  </head>
  <body class='bg-dark'>
    <div id='app' class='min-h-screen flex flex-col items-center justify-center'>
      <div class='container mx-auto flex-grow flex items-center justify-center'>
        @yield('content')
      </div>

      <footer class='bg-accent py-4 px-3 w-full'>
        <div class='flex items-center justify-center'>
          <p class='text-xs text-center'>
            Galeno &mdash; Simple Patient Records<br />
            <a class='text-light' href='https://www.github.com/junelsolis.galeno' target='_blank'>github page</a>
          </p>
        </div>
      </footer>
    </div>

    <script src='js/app.js'></script>
  </body>
</html>
