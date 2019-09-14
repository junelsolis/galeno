<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @include('header-tags')
    <title>Galeno &mdash; @yield('title')</title>
  </head>
  <body class='' style='overscroll-behavior: none;'>
    <div id='app' class='w-full h-screen bg-grey-100 flex'>
      <div class='bg-white py-8' style='width:4.7rem;box-shadow: 3px 0px 10px rgba(0,0,0,0.08);'>
        <div class='bg-accent rounded-full mx-auto' style='width:3rem;height: 3rem;overflow:hidden'>
          <img src='https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50' class='h-full w-auto'/>
        </div>
      </div>
      <div class='flex-grow flex h-full'>
        <div class='w-3/4'>
          left
        </div>
        <div class='w-1/4 p-6 h-full'>
          <div class='sidebar'>
            sidebar
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
