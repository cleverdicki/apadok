@extends('layouts.institution')

@section('css')
<link rel="stylesheet" href="{{ asset('css/institution-peserta.css') }}">
@endsection

@section('main')
<div class="institution-peserta">
    <h1>Peserta</h1>
    <div class="data-container">
        <div class="ui two column relaxed grid">
            <div class="column box-column left-box">
                <h5>Total Jumlah Peserta</h5>
                <p>6 <span>orang</span></p>
            </div>
            <div class="column box-column rigt-box">
                <h5>Total Peserta Sudah Skrining</h5>
                <p>5 <span>orang</span></p>
            </div>
        </div>
    </div>
    <div class="option-container">
        <div class="ui grid">
            <div class="column box-search">
                <div class="ui search">
                    <div class="ui icon input">
                        <input class="prompt" type="text" placeholder="Cari Peserta">
                        <i class="search icon"></i>
                    </div>
                </div>
            </div>
            <div class="column box-add">
                <button class="ui primary button">
                    <span><img src="{{ asset('images/institution/plus.png') }}" alt="plus"></span>Tambah Peserta
                </button>
            </div>
            <div class="column box-download">
                <button class="ui primary basic button">
                    <span><img src="{{ asset('images/institution/download.png') }}" alt="download"></span>Unduh Template
                </button>
            </div>
            <div class="column box-import-export">
                <button class="ui orange button">
                    Import/Export
                </button>
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
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>TESTER01</td>
                    <td>Bambang</td>
                    <td>088811112222</td>
                    <td><a href="#" class="edit-link">Edit </a><span>|</span><a href="#" class="delete-link"> Delete</a></td>
                </tr>
                <tr>
                    <td>TESTER01</td>
                    <td>Bambang</td>
                    <td>088811112222</td>
                    <td><a href="#" class="edit-link">Edit </a><span>|</span><a href="#" class="delete-link"> Delete</a></td>
                </tr>
                <tr>
                    <td>TESTER01</td>
                    <td>Bambang</td>
                    <td>088811112222</td>
                    <td><a href="#" class="edit-link">Edit </a><span>|</span><a href="#" class="delete-link"> Delete</a></td>
                </tr>
                <tr>
                    <td>TESTER01</td>
                    <td>Bambang</td>
                    <td>088811112222</td>
                    <td><a href="#" class="edit-link">Edit </a><span>|</span><a href="#" class="delete-link"> Delete</a></td>
                </tr>
                <tr>
                    <td>TESTER01</td>
                    <td>Bambang</td>
                    <td>088811112222</td>
                    <td><a href="#" class="edit-link">Edit </a><span>|</span><a href="#" class="delete-link"> Delete</a></td>
                </tr>
                <tr>
                    <td>TESTER01</td>
                    <td>Bambang</td>
                    <td>088811112222</td>
                    <td><a href="#" class="edit-link">Edit </a><span>|</span><a href="#" class="delete-link"> Delete</a></td>
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