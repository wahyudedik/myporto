<!DOCTYPE html>
<html lang="en">

<head>
  @include('head')
</head>

<body class="index-page">

  @include('header')

  <main class="main">

    @yield('content')

  </main>

  @include('footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  @include('scripts')

</body>

</html>