{{-- Template: CTA section --}}
@php
$extrafields = Extrafield::getAll('cta');
@endphp

<section class="cta-section ">
    <div class="container">
        <div class="cta position-relative">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="{{ $extrafields->{'counter-1-icon-class'}->value }}"></i>
                        <span class="h3">{{ $extrafields->{'counter-1-value'}->value }}</span>
                        <p>{{ $extrafields->{'counter-1-name'}->value }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="{{ $extrafields->{'counter-2-icon-class'}->value }}"></i>
                        <span class="h3">{{ $extrafields->{'counter-2-value'}->value }}</span>
                        <p>{{ $extrafields->{'counter-2-name'}->value }}</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="{{ $extrafields->{'counter-3-icon-class'}->value }}"></i>
                        <span class="h3">{{ $extrafields->{'counter-3-value'}->value }}</span>
                        <p>{{ $extrafields->{'counter-3-name'}->value }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="{{ $extrafields->{'counter-4-icon-class'}->value }}"></i>
                        <span class="h3">{{ $extrafields->{'counter-4-value'}->value }}</span>
                        <p>{{ $extrafields->{'counter-4-name'}->value }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
