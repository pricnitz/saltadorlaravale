<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Saltadore')</title>
    @include('partials.header')
    
<body>
    {{-- 2. Include Navbar --}}
    @include('partials.navbar')

    {{-- 3. Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- 4. Include Footer --}}
    @include('partials.footer')

    {{-- Scripts --}}
    @stack('scripts')

        <script>
    window.Laravel = {
        logoPath: "{{ asset('frontend/img/logo/logo.png') }}"
    };
</script>

</body>
</html>