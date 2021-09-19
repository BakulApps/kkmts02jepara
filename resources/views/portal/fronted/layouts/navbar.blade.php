<div class="bg-primary text-white fw-bold fs-15 mb-2">
    <div class="container py-2 d-md-flex flex-md-row">
        <div class="d-flex flex-row align-items-center">
            <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-location-pin-alt"></i></div>
            <address class="mb-0">{{$setting->value('app_distric') ." - ". $setting->value('app_province')}}</address>
        </div>
        <div class="d-flex flex-row align-items-center me-6 ms-auto">
            <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-phone-volume"></i></div>
            <p class="mb-0">{{$setting->value('app_phone')}}</p>
        </div>
        <div class="d-flex flex-row align-items-center">
            <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-message"></i></div>
            <p class="mb-0"><a href="mailto:{{$setting->value('app_email')}}" class="link-white hover">{{$setting->value('app_email')}}</a></p>
        </div>
    </div>
</div>
