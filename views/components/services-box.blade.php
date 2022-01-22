@if(!empty($extrafields->get('box-' . $i . '-title')))
<div class="col-lg-4 col-md-6 col-sm-6">
    <div class="service-item mb-4">
        <div class="icon d-flex align-items-center">
            <i class="{{ $extrafields->get('box-' . $i . '-icon-class') }} text-lg"></i>
            <h4 class="mt-3 mb-3">{{ $extrafields->get('box-' . $i . '-title') }}</h4>
        </div>

        <div class="content">
            <p class="mb-4">{{ $extrafields->get('box-' . $i . '-text') }}</p>
        </div>
    </div>
</div>
@endif
