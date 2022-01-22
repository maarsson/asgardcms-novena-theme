    <div class="header-top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <ul class="top-bar-info list-inline-item pl-0 mb-0">
                        @if(@setting('configuration::email-address'))
                        <li class="list-inline-item"><a href="mailto:@setting('configuration::email-address')"><i class="icofont-support-faq mr-2"></i>@setting('configuration::email-address')</a></li>
                        @endif
                        @if(@setting('configuration::location'))
                        <li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>@setting('configuration::location')</li>
                        @endif
                    </ul>
                </div>
                <div class="col-lg-4">
                    <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                        @if(@setting('configuration::phone-number'))
                        <a href="tel:@setting('configuration::phone-number-callable')" >
                            <span class="h4"><i class="icofont-ui-cell-phone mr-2"></i></span>
                            <span class="h4">@setting('configuration::phone-number')</span>
                        </a>
                        @endif
                    </div>
                </div>
                <div class="col-lg-2 text-right">
                @if(count(LaravelLocalization::getSupportedLocales())>1)
                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icofont-md icofont-globe-alt"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <a rel="alternate" lang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                                <button class="dropdown-item {{ App::getLocale() == $localeCode ? 'active' : '' }}" type="button">
                                        {!! $properties['native'] !!}
                                </button>
                                    </a>
                            @endforeach
                        </div>
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div>
