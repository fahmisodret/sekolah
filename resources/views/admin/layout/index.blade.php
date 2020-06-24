<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('admin.layout.head')
<body>
    <div id="app">
        @include('admin.layout.header')
        <main class="py-4">
            <div class="container">
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
    @include('admin.layout.script')
</body>
</html>