{{-- Template: Services section --}}
@php
$extrafields = Extrafield::getAll('services');
@endphp

<section class="section service gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <h2>Award winning patient care</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
                </div>
            </div>
        </div>

        <div class="row">
            @for ($i = 1; $i <= 6; $i++)
                @include('components.services-box', ['i' => $i])
            @endfor
        </div>
    </div>
</section>
