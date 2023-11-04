<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head')

<body>
    <div id="app">

        @include('layouts.navbar')

        <main class="py-4">

            {{-- <div class="container main-alert-container">
                @if ($alerts = session('alerts'))
                <div class="alert alert-{{ $alerts['type'] }} alert-dismissible fade show" role="alert">
                    <ul>
                    @foreach ($alerts['messages'] as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div> --}}

            <div class="container main-alert-container">
                @if ($alerts = session('alerts'))
                <div class="alert alert-{{ $alerts['type'] }}" role="alert">


                    <h4 class="alert-heading">{{ $alerts['title'] ?? 'Mensagens de Alerta!!!' }}
                        <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
                    </h4>
                    <ul>
                    @foreach ($alerts['messages'] as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                    </ul>
                    @if (!empty($alerts['recommendations']))
                    <hr>
                    <p class="mb-0">{{ $alerts['recommendations'] }}</p>
                    @endif
                </div>
                @endif
            </div>

            @yield('content')
        </main>
    </div>

    @include('layouts.footer')
</body>
</html>
