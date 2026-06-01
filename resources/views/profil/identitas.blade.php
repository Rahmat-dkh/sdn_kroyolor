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
                        <td>SD NEGERI KROYOLOR</td>
                    </tr>
                    <tr>
                        <th>NPSN</th>
                        <td>20306457</td>
                    </tr>
                    <tr>
                        <th>Nama Kepala Sekolah</th>
                        <td>Imbuh Tri Purwani S.Pd.SD</td>
                    </tr>
                    <tr>
                        <th>Keunggulan</th>
                        <td>Karawitan</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>Kroyolor, Desa Kroyo Lor, Kec. Kemiri, Kab. Purworejo, Jawa Tengah</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>Negeri</td>
                    </tr>
                </table>
            </div>

            <hr class="my-5">

            <h2 class="mb-4 text-primary">Visi Sekolah</h2>
            <ol class="mb-4 fs-5" type="a">
                <li>Terwujudnya generasi yang beriman.</li>
                <li>Terwujudnya generasi yang bertaqwa.</li>
                <li>Terwujudnya generasi yang santun dalam bertutur dan berperilaku.</li>
                <li>Terwujudnya generasi yang mandiri dengan bekal prestasi akademik dan non akademik.</li>
                <li>Terwujudnya generasi yang cinta alam dan lingkungan.</li>
                <li>Terwujudnya generasi yang berilmu dan berpengetahuan luas.</li>
            </ol>

            <h2 class="mb-4 text-primary">Misi Sekolah</h2>
            <ol class="fs-5" type="a">
                <li>Mewujudkan pendidikan dan pengamalan ajaran agama di sekolah untuk meningkatkan kualitas keimanan dan ketaqwaan terhadap Tuhan Yang Maha Esa.</li>
                <li>Meningkatkan pendidikan budi pekerti, tata krama, dan sopan santun agar dapat menciptakan suasana kekeluargaan yang sejuk.</li>
                <li>Meningkatkan pendidikan dan pengajaran IPTEK sesuai dengan tuntutan zaman sehingga mampu menumbuhkan budaya belajar yang kreatif, inovatif, dan memiliki keinginan untuk maju.</li>
                <li>Mewujudkan sistem pendidikan yang menumbuhkan rasa cinta tanah air, semangat kebangsaan, kesetiakawanan sosial, serta menghargai jasa para pahlawan yang berorientasi pada masa depan.</li>
            </ol>
        </div>
    </div>
</div>
@endsection
