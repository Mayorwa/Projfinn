<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
@include('_partials.dashboard.head')
<style>
    body {
        font-family: 'Quicksand', sans-serif;
        font-weight: 400;
        line-height: 1.625em;
        letter-spacing: 0.01em;
        font-size: 1em;
        color: #73747f;
    }

    .h1, h1,
    .h2, h2,
    .h3, h3,
    .h4, h4,
    .h5, h5,
    .h6, h6 {
        font-family: 'Quicksand', sans-serif;
        color: #1a1c26;
    }

</style>
<body class="vertical-layout vertical-content-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-content-menu" data-col="2-columns">
    @include('_partials.dashboard.header')

    <div class="app-content content">

        <div class="content-wrapper">

            <div class="content-header row">
                @include('_partials.errors')
            </div>

            @if($user->type === 'business')
              @include('_partials.dashboard.sidebar')
            @else
               @include('_partials.dashboard.in_sidebar')
            @endif

            <div class="content-body">
                @yield('content')
            </div>

        </div>

    </div>

@include('_partials.dashboard.foot')
</body>
</html>
