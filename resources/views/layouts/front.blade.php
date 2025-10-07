<!DOCTYPE html>
<html lang="en">

{{-- Include Head --}}
@include('common.fronthead')

<body>
	<div class="page-wraper">


        @include('common.frontheader')


        @yield('content')

        @include('common.frontfooter')



        @include('common.frontfooterjs')

        @yield('scripts')
    </div>
</body>

</html>