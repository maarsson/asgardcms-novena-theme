{{-- Template: About section --}}
@php
$extrafields = Extrafield::getAll('about');
@endphp

<section class="section about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-sm-6">
                <div class="about-img">
                    <img src="{{ $extrafields->get('image-1') }}" alt="" class="img-fluid">
                    <img src="{{ $extrafields->get('image-2') }}" alt="" class="img-fluid mt-4">
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="about-img mt-4 mt-lg-0">
                    <img src="{{ $extrafields->get('image-3') }}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="about-content pl-4 mt-4 mt-lg-0">
                    {!! $extrafields->blockContent() !!}
                </div>
            </div>
        </div>
    </div>
</section>
