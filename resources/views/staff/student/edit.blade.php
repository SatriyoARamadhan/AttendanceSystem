@extends('staff.layout.auth')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Siswa</div>
                <div class="panel-body">


                    <form class="form-horizontal" role="form" method="post" action="{{ route('staff.student.update', $user->id) }}">

                        {{ csrf_field() }}
                        {{ method_field('patch') }}
                        
                        <div class="form-group{{ $errors->has('nis') ? ' has-error' : '' }}">
                            <label for="nis" class="col-md-4 control-label">NIS</label>

                            <div class="col-md-6">
                                <input id="nis" type="number" class="form-control" name="nis" value="{{ $user->nis }}" required autofocus>

                                @if ($errors->has('nis'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nis') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">Nama Depan</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ $user->first_name }}" required autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-4 control-label">Nama Belakang</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ $user->last_name }}" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{ $user->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                            <label for="dob" class="col-md-4 control-label">Tanggal Lahir</label>

                            <div class="col-md-6">
                                <input id="dob" type="text" class="form-control" name="dob" value="{{ $user->dob }}" data-toggle="datepicker" required autofocus>

                                @if ($errors->has('dob'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('rayon_id') ? ' has-error' : '' }}">
                            <label for="rayon_id" class="col-md-4 control-label">Rayon</label>

                            <div class="col-md-6">
                                <select id="rayon_id" class="form-control" name="rayon_id" required>
                                 
                                    <option value="{{ $user->rayon_id }}">{{ $user->rombel_id }}</option>
                                 
                                </select>

                                @if ($errors->has('rayon_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rayon_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <div class="form-group{{ $errors->has('rombel_id') ? ' has-error' : '' }}">
                            <label for="rombel_id" class="col-md-4 control-label">Rombel</label>

                            <div class="col-md-6">
                                <select id="rombel_id" class="form-control" name="rombel_id" required>
                                        
                                    <option value="{{ $user->rombel_id }}">{{ $user->rombel_id }}</option>
                                    
                                </select>

                                @if ($errors->has('rombel_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rombel_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('batch') ? ' has-error' : '' }}">
                            <label for="batch" class="col-md-4 control-label">Tahun Gabung (Angkatan)</label>

                            <div class="col-md-6">
                                <input id="batch" type="text" class="form-control" name="batch" value="{{ $user->batch }}" data-toggle="datepicker-year" required autofocus>

                                @if ($errors->has('batch'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('batch') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" value="">
                                    Update
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
