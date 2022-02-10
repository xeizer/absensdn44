@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tombol Absen') }}</div>

                <div style="background: url('gambar/alam.jpg');">
<center>
<b>
<font face="Times New Roman" color="white" size="5">
<br>SELAMAT DATANG<br/>
{Nama yang Login}<br/>
Tanggal :{{ date('Y-m-d ') }}<br/>
Jam :{{ date('H:i:s') }}<br/>
<a href="#" class="btn btn-success btn-lg">LOGIN</a>
</b>
</center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
