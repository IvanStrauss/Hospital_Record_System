<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html>
<head>
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>
  @include('layout.sidebar')

  <div style="margin-left: 250px; padding: 20px;">
    @yield('content')
  </div>
</body>
</html>
