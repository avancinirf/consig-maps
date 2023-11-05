<footer class="footer">
    <div class="container d-flex justify-content-center">
        <span class="produced">Consig Maps© - {{date('Y')}}</span>
    </div>
</footer>

<!-- Libs -->
<script type="text/javascript" src={{ URL::asset('libs/jquery.js') }}></script>
<script type="text/javascript" src={{ URL::asset('libs/DataTables/datatables.min.js') }}></script>
<script type="text/javascript" src={{ URL::asset('libs/moment.js') }}></script>

<!-- Custom JS -->
<script type="text/javascript" src={{ URL::asset('js/main.js') }}></script>

@yield('javascripts')
