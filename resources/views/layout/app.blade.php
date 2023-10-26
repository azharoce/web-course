<!DOCTYPE html>
<html lang="en">
@include('layout.header')

<body>
<div id="wrapper" class="horizontal">
     <!--  Header  -->
    @include('layout.container.menu')
    
    {{-- body --}}
    @include('layout.body')
    {{-- footer --}}
    @include('layout.footer')
</div>


@vite('resources/js/app.js')
</body>
</html>
