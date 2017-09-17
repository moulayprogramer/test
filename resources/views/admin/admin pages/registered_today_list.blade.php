@extends('layouts.admin_layouts')
@section('admin_dash')

     <div class="pull-right">
                    <a href="{{ route('admin.home') }}" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-right"> العودة للوحة التحكم</span> </a>
                </div>
     <br><br><br>
     <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>اسم المستخدم</th>
                                <th>البريد الالكتروني</th>
                                <th>الرقم</th>
                                <th> التعديل</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $registered_today as $uss )
                            <tr>
                                <td>{{ $uss->id }}</td>
                                <td>{{ $uss->name }}</td>
                                <td>{{ $uss->email }}</td>
                                <td>{{ $uss->phone }}</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-cog"></span> </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $registered_today->links() }}
                    </div>


@endsection
