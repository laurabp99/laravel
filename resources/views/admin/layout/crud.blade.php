@extends('admin.layout.master')

@section('content')
    
    <div class="interface">
        <div class="registers">
            @yield('registers')
        </div>
        <div class="form">
            @yield('form')
        </div>
    </div>
        
@endsection