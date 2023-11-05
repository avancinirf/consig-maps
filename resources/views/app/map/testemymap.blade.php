@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">MyMap</div>

                <div class="card-body p-0">
                    <div id="mymap-painel" class="">
                        <div id="mymap" class=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascripts')
    <script type="text/javascript" src="{{ asset('libs/leaflet/leaflet.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/map.js') }}"></script>
@endsection
