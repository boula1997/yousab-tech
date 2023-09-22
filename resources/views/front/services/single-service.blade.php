@extends('front.layouts.master')
@section('content')
@include('front.components.breadcrumb',['name'=>(__('general.our_services')),'mid'=>(__('general.services'))])
@include('front.components.single-service')

@endsection
