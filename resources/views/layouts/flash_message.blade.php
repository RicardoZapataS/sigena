<!-- Then put toasts within -->

@if ($message = Session::get('success'))
    <div class="toast" role="alert" data-delay="5000" aria-live="assertive" aria-atomic="true"
         style="position: absolute; top: 0; right: 10px; ">
        <div class="toast-header">
            <img src="{{ asset('assets/img/logo_i_naabol.jpeg') }}" class="rounded mr-2" style="height: 40px;" alt="...">
            <strong class="mr-auto">SIGENA</strong>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body" style="background-color: #0e5b44; color: whitesmoke; font-weight: bold">
            {{ $message }}
        </div>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="toast" role="alert" data-delay="50000" aria-live="assertive" aria-atomic="true"
         style="position: absolute; top: 10px; left: 260px;" >
        <div class="toast-header">
            <img src="{{ asset('assets/img/logo_i_naabol.jpeg') }}" class="rounded mr-2" style="height: 40px;" alt="...">
            <strong class="mr-auto">SIGENA</strong>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body" style="background-color: #dc3545; color: whitesmoke; font-weight: bold">
            {{ $message }}
        </div>
    </div>
@endif

@if ($message = Session::get('warning'))
    <div class="toast" role="alert" data-delay="5000" aria-live="assertive" aria-atomic="true"
         style="position: absolute; top: 0; right: 10px; ">
        <div class="toast-header">
            <img src="{{ asset('assets/img/logo_i_naabol.jpeg') }}" class="rounded mr-2" style="height: 40px;" alt="...">
            <strong class="mr-auto">SIGENA</strong>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times</span>
            </button>
        </div>
        <div class="toast-body">
            {{ $message }}
        </div>
    </div>
@endif

@if ($message = Session::get('info'))
    <div class="toast" role="alert" data-delay="5000" aria-live="assertive" aria-atomic="true"
         style="position: absolute; top: 0; right: 10px; ">
        <div class="toast-header">
            <img src="{{ asset('assets/img/logo_i_naabol.jpeg') }}" class="rounded mr-2" style="height: 40px;" alt="...">
            <strong class="mr-auto">SIGENA</strong>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body">
            {{ $message }}
        </div>
    </div>
@endif

@if ($errors->any())
    <div class="toast" role="alert" data-delay="5000" aria-live="assertive" aria-atomic="true"
         style="position: absolute; top: 0; bottom: 10px; ">
        <div class="toast-header">
            <img src="{{ asset('assets/img/logo_i_naabol.jpeg') }}" class="rounded mr-2" style="height: 40px;" alt="...">
            <strong class="mr-auto">SIGENA</strong>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body">
            Por favor revise los errores
        </div>
    </div>
@endif
