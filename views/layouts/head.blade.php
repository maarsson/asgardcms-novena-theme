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
