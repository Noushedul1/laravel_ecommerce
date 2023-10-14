<!-- plugins:js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('admin') }}/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('admin') }}/assets/vendors/chart.js/Chart.min.js"></script>
<script src="{{ asset('admin') }}/assets/vendors/progressbar.js/progressbar.min.js"></script>
<script src="{{ asset('admin') }}/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="{{ asset('admin') }}/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{ asset('admin') }}/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
<script src="{{ asset('admin') }}/assets/js/jquery.cookie.js" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('admin') }}/assets/js/off-canvas.js"></script>
<script src="{{ asset('admin') }}/assets/js/hoverable-collapse.js"></script>
<script src="{{ asset('admin') }}/assets/js/misc.js"></script>
<script src="{{ asset('admin') }}/assets/js/settings.js"></script>
<script src="{{ asset('admin') }}/assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{ asset('admin') }}/assets/js/dashboard.js"></script>
@stack('admin_script')
<!-- End custom js for this page -->
