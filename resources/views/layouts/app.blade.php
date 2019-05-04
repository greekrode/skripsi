<!DOCTYPE html>
<html lang="en">
<head>
    @include('include.head')
</head>
<body>
<!-- Fixed Sidebar Left -->
    @include('include.left-sidebar')
<!-- ... end Fixed Sidebar Left -->


<!-- Fixed Sidebar Left -->
    @include('include.left-sidebar-responsive')
<!-- ... end Fixed Sidebar Left -->


<!-- Fixed Sidebar Right -->
    @include('include.right-sidebar')
<!-- ... end Fixed Sidebar Right -->


<!-- Fixed Sidebar Right-Responsive -->
    @include('include.right-sidebar-responsive')
<!-- ... end Fixed Sidebar Right-Responsive -->


<!-- Header-BP -->
    @include('include.header')
<!-- ... end Header-BP -->


<!-- Responsive Header-BP -->
    @include('include.header-responsive')
<!-- ... end Responsive Header-BP -->

    @yield('content')

<!-- JS Scripts -->
{{--@include('include.script')--}}
{!! Toastr::render() !!}
</body>
</html>
