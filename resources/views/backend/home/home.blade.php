@extends("backend.layouts.app")
@section("content")

<div class="row">
    <div class="col-lg-12 col-sm-12">
        <div class="card gradient-1">
            <div class="card-body">
                <h3 class="card-title text-white">Howdy Author!</h3>
                <div class="d-inline-block">
                    {{-- <h2 class="text-white">{{ Auth::user()->name }}</h2> --}}
                    {{-- <p class="text-white mb-0">{{ Auth::user()->created_at->format('m-d-y') }}</p> --}}
                </div>
                <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
            </div>
        </div>
    </div>
</div>

@endsection
