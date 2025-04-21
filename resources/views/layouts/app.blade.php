<!DOCTYPE html>
<html lang="en">

<head>
    <x-head />
</head>

<body>
    <main class="page-wrapper">
        <!-- Header -->

        <x-header />
        <x-mobileNav />
        <x-breadcrumb />
        @yield('content')
        <!-- footer -->
        <x-footer />
    </main>
    <!-- All Scripts  -->
    <x-comman />
    <x-script />
</body>

</html>