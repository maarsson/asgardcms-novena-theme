<script src="{{ mix('js/app.js', theme_assets_path()) }}"></script>

@yield('scripts')

@if (Setting::has('core::analytics-script'))
{!! Setting::get('core::analytics-script') !!}
@endif

@stack('js-stack')
