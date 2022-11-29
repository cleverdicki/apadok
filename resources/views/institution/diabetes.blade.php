@extends('layouts.institution')

@section('css')
<link rel="stylesheet" href="{{ asset('css/institution-diabetes.css') }}">
@endsection

@section('main')
<div class="institution-diabetes">
    <h1>Monitoring - Risiko Diabetes</h1>
    <div class="graph-container">
        <h5>Grafik Risiko Diabetes</h5>
        <div class="img-container">
            <img src="{{ asset('images/institution/diabetes.png') }}" alt="diabetes">
        </div>
    </div>
    <div class="data-container">
        <div class="ui five column relaxed grid">
            <div class="column box-column first-box">
                <h5>Risiko Sangat Tinggi</h5>
                <p>0 <span>orang</span></p>
            </div>
            <div class="column box-column other-box">
                <h5>Risiko Tinggi</h5>
                <p>0 <span>orang</span></p>
            </div>
            <div class="column box-column other-box">
                <h5>Risiko Sedang</h5>
                <p>1 <span>orang</span></p>
            </div>
            <div class="column box-column other-box">
                <h5>Risiko Sedikit Tinggi</h5>
                <p>1 <span>orang</span></p>
            </div>
            <div class="column box-column other-box">
                <h5>Risiko rendah</h5>
                <p>1 <span>orang</span></p>
            </div>
        </div>
    </div>
    <div class="risiko-container">
        <div class="ui grid">
            <div class="thirteen wide column">
                <h3>Informasi Risiko</h3>
            </div>
            <div class="three wide column">
                <div class="ui menu">
                    <div class="item">
                        <button class="ui orange button sub-btn-ie">
                            Import/Export
                            <i class="fas fa-angle-down dropdown-btn"></i>
                        </button>
                        <div class="sub-menu-btn">
                            <a href="#" class="item sub-item">Import</a>
                            <a href="#" class="item sub-item" onclick="exportModal()">Export</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui search">
            <div class="ui icon input">
                <input class="prompt" type="text" placeholder="Cari peserta">
                <i class="search icon"></i>
            </div>
        </div>
        <div class="table-container">
            <table class="ui striped table">
                <thead>
                    <tr>
                        <th>Nomor Peserta</th>
                        <th>Nama Peserta</th>
                        <th>Nomor Telepon</th>
                        <th>Status</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>TESTER01</td>
                        <td>Bambang</td>
                        <td>081251515151</td>
                        <td>Tidak Berisiko</td>
                        <td><a href="#">Lihat detail</a></td>
                    </tr>
                    <tr>
                        <td>TESTER01</td>
                        <td>Bambang</td>
                        <td>081251515151</td>
                        <td>Tidak Berisiko</td>
                        <td><a href="#">Lihat detail</a></td>
                    </tr>
                    <tr>
                        <td>TESTER01</td>
                        <td>Bambang</td>
                        <td>081251515151</td>
                        <td>Tidak Berisiko</td>
                        <td><a href="#">Lihat detail</a></td>
                    </tr>
                    <tr>
                        <td>TESTER01</td>
                        <td>Bambang</td>
                        <td>081251515151</td>
                        <td>Tidak Berisiko</td>
                        <td><a href="#">Lihat detail</a></td>
                    </tr>
                    <tr>
                        <td>TESTER01</td>
                        <td>Bambang</td>
                        <td>081251515151</td>
                        <td>Tidak Berisiko</td>
                        <td><a href="#">Lihat detail</a></td>
                    </tr>
                    <tr>
                        <td>TESTER01</td>
                        <td>Bambang</td>
                        <td>081251515151</td>
                        <td>Tidak Berisiko</td>
                        <td><a href="#">Lihat detail</a></td>
                    </tr>
                </tbody>
            </table>
            @include('layouts.pagination')
        </div>
    </div>
</div>
<div class="ui modal" id="export-modal">
    <i class="close icon"></i>
    <div class="content">
        <div class="content-container">
            <img src="{{ asset('images/institution/success.png') }}" alt="success">
            <h3>Data berhasil di-export</h3>
            <button class="ui blue button">Tutup</button>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    function exportModal() {
        $('#export-modal').modal('show');
    }
    $('.sub-btn-ie').click(function() {
        $(this).next('.sub-menu-btn').slideToggle();
        $(this).find('.dropdown-btn').toggleClass('rotate-btn');
    })
</script>
@endsection