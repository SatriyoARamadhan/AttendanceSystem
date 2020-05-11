@extends('staff.layout.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Siswa</div>
                
                <div class="panel-body">
                    <a class="btn btn-primary pull-right" href="{{ route('staff.student.create') }}">Tambah Siswa</a>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NIS</th>
                                <th>Email</th>
                                <th>Nama Depan</th>
                                <th>Nama Belakang</th>
                                <th>Tanggal Lahir</th>
                                <th>Rayon</th>
                                <th>Rombel</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Users as $Index => $User)
                            <tr>
                                <td>{{ $Index + 1 }}</td>
                                <td>{{ $User->nis }}</td>
                                <td>{{ $User->email }}</td>
                                <td>{{ $User->first_name }}</td>
                                <td>{{ $User->last_name }}</td>
                                <td>{{ Carbon\Carbon::parse($User->dob)->format('d-m-Y') }}</td>
                                <td>{{ $User->rayon->name }}</td>
                                <td>{{ $User->rombel->name }}</td>
                                <td>
                                    <div>
                                        <a class="btn btn-warning btn-round btn-xs " href="{!! route('staff.student.edit',[$User->id]) !!}"> &nbsp Edit &nbsp</a>
                                    </div>
                                    
                                    <div>
                                        <form action="{{ route('staff.student.destroy', $User) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-xs btn-danger btn-round" >Hapus</button>
                                        </form>
                                    </div>

                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
