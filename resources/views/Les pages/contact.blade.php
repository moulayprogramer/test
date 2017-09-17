@extends('layouts.app')

@section('content')
    <div class="well" >

        <h2>اتصل بنا</h2>

        <div class="well">
            <div class="row">
                <form action="/contact" method="POST">
                    {{ csrf_field() }}
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
                    <div class="row{{ $errors->has('object') ? ' has-error' : '' }}">
                        <label for="object" class="col-sm-4 control-label">العنوان </label>

                        <div class="col-sm-6">
                            <input id="object" placeholder="العنوان" type="text" class="form-control" name="object" value="{{ old('object') }}" required>

                            @if ($errors->has('object'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('object') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="row{{ $errors->has('message') ? ' has-error' : '' }}">
                        <label for="message" class="col-sm-4 control-label">الرسالة</label>

                        <div class="col-sm-6">
                            <textarea id="message" placeholder="الرسالة ...." rows="10"  class="form-control" name="message" value="{{ old('object') }}" required></textarea>

                            @if ($errors->has('object'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-sm-10">
                            <div class="btn-group pull-left" role="group" aria-label="...">
                                <button type="submit" class="btn btn-success"><strong> إرسال  &nbsp&nbsp&nbsp <span class='glyphicon glyphicon-send' aria-hidden='true'></span></strong></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection