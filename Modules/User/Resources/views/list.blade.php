@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="panel-heading">Companies</div>

            <div class="panel-body table-responsive">
                <router-view name="moviesIndex"></router-view>
                <router-view></router-view>
            </div>
        </div>
    </div>
@endsection
