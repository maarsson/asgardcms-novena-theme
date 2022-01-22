<!DOCTYPE html>
<html lang="{{ LaravelLocalization::setLocale() }}">
<head>
    <meta charset="UTF-8">
    @section('meta')
        <meta name="description" content="@setting('core::site-description')"/>
    @show
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@section('title')@setting('core::site-name')@show</title>
    @if(isset($alternate))
    @foreach($alternate as $alternateLocale=>$alternateSlug)
        <link rel="alternate" hreflang="{{$alternateLocale}}" href="{{url($alternateLocale.'/'.$alternateSlug)}}">
    @endforeach
    @endif
    <link rel="canonical" href="{{url()->current()}}" />
    <link rel="shortcut icon" href="{{ Theme::url('favicon.ico') }}">

    <link rel="stylesheet" href="{{ mix('css/app.css',  theme_assets_path()) }}" type="text/css">
    @stack('css-stack')
</head>

@auth
    @include('partials.admin-bar')
@endauth
@include('partials.navigation')

<div class="container">
    @yield('content')
</div>
@include('partials.footer')

<script src="{{ mix('js/app.js', theme_assets_path()) }}"></script>
@yield('scripts')

<?php if (Setting::has('core::analytics-script')): ?>
{!! Setting::get('core::analytics-script') !!}
<?php endif; ?>
@stack('js-stack')
</body>
</html>
