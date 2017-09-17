@extends('layouts.admin_layouts')
@section('act_ad_1','active')
@section('admin_dash')

    <div class="col-lg-12 col-xs-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <span >الرسالة</span>

            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-4 col-xs-12">
                        <strong>id المرسل</strong>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        {{ $email->id_user }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-xs-12">
                        <strong>البريد الالكتروني</strong>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        {{ $email->email }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-xs-12">
                        <strong>العنوان</strong>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        {{ $email->object }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-xs-12">
                        <strong>الموضوع</strong>
                    </div>
                    <div class="col-md-6 col-xs-12">
                       <textarea rows="10" class="desable"> {{ $email->message }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection