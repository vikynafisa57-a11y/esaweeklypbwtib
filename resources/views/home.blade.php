@extends('layouts.main')

@section('title', 'Home | Viky Diana Nafisa')

@section('content')

<section class="home">

    <div class="home-text">

        <p class="small-title">
            WELCOME TO MY PORTFOLIO
        </p>

        <h1>
            Hi, I'm <span>Viky Diana</span>
        </h1>

        <p>
            Mahasiswa Teknologi Informasi yang tertarik
            dengan teknologi, desain, dan pengembangan website.
        </p>

        <a href="{{ route('profile') }}" class="button">
            Lihat Profile
        </a>

    </div>


    <div class="home-image">

        <img src="{{ asset('images/Eisa2.jpg') }}"
             alt="Foto Viky Diana">

    </div>

</section>

@endsection