<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png"> -->
<!-- <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png"> -->
<!-- <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png"> -->
<!-- <link rel="manifest" href="/site.webmanifest"> -->
<meta name='author' content='Junel Solis' />
<!-- <meta name='description' content='' /> -->
<!-- <meta property='og:title' content='' /> -->
<meta property='og:site_name' content='v' />
<meta property='og:image' content='/images/logo.png' />
<!-- <meta property='og:description' content='' /> -->
<link rel='stylesheet' href='/css/app.css' />
<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>
