@extends('layouts.app')
@section('active','active')
@section('content')


    <div class="row profile">
        @if(!empty($error))

        @endif
        <div class="col-md-3">
            <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="/avatar/{{ $user->avatar }} " class="img-responsive" alt="">
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        {{$user->name}}
                    </div>
                    <!--    <div class="profile-usertitle-job">
                            Developer
                        </div>-->
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
           <!--    <div class="profile-userbuttons">


                </div>-->
                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li class="@yield('act_ad_1')">
                            <a href="{{ route('admin.home') }}">
                                <i class="glyphicon glyphicon-home"></i>
                                الرئيسية </a>
                        </li>
                        <li class="@yield('act_ad_2')">
                            <a href="/admin/edit_account">
                                <i class="glyphicon glyphicon-cog"></i>
                                تعديل الحساب </a>
                        </li>
                        <li class="@yield('act_ad_3')">
                            <a href="#">
                                <i class="glyphicon glyphicon-ok"></i>
                                Tasks </a>
                        </li>
                        <li class="@yield('act_ad_4')">
                            <a href="#">
                                <i class="glyphicon glyphicon-flag"></i>
                                Help </a>
                        </li>
                    </ul>
                </div>
                <!-- END MENU -->
            </div>
        </div>
        <div class="col-md-9">
            <div class="profile-content">

                @yield('admin_dash')
            </div>
        </div>
    </div>


    <br>
    <br>


@endsection