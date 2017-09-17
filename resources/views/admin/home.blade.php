@extends('layouts.admin_layouts')
@section('act_ad_1','active')
@section('admin_dash')
<script type="text/javascript">
    $(document).ready(function () {
        $('#refresh').click(function () {
            $.get('#refresh',function (data) {
                console.log(data);
            });
        });
    });
</script>
    <div class="col-lg-4 col-xs-12 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-12 text-right">
                        <div class="huge">{{ $Registered_today_count }} </div>
                        <div>المسجلين في الموقع اليوم</div>
                    </div>
                </div>
            </div>
            <a href="/register_today_list">
                <div class="panel-footer">
                    <span class="pull-left">القوائم</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-4 col-xs-12 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-support fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{{ $wadifa_today_count }}</div>
                        <div>الوظائف المطلوبة اليوم</div>
                    </div>
                </div>
            </div>
            <a href="/demend_empl_today">
                <div class="panel-footer">
                    <span class="pull-left">القوائم</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-4 col-xs-12 col-md-6">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-support fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{{ $aamel_today_count }}</div>
                        <div>العمال المسجلين اليوم</div>
                    </div>
                </div>
            </div>
            <a href="/cv_list_today">
                <div class="panel-footer">
                    <span class="pull-left">القوائم</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-4 col-xs-12 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-12 text-right">
                        <div class="huge">{{ $Registered_count }} </div>
                        <div>المسجلين في الموقع</div>
                    </div>
                </div>
            </div>
            <a href="/register_list">
                <div class="panel-footer">
                    <span class="pull-left">القوائم</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-4 col-xs-12 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-support fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{{ $wadifa_count }}</div>
                        <div>الوظائف المطلوبة</div>
                    </div>
                </div>
            </div>
            <a href="/demend_empl">
                <div class="panel-footer">
                    <span class="pull-left">القوائم</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-4 col-xs-12 col-md-6">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-support fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{{ $aamel_count }}</div>
                        <div>العمال المسجلين</div>
                    </div>
                </div>
            </div>
            <a href="/cv_list">
                <div class="panel-footer">
                    <span class="pull-left">القوائم</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-12 col-xs-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <span class="text-center">رسائل البريد</span>

            <button id="refresh" class=" btn pull-left btn-success btn-sm"><i class="glyphicon glyphicon-refresh"></i></button>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>id المرسل</th>
                            <th>البريد الالكتروني</th>
                            <th>العنوان</th>

                            <th>الموضوع</th>
                        </tr>
                        </thead>
                       <tbody>
                        @foreach( $email as $ema )
                            <tr>
                                <td>{{ $ema->id_user }}</td>
                                <td>{{ $ema->email }}</td>
                                <td>{{ $ema->object }}</td>
                                <td>
                                    {{ $ema->message }}
                                    <br>
                                    <a href="/response_email/{{ $ema->id }}" class="btn btn-link pull-left"><strong>التفاصيل >>></strong></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        </div>

@endsection