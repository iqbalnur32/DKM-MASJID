@extends('layouts.app')

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <div class="login-logo">
                <a href="#">Jamaah Register</a>
            </div>
        </div>
        <div class="card">
            <div class="col-lg-12">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Sign Up For You Login</p>
                    <form action="{{ url('register/jamaah') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group has-feedback">
                                    <div class="input-group">
                                        <input class="form-control" type="email" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <div class="input-group">
                                        <input class="form-control" type="password" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="nama" placeholder="Nama">
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <div class="input-group">
                                        <select class="form-control" name="status_jamaah">
                                            <option>Pelajar</option>
                                            <option>Pekerja</option>
                                            <option>Mahasiswa</option>
                                        </select> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group has-feedback">
                                    <div class="input-group">
                                        <input class="form-control" type="username" name="username" placeholder="Username"> 
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <div class="input-group">
                                        <input class="form-control" type="date" name="tgl_lahir" placeholder="Taggal Lahir">
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="tempat_lahir" placeholder="Tempat Lahir">
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <div class="input-group">
                                        <select class="form-control" name="jenis_kelamin">
                                            <option>Laki-Laki</option>
                                            <option>Perempuan</option>
                                        </select> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group has-feedback">
                                    <div class="input-group">
                                        <textarea class="form-control" name="alamat" placeholder="Alamat"></textarea>
                                    </div>
                                </div>  
                                <div class="form-group" style="float: right;">
                                    <button type="submit" class="btn btn-success btn-xs">Register</button>
                                </div>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
