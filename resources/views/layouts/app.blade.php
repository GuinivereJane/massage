<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('layouts.head')
</head>
<body>
    <div class="container" id="app">   
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('layouts.foot')
</body>
</html>
