@extends('layouts.master')
@section('main')
<div class="admin-index-jumbotron">
    <div class="content">
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
</div>
@endsection