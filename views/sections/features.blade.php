{{-- Template: Features --}}
@php
$extrafields = Extrafield::getAll('features');
@endphp

<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="feature-block d-lg-flex">
                @for ($i = 1; $i <= 3; $i++)
                    @include('components.features-column', ['i' => $i])
                @endfor
                </div>
            </div>
        </div>
    </div>
</section>
