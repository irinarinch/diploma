@extends('layouts.app')
@section('main')  
    <main class="conf-steps">
        @include("admin.components.halls")
        @include("admin.components.halls_config")
        @include("admin.components.prices_config")
        @include("admin.components.schedule")
        @include("admin.components.sales")
    </main>  
@endsection
