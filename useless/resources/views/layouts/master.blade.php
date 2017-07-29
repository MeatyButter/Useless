<!doctype html>
<html lang="{{ config('app.locale') }}">
    @include ('partials.head')
    <body>
            
        @include ('partials.nav')

        @yield ('content')

        @include ('partials.footer')

        @include ('partials.modals')

        @include ('partials.scripts')

    </body>
</html>
