<!DOCTYPE html>
<html lang="en">

@include('panel.data.header') <!-- header -->

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">

<div class="wrapper">
@include('panel.data.sidebar') <!-- sidebar -->
    <div class="main">
    @include('panel.data.navbar') <!-- navbar -->

        @yield('content')

 <!-- content -->

    @include('panel.data.footer') <!-- footer -->
    </div>
</div>
@include('panel.data.scripts') <!-- scripts -->


</body>

</html>
