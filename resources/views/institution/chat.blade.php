@extends('layouts.institution')

@section('css')
<link rel="stylesheet" href="{{ asset('css/institution-chat.css') }}">
@endsection

@section('main')
<div class="institution-chat">
    <h1>Chat</h1>
    <div class="ui grid">
        <div class="four wide column box-column left-box">
            <div class="ui search">
                <div class="ui icon input">
                    <input class="prompt" type="text" placeholder="Cari peserta">
                    <i class="search icon"></i>
                </div>
                <div class="results"></div>
            </div>
            <div class="ui grid">
                <div class="three wide column initial-column">
                    <div class="circle-bg">
                        <h3>B</h3>
                    </div>
                </div>
                <div class="thirteen wide column detail-column">
                    <h5>Bambang</h5>
                    <p>081274829382</p>
                </div>
            </div>
            <div class="ui grid">
                <div class="three wide column initial-column">
                    <div class="circle-bg">
                        <h3>R</h3>
                    </div>
                </div>
                <div class="thirteen wide column detail-column">
                    <h5>Rahayu</h5>
                    <p>081277459382</p>
                </div>
            </div>
            <div class="ui grid">
                <div class="three wide column initial-column">
                    <div class="circle-bg">
                        <h3>S</h3>
                    </div>
                </div>
                <div class="thirteen wide column detail-column">
                    <h5>Sutejo</h5>
                    <p>087829103821</p>
                </div>
            </div>
            <div class="ui grid">
                <div class="three wide column initial-column">
                    <div class="circle-bg">
                        <h3>R</h3>
                    </div>
                </div>
                <div class="thirteen wide column detail-column">
                    <h5>Rifki</h5>
                    <p>087712312392</p>
                </div>
            </div>
            <div class="ui grid">
                <div class="three wide column initial-column">
                    <div class="circle-bg">
                        <h3>AT</h3>
                    </div>
                </div>
                <div class="thirteen wide column detail-column">
                    <h5>Ahmad Tauhid</h5>
                    <p>081295838392</p>
                </div>
            </div>
        </div>
        <div class="eleven wide column box-column right-box">
            <div class="chat-right-box-container">
                <img src="{{ asset('images/institution/chat.png') }}" alt="chat">
                <p>Mulai pesan baru</p>
            </div>
        </div>
    </div>
</div>
@endsection