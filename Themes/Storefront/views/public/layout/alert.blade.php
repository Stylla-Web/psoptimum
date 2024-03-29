@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show">
        <a data-bs-dismiss="modal" aria-label="Close">
            <i class="las la-times"></i>
        </a>

        <i class="las la-check-circle"></i>

        {{ session('success') }}
    </div>
@endif

@if(session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show">
        <a data-bs-dismiss="modal" aria-label="Close">
            <i class="las la-times"></i>
        </a>

        <i class="las la-check-circle"></i>

        {{ session('error') }}
    </div>
@endif
