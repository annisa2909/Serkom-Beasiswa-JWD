<!-- Menghubungkan dengan view template app.blade.php -->
@extends('layouts.app')
<!-- Judul halaman -->
@section('title', 'Home')
<!-- Isi Konten -->
@section('content')
<div class="md:py-16">
    <div class="max-w-7xl mx-auto flex items-center gap-6 px-5 flex-col py-14 md:flex-row lg:py-2 xl:py-0">
        <div class="flex flex-col gap-7 lg:w-8/12 xl:w-3/5 text-center md:text-left">
            <h1 class="font-bold tracking-tight text-4xl text-blue-900 lg:text-5xl">
                Siapkan Diri Anda untuk Ujian E-Serkom Junior Web Developer Bersama BNSP
            </h1>
            <p class="text-base lg:text-lg 2xl:text-gray-500">
                Perkenalkan saya Annisa Nur Baiti Mahasiswa Institut Teknologi Telkom Purwokerto Fakultas Informatika Prodi S1 Rekayasa Perangkat Lunak.</p>
            <a class="mx-auto md:mx-0 py-2 w-48 text-center text-black dark:blue-400 font-semibold rounded-lg shadow-xl px-5 rounded-global bg-blue-500 dark:bg-gray-900 text-lg" href="{{ route('daftar') }}">
                Daftar Beasiswa
            </a>
        </div>
        <div class="w-full lg:w-7/12">
            <img class="sm:mx-9 sm:-my-16 md:mx-0 md:my-0 lg:w-full"
                src="https://api.meylendra.com/static/media/icon_1.390f6a05.png" style="width: 650px;height: 450px"  alt="icon-belajar" />
        </div>
    </div>
</div>
@include('footer.footer')
@endsection
