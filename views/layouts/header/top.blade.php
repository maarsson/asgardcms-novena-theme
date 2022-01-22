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
                <div class="col-lg-2">
                @if(count(LaravelLocalization::getSupportedLocales())>1)
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-flag"></i>
                        <span>
                            {{ LaravelLocalization::getCurrentLocaleName()  }}
                            <i class="caret"></i>
                        </span>
                    </a>
                    <ul class="dropdown-menu language-menu">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li class="{{ App::getLocale() == $localeCode ? 'active' : '' }}">
                                <a rel="alternate" lang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                                    {!! $properties['native'] !!}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                @endif
                </div>
                <div class="col-lg-4">
                    <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                        @if(@setting('configuration::phone-number'))
                        <a href="tel:@setting('configuration::phone-number-callable')" >
                            <span>@lang("theme::header.call-now")</span>
                            <span class="h4">@setting('configuration::phone-number')</span>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
