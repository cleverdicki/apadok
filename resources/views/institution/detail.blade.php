@extends('layouts.institution')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('main')
<div class="institution-detail">
    <div class="ui grid">
        <div class="fourteen wide column">
            <h1>Informasi Peserta</h1>
        </div>
        <div class="two wide column">
            <button class="ui primary button first-btn">
                <span><img src="{{ asset('images/institution/edit.png') }}" alt="edit"></span>Edit
            </button>
        </div>
    </div>
    <div class="detail-peserta-container">
        <div class="ui four column grid">
            <div class="row">
                <div class="column text-title">Nomor Peserta</div>
                <div class="column text-data">TESTER01</div>
            </div>
            <div class="row">
                <div class="column text-title">Nama Peserta</div>
                <div class="column text-data">Bambang</div>
            </div>
            <div class="row">
                <div class="column text-title">Nomor Telepon</div>
                <div class="column text-data">081251351361</div>
            </div>
            <div class="row">
                <div class="column text-title">Tanggal Lahir</div>
                <div class="column text-data">01-08-1991</div>
            </div>
            <div class="row">
                <div class="column text-title">Jenis Kelamin</div>
                <div class="column text-data">Laki-laki</div>
            </div>
            <div class="row">
                <div class="column text-title">Tinggi Badan(cm)</div>
                <div class="column text-data">176</div>
            </div>
            <div class="row">
                <div class="column text-title">Berat Badan (kg)</div>
                <div class="column text-data">81</div>
            </div>
        </div>
    </div>
    <h1>Riwayat Pemeriksaan</h1>
    <div class="risiko-container">
        <div class="ui grid">
            <div class="thirteen wide column">
                <h3>Pemeriksaan Risiko</h3>
            </div>
            <div class="three wide column">
                <button class="ui orange button">
                    Import/Export
                </button>
            </div>
        </div>
        <div class="ui search">
            <div class="ui icon input">
                <input class="prompt" type="text" placeholder="Cari riwayat">
                <i class="search icon"></i>
            </div>
        </div>
        <div class="table-container">
            <table class="ui striped table">
                <thead>
                    <tr>
                        <th>Hasil Diabetes</th>
                        <th>Hasil Stroke</th>
                        <th>Hasil Kardiovaskular</th>
                        <th>Waktu Pemeriksaan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Risiko Tinggi</td>
                        <td>Risiko Rendah</td>
                        <td>Tidak Berisiko</td>
                        <td>04-07-2022 10:55:45</td>
                    </tr>
                    <tr>
                        <td>Risiko Tinggi</td>
                        <td>Risiko Rendah</td>
                        <td>Tidak Berisiko</td>
                        <td>04-07-2022 10:55:45</td>
                    </tr>
                    <tr>
                        <td>Risiko Tinggi</td>
                        <td>Risiko Rendah</td>
                        <td>Tidak Berisiko</td>
                        <td>04-07-2022 10:55:45</td>
                    </tr>
                    <tr>
                        <td>Risiko Tinggi</td>
                        <td>Risiko Rendah</td>
                        <td>Tidak Berisiko</td>
                        <td>04-07-2022 10:55:45</td>
                    </tr>
                    <tr>
                        <td>Risiko Tinggi</td>
                        <td>Risiko Rendah</td>
                        <td>Tidak Berisiko</td>
                        <td>04-07-2022 10:55:45</td>
                    </tr>
                    <tr>
                        <td>Risiko Tinggi</td>
                        <td>Risiko Rendah</td>
                        <td>Tidak Berisiko</td>
                        <td>04-07-2022 10:55:45</td>
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
    <div class="kebugaran-container">
        <div class="ui grid">
            <div class="thirteen wide column">
                <h3>Pemeriksaan Kebugaran</h3>
            </div>
            <div class="three wide column">
                <button class="ui orange button">
                    Import/Export
                </button>
            </div>
        </div>
        <div class="ui search">
            <div class="ui icon input">
                <input class="prompt" type="text" placeholder="Cari riwayat">
                <i class="search icon"></i>
            </div>
        </div>
        <div class="table-container">
            <table class="ui striped table">
                <thead>
                    <tr>
                        <th>Hasil Kebugaran</th>
                        <th>Waktu Pemeriksaan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Bugar Rendah</td>
                        <td>04-07-2022 10:55:45</td>
                    </tr>
                    <tr>
                        <td>Bugar Rendah</td>
                        <td>04-07-2022 10:55:45</td>
                    </tr>
                    <tr>
                        <td>Bugar Rendah</td>
                        <td>04-07-2022 10:55:45</td>
                    </tr>
                    <tr>
                        <td>Bugar Rendah</td>
                        <td>04-07-2022 10:55:45</td>
                    </tr>
                    <tr>
                        <td>Bugar Rendah</td>
                        <td>04-07-2022 10:55:45</td>
                    </tr>
                    <tr>
                        <td>Bugar Rendah</td>
                        <td>04-07-2022 10:55:45</td>
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