<footer class="footer">
    <div class="container d-flex justify-content-center">
        <span class="produced">Consig Maps© - {{date('Y')}}</span>
    </div>
</footer>

<script type="text/javascript" src={{ URL::asset('js/libs/jquery.js') }}></script>
<script type="text/javascript" src={{ URL::asset('js/main.js') }}></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript" src={{ URL::asset('js/libs/moment.js') }}></script>

@yield('javascripts')
