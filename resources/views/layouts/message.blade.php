@if (\Session::has('alert-success'))
    <div class="my-2">
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
            <ul class="m-0 px-0">
                <li style="list-style: none;">{{ \Session::get('alert-success') }}</li>
            </ul>
        </div>
    </div>
@endif

@if (\Session::has('alert-warning'))
    <div class="my-2">
        <div class="alert alert-warning  alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
            <ul class="m-0 px-0">
                <li style="list-style: none;">{!! \Session::get('alert-warning') !!}</li>
            </ul>
        </div>
    </div>
@endif
@if (\Session::has('alert-danger'))
    <div class="my-2">
        <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
            <ul class="m-0 px-0">
                <li style="list-style: none;">{!! \Session::get('alert-danger') !!}</li>
            </ul>
        </div>
    </div>
@endif

@if ($errors->any())
    <div class="my-2">
        <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
            <ul class="m-0 px-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

@if(Session::has('success'))
    <div class="my-2">
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
            <ul class="m-0 px-0">
                <li>  {{session('success')}}

                </li>
            </ul>
        </div>
    </div>
@endif
