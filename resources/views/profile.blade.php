@extends('layouts.main')

@section('title', 'Profile | Viky Diana Nafisa')

@section('content')

<section class="profile">

    <h1>My Profile</h1>

    <div class="profile-content">

        <img src="{{ asset('images/Eisa2.jpg') }}"
             alt="Foto Viky Diana">

        <div class="profile-info">

            <h2>Viky Diana Nafisa</h2>

            <p>
                <strong>NIM:</strong> 13242520051
            </p>

            <p>
                <strong>Program Studi:</strong>
                Teknologi Informasi
            </p>

            <p>
                <strong>Universitas:</strong>
                Universitas Muhammadiyah Semarang
            </p>

            <p>
                Saya adalah mahasiswa Teknologi Informasi
                yang memiliki ketertarikan pada teknologi,
                desain, dan pengembangan website.
            </p>

        </div>

    </div>

</section>

@endsection