@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
<br>SELAMAT DATANG<br/>
{Nama yang Login}<br/>
Tanggal :{{ date('Y-m-d ') }}<br/>
Jam :{{ date('H:i:s') }}<br/>
<a href="#" class="btn btn-success btn-lg">Tombol</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
