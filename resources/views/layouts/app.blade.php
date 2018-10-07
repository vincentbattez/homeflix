<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {{--  NE PAS INDEXER  --}}
  <meta name="robots" content="noindex, nofollow">

  <title>{{$currentPage['title']}}</title>

  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/> 
</head>

<body class="body-{{ $currentPage['bodyClass'] }}">
    <main role="document" class="{{ $currentPage['bodyClass'] }}">
      @yield('content')
    </main>
    
    <script src="{{ asset('js/app.js') }}"></script>

    <section id="video">
      <video controls="false">
          <source type="video/mp4">
          Your browser does not support the video tag.
      </video>
    </section>
</body>

</html>