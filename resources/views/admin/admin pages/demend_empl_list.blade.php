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
                <th>id user</th>
                <th>الوظيفة المطلوبة</th>
                <th>الولاية</th>
                <th>رقم الهاتف</th>
                <th>العنوان</th>
                <th>الفترة</th>
            </tr>
            </thead>
            <tbody>
            @foreach( $demend_empl as $det )
                <tr>
                    <td>{{ $det->id }}</td>
                    <td>{{ $det->id_user }}</td>
                    <td>{{ $det->wadifa }}</td>
                    <td>{{ $det->wilaya }}</td>
                    <td>{{ $det->num_t }}</td>
                    <td>{{ $det->adr }}</td>
                    <td>{{ $det->fatra }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-cog"></span> </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $demend_empl->links() }}
    </div>


@endsection
