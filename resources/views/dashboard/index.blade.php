@extends('layouts.app')
@section('content')

<div class="container">

<div class="row">
    <div class="col-3">
        <!-- Tab navs -->
        @include('dashboard.tab-nav')
        <!-- Tab navs -->
    </div>

    <div class="col-9">
        @include('dashboard.tab-content')
    </div>
  </div>

</div>
@endsection
