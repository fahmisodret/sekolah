<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('front.layout.head')
<body>
    <div id="app">
        <main class="py-4">
            <div class="container">
            @if (Session::has('flash_message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('flash_message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" id="formMessage" role="alert">
                        {{ $error }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endforeach
            @endif
            </div>
            @yield('content')
        </main>
        <hr/>
    </div>
    @include('front.layout.script')
</body>
</html>