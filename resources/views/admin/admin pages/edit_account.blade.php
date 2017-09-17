@extends('layouts.admin_layouts')
@section('act_ad_2','active')
@section('admin_dash')
    <div class="panel-info">
        <div class="panel-heading">
            <h1>
                <i class="glyphicon glyphicon-wrench"></i>
                <strong>تعديل الحساب</strong>
            </h1>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ route('admin.register') }}">
                {{ csrf_field() }}

                <div class="row{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-sm-4 control-label">الاسم </label>

                    <div class="col-sm-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="row{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-sm-4 control-label">البريد الالكتروني </label>

                    <div class="col-sm-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="row{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-sm-4 control-label">الرقم السري</label>

                    <div class="col-sm-6">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <label for="password-confirm" class="col-sm-4 control-label">تأكيد الرقم السري</label>

                    <div class="col-sm-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>
                <div class="row">
                    <label for="password-confirm" class="col-sm-4 control-label">تأكيد الرقم السري</label>

                    <div class="col-sm-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-4">
                        <button type="submit" class="btn btn-primary">
                            تسجيل
                        </button>
                    </div>
                </div>
            </form>

            <form enctype="multipart/form-data" action="/update_avatar" method="post" class="form-control">

                <input type="file" name="avatar" class="form-group">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-success btn-sm">change</button>

            </form>
        </div>
    </div>

@endsection
