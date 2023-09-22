@extends('front.layouts.master')
@section('content')
@include('front.components.breadcrumb',['name'=>(__('general.message')),'mid'=>(__('general.message'))])
    @include('front.components.message')
@endsection
