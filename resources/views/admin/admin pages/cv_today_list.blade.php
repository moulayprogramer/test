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
                <th>id cv</th>
                <th>id user</th>
                <th>الاسم</th>
                <th>اللقب</th>
                <th>المستوى الدراسي</th>
                <th>العنوان</th>
                <th>التعديل</th>
            </tr>
            </thead>
            <tbody>
            @foreach( $cv_today as $cvv )
                <tr>
                    <td>{{ $cvv->id }}</td>
                    <td>{{ $cvv->id_user }}</td>
                    <td>{{ $cvv->prenom }}</td>
                    <td>{{ $cvv->nom }}</td>
                    <td>{{ $cvv->niveau }}</td>
                    <td>{{ $cvv->adr }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-cog"></span> </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $cv_today->links() }}
    </div>


@endsection
