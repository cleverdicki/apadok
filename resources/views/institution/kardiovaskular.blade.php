@extends('layouts.institution')

@section('css')
<link rel="stylesheet" href="{{ asset('css/institution-kardiovaskular.css') }}">
@endsection

@section('main')
<div class="institution-kardiovaskular">
    <h1>Monitoring - Risiko Kardiovaskular</h1>
    <div class="graph-container">
        <h5>Grafik Risiko kardiovaskular</h5>
        <div class="img-container">
            <img src="{{ asset('images/institution/kardiovaskular.png') }}" alt="all-kardiovaskular">
        </div>
    </div>
    <div class="data-container">
        <div class="ui four column relaxed grid">
            <div class="column box-column first-box">
                <h5>Risiko Tinggi</h5>
                <p>0 <span>orang</span></p>
            </div>
            <div class="column box-column other-box">
                <h5>Risiko Menengah</h5>
                <p>0 <span>orang</span></p>
            </div>
            <div class="column box-column other-box">
                <h5>Risiko Rendah</h5>
                <p>1 <span>orang</span></p>
            </div>
            <div class="column box-column other-box">
                <h5>Tidak Berisiko</h5>
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
                <button class="ui orange button">
                    Import/Export
                </button>
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
            <div class="pagination-container">
                <div class="pagination-menu">
                    <div class="ui pagination menu">
                        <a class="active item">1</a>
                        <a class="item">2</a>
                        <a class="item">3</a>
                        <a class="item">4</a>
                        <a class="item">5</a>
                        <a class="item">Next</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection