@extends('../layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('') }}</div>

                <div class="card-body">
                <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <span class="icon-check_circle display-3 text-success"></span>
            <h2 class="display-3 text-black">Welcome !</h2>
            <p class="lead mb-5">You logined successfuly .</p>
            <p><a href="/house" class="btn btn-md height-auto px-4 py-3 btn-dark">main page</a></p>
          </div>
        </div>
      </div>
    </div>
  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
