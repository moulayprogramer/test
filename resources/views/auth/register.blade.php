@extends('layouts.app')

@section('content')
<body id="inscription">
<div class="row">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">التسجيل </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="row{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-sm-4 control-label">اسم المستخدم </label>

                            <div class="col-sm-6">
                                <input id="name" placeholder="لتسجيل الدخول باستخدامه" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row{{ $errors->has('nom') ? ' has-error' : '' }}">
                            <label for="nom" class="col-sm-4 control-label">اللقب </label>

                            <div class="col-sm-6">
                                <input id="phone" placeholder="اللقب الحقيقي" type="text" class="form-control" name="nom" value="{{ old('nom') }}" required autofocus>

                                @if ($errors->has('nom'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row{{ $errors->has('prenom') ? ' has-error' : '' }}">
                            <label for="prenom" class="col-sm-4 control-label">الاسم </label>

                            <div class="col-sm-6">
                                <input id="prenom" placeholder="الاسم الحقيقي " type="text" class="form-control" name="prenom" value="{{ old('prenom') }}" required autofocus>

                                @if ($errors->has('prenom'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row{{ $errors->has('dateN') ? ' has-error' : '' }}">
                            <label for="dateN" class="col-sm-4 control-label">تاريخ الميلاد </label>

                            <div class="col-sm-6">
                                <input id="dateN" type="date" class="form-control" name="dateN" value="{{ old('dateN') }}" required autofocus>

                                @if ($errors->has('dateN'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dateN') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row{{ $errors->has('sex') ? ' has-error' : '' }}">
                            <label for="sex" class="col-sm-4 control-label">الجنس </label>

                            <div class="col-sm-6">
                                <label class="radio-inline"><input checked id="sex" type="radio" name="sex" value="home">ذكر </label>
                                <label class="radio-inline"><input  id="sex" type="radio" name="sex" value="feme">انثى </label>
                                @if ($errors->has('sex'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sex') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-sm-4 control-label">البريد الالكتروني </label>

                            <div class="col-sm-6">
                                <input id="email" placeholder="exmple@mail.com" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-sm-4 control-label">رقم الهاتف </label>

                            <div class="col-sm-6">
                                <input id="phone" placeholder="1234567890" type="number" class="form-control" name="phone" value="{{ old('phone') }}" required>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
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
                            <div class="col-sm-6 col-sm-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    تسجيل 
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
