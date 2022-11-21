@extends('layouts.institution')

@section('css')
<link rel="stylesheet" href="{{ asset('css/institution-screening.css') }}">
@endsection

@section('main')
<div class="institution-screening">
    <h1>Monitoring - Jumlah Screening</h1>
    <div class="data-container">
        <div class="ui three column relaxed grid">
            <div class="column box-column">
                <h5>Total Jumlah Peserta</h5>
                <p>6 <span>orang</span></p>
            </div>
            <div class="column box-column mid-box">
                <h5>Total Peserta Sudah Skrinning</h5>
                <p>5 <span>orang</span></p>
            </div>
            <div class="column box-column">
                <h5>Total Peserta Belum Skrinning</h5>
                <p>1 <span>orang</span></p>
            </div>
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
                    <td>088811112222</td>
                    <td>Sudah Skrining</td>
                    <td><a href="#">Lihat detail</a></td>
                </tr>
                <tr>
                    <td>TESTER01</td>
                    <td>Bambang</td>
                    <td>088811112222</td>
                    <td>Sudah Skrining</td>
                    <td><a href="#">Lihat detail</a></td>
                </tr>
                <tr>
                    <td>TESTER01</td>
                    <td>Bambang</td>
                    <td>088811112222</td>
                    <td>Sudah Skrining</td>
                    <td><a href="#">Lihat detail</a></td>
                </tr>
                <tr>
                    <td>TESTER01</td>
                    <td>Bambang</td>
                    <td>088811112222</td>
                    <td>Sudah Skrining</td>
                    <td><a href="#">Lihat detail</a></td>
                </tr>
                <tr>
                    <td>TESTER01</td>
                    <td>Bambang</td>
                    <td>088811112222</td>
                    <td>Sudah Skrining</td>
                    <td><a href="#">Lihat detail</a></td>
                </tr>
                <tr>
                    <td>TESTER01</td>
                    <td>Bambang</td>
                    <td>088811112222</td>
                    <td>Sudah Skrining</td>
                    <td><a href="#">Lihat detail</a></td>
                </tr>
            </tbody>
        </table>
    </div>
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
@endsection