@extends('layouts.user_layouts')
@section('act_us_1','active')
@section('user_dash')
    <div class="card-header" style=background-image:url(../images/07.jpg);"">
        <div class="row">
            <div class="col-xs-7">
                <h1 class="hidden-xs" style="font-family:monospace;">{{ Auth::user()->name }}</h1>
                <h1 class="visible-xs-block" style="font-family: monospace;font-size: 11px; color: black;">{{ Auth::user()->name }}</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="row">
            <label for="name" class="col-sm-4 control-label">اسم المستخدم </label>
            <label class="col-sm-6 form-control pull-right">{{ $user->name }}</label>
        </div>
        <div class="row">
            <label for="name" class="col-sm-4 control-label">الاسم الحقيقي</label>
            <label class="col-sm-6 form-control pull-right">{{ $user->prenom }}</label>
        </div>
        <div class="row">
            <label for="name" class="col-sm-4 control-label">اللقب</label>
            <label class="col-sm-6 form-control pull-right">{{ $user->nom }}</label>
        </div>
        <div class="row">
            <label for="name" class="col-sm-4 control-label">تاريخ الميلاد</label>
            <label class="col-sm-6 form-control pull-right">{{ $user->dateN }}</label>
        </div>
        <div class="row">
            <label for="name" class="col-sm-4 control-label">الجنس</label>
            <label class="col-sm-6 form-control pull-right">
                @if($user->sex == "home")
                    ذكر
                    @else
                انثى
                    @endif
            </label>
        </div>
        <div class="row">
            <label for="name" class="col-sm-4 control-label">البريد الالكتروني</label>
            <label class="col-sm-6 form-control pull-right">{{ $user->email }}</label>
        </div>
        <div class="row">
            <label for="name" class="col-sm-4 control-label">رقم الهاتف</label>
            <label class="col-sm-6 form-control pull-right">{{ $user->phone }}</label>
        </div>
        <div class="row">
            <label for="name" class="col-sm-4 control-label">اسم المستخدم </label>
            <label class="col-sm-6 form-control pull-right">اسم مولاي </label>
        </div>
    </div>
    <br><br><br>
    <div class="col-sm-12 ">
        <div class="row">
            <label for="name" class="col-sm-4 control-label pull-left">مسجل يوم {{ $user->created_at }}</label>
        </div>
    </div>

@endsection