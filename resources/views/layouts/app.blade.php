<!DOCTYPE html>
<html lang="en">

<head>
    <x-head />
</head>

<body>
    <main class="page-wrapper">
        <!-- Header -->
        <x-promohead />
        <x-header />
        <x-mobileNav />
        <x-promohead />
        @yield('content')
        <!-- footer -->
        <x-footer />
    </main>
    <!-- All Scripts  -->
    <x-comman />
    <x-script />
</body>

</html>