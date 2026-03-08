@extends('layouts.app')

@section('title', 'Identitas Sekolah')

@section('content')
<div class="container py-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Identitas Sekolah</li>
        </ol>
    </nav>
    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
            <h1 class="mb-4">Identitas Sekolah</h1>
            <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
                        <th width="30%">Nama Sekolah</th>
                        <td>SDN Kroyolor</td>
                    </tr>
                    <tr>
                        <th>NPSN</th>
                        <td>12345678</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>Jl. Kroyo No. 123, Kabupaten/Kota, Provinsi</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>Negeri</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
