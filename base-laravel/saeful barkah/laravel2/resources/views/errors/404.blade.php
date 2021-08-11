@extends('_layouts.404')

@section('title', __('Not Found'))
@section('content')
<h1>404</h1>
<h2>Halaman tidak di temukan</h2>
<p>Maaf, halaman yang Anda coba lihat tidak ada.</p>
<a href="{{ route('home') }}" class="btn btn-main mt-20">Kembali</a>
@endsection
