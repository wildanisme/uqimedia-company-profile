@component('front.layouts.head')
@endcomponent

<body>

  <!-- ======= Header ======= -->
  @component('front.layouts.navigation')
  @endcomponent
  <!-- End Header -->

  <!-- ======= Content ======= -->
  <main id="main">
  @yield('content')
  </main>
  <!-- End Content -->

  <!-- ======= Footer ======= -->
  @component('front.layouts.footer')
  @endcomponent
  <!-- End Footer -->
</body>

</html>