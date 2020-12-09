@extends('layouts.app')

@section('content')
<div class="d-flex-row user-content">
    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="/dashboard">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#menu1">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#menu2">Menu2</a>
        </li>
    </ul>
    <div class="tab-content">
        <div id="home" class="d-flex tab-pane active"><br>
          <h3></h3>
          <p></p>
        </div>
        <div id="menu1" class="d-flex tab-pane fade"><br>
          <h3>Menu 1</h3>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div id="menu2" class="d-flex tab-pane fade"><br>
          <h3>Menu 2</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
        </div>
    </div>
</div>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
