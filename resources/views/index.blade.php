@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
@endsection

@section('main')
<div class="landing-container">
    <div class="landing-jumbotron">
        <div class="ui vertically divided grid">
            <div class="two column row">
                <div class="column">
                    <div class="left-side">
                        <h1>Layanan Kesehatan Tepat Bersama Apadok</h1>
                        <p>Apadok membantu klinik-klinik mengembangkan serta mengelola bisnisnya secara tepat dan akurat.</p>
                        <button class="ui orange button">Daftar Sekarang</button>
                    </div>
                </div>
                <div class="column">
                    <div class="right-side">
                        <img src="{{ asset('images/doctorVect.png') }}" alt="doctorVect" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="landing-sect-1">
        <div class="sect-1-container">
            <h1>Layanan Apadok</h1>
            <div class="ui four column grid">
                <div class="column">
                    <img src="{{ asset('images/monitorDataImg.png') }}" alt="monitorData" srcset="">
                    <h2>Monitor Data</h2>
                    <p>Monitor data pasien anda melalui website Apadok khusus admin klinik</p>
                </div>
                <div class="column">
                    <img src="{{ asset('images/lihatPasienImg.png') }}" alt="lihatPasien" srcset="">
                    <h2>Lihat Pasien</h2>
                    <p>Lihat daftar pasien serta grafik hasil tes setiap pasien secara lengkap dan akurat</p>
                </div>
                <div class="column">
                    <img src="{{ asset('images/konsultasiKlinikImg.png') }}" alt="konsultasiKlinik" srcset="">
                    <h2>Konsultasi Klinik</h2>
                    <p>Apadok memberikan layanan konsultasi antara klinik dan pasien melalui fitur chat pada mobile app</p>
                </div>
                <div class="column">
                    <img src="{{ asset('images/tesKesehatanImg.png') }}" alt="tesKesehatan" srcset="">
                    <h2>Tes Kesehatan</h2>
                    <p>Lakukan tes skrining kesehatan untuk mengetahui status kesehatan anda</p>
                </div>
            </div>
        </div>
    </div>
    <div class="landing-sect-2">
        <div class="sect-2-container">
            <h1>Mengapa Bergabung Bersama Apadok</h1>
            <div class="ui three column grid">
                <div class="column box-column">
                    <h2>Sistem yang Terintegrasi</h2>
                    <p>Dengan Apadok, klinik anda memiliki sistem terpadu serta terintegrasi dan dapat diakses secara daring. Apadok dirancang untuk memenuhi kebutuhan klinik anda</p>
                </div>
                <div class="column box-column mid-column">
                    <h2>Standarisasi Layanan</h2>
                    <p>Layanan klinik anda akan distandarisasi sesuai dengan standar Apadok guna meningkatkan kualitas klinik anda</p>
                </div>
                <div class="column box-column">
                    <h2>Dimanapun dan Kapanpun</h2>
                    <p>Akses website maupun mobile app Apadok kapanpun dan dimanapun setiap harinya</p>
                </div>
            </div>
        </div>
    </div>
    <div class="landing-sect-3">
        <div class="sect-3-container">
            <h1>Artikel Kesehatan</h1>
            <div class="ui three column centered grid box-grid">
                <div class="column box-column">
                    <img src="{{ asset('images/headImg.png') }}" alt="head" srcset="">
                    <p>Trik psikologis untuk membuat anda semakin bugar</p>
                    <a href="">Baca selengkapnya</a>
                </div>
                <div class="column box-column mid-column">
                    <img src="{{ asset('images/situpImg.png') }}" alt="situp" srcset="">
                    <p>Ini 5 manfaat sit-up untuk kesehatan jangka panjang</p>
                    <a href="">Baca selengkapnya</a>
                </div>
                <div class="column box-column">
                    <img src="{{ asset('images/bananaImg.png') }}" alt="banana" srcset="">
                    <p>Kenali nutrisi Pisang sebelum Anda memakannya secara rutin</p>
                    <a href="">Baca selengkapnya</a>
                </div>
            </div>
            <button class="ui orange button">Lihat Semua</button>
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection