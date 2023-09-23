@extends('front.layouts.master')
@section('content')
@include('front.components.breadcrumb',['name'=>(__('general.our_services')),'mid'=>(__('general.services')),'route'=>'front.services','value'=>$service->title])
@include('front.components.single-service')

@endsection
