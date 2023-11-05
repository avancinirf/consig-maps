@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">Lista de Users</div>

                <div class="card-body">
                    <table id="userTable" class="table table-striped hover" data-href="{{ route('user.createDataTable') }}">
                        <thead></thead>
                        <tbody></tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascripts')
    <script type="text/javascript" src="{{ asset('js/user.js') }}"></script>
@endsection
