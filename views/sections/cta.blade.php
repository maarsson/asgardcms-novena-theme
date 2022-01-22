{{-- Template: CTA section --}}
@php
$extrafields = Extrafield::getAll('cta');
@endphp

<section class="cta-section ">
    <div class="container">
        <div class="cta position-relative">
            <div class="row">
            @for ($i = 1; $i <= 4; $i++)
                @include('components.cta-counter', ['i' => $i])
            @endfor
            </div>
        </div>
    </div>
</section>
