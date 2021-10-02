@extends('layouts.master')

@section('title', __('404 not found'))
@section('page-title','404')
@section('page-subtitle','Maaf, halaman tidak di temukan')
@section('button')
<a href="{{ url('/') }}" class="btn btn-outline-warning mt-4">Kembali ke beranda</a>
@endsection
