    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="{{ asset('assets/plugin/jquery-3.4.1/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugin/jquery-datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugin/bootstrap-datatables/js/dataTables.bootstrap4.min.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.8.1/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: '.crud-richtext'
        });
    </script>
    <script type="text/javascript">
        $(function () {
            // Navigation active
            $('ul.navbar-nav a[href="{{ "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" }}"]').closest('li').addClass('active');
        });
    </script> --}}
    @yield('js')
