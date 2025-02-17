<!DOCTYPE html>
<html lang="en">
@include('theme.partials.head')
<body>

    <!--================Header Menu Area =================-->
    @include('theme.partials.header')
  
  <!--================Header Menu Area =================-->
  

  @yield('content')

  <!--================ Start Footer Area =================-->
  @include('theme.partials.footer')
  <!--================ End Footer Area =================-->
  <!--================ Start Script Area =================-->
  @include('theme.partials.scripts')
  <!--================ End Script Area =================-->


</body>
</html>