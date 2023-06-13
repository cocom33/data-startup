<!DOCTYPE html>
<html lang="en">
<head>
   @include('user.includes.head')
   @include('user.includes.style')

   @stack('addon-style')

   @livewireStyles
   @powerGridStyles
</head>
<body>
    <div class="flex mt-[4.7rem] md:mt-0">
        @include('user.includes.sidebar')

        <!-- BEGIN: Content -->
        <div class="content">
            @include('user.includes.navbar')
            @yield('content')
        </div>
        <!-- END: Content -->
    </div>


    @include('user.includes.scripts')

    @stack('addon-script')

    @livewireScripts
    @powerGridScripts
</body>
</html>
