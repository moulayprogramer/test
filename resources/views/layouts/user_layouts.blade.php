@extends('layouts.app')
@section('personelact','active')
@section('content')


    <div class="row profile">
        @if(!empty($error))

        @endif
        <div class="col-md-3">
            <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="/avatar/{{ Auth::user()->avatar }} " class="img-responsive" alt="">
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        {{Auth::user()->name}}
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
                        <li class="@yield('act_us_1')">
                            <a href="/personel">
                                <i class="glyphicon glyphicon-home"></i>
                                الرئيسية </a>
                        </li>
                        <li class="@yield('act_us_2')">
                            <a href="/user/edit_account">
                                <i class="glyphicon glyphicon-cog"></i>
                                تعديل الحساب </a>
                        </li>
                        <li class="@yield('act_us_3')">
                            <a href="/cv">
                                <i class="glyphicon glyphicon-ok"></i>
                                انشئ سيرتك الذاتية </a>
                        </li>
                        <li class="@yield('act_us_4')">
                            <a href="/demend_de_emp">
                                <i class="glyphicon glyphicon-ok"></i>
                                انشئ طلب عمال  </a>
                        </li>
                    </ul>
                </div>
                <!-- END MENU -->
            </div>
        </div>
        <div class="col-md-9">
            <div class="profile-content">

                @yield('user_dash')
            </div>
        </div>
    </div>


    <br>
    <br>


@endsection