@extends('template.main')

@section('content')
    @include('partials.store.time')
    @include('partials.store.about')
@endsection

@section('script')
    @include('partials.store.script')
@endsection