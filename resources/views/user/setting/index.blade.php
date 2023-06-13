@extends('user.includes.app')

@section('title', 'Settings')
@section('subtitle', 'Settings')

@section('content')
    <div class="col-span-12 xl:col-span-8 mt-6">
        <div class="intro-y flex items-center content-space-between items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                Pengaturan Akun
            </h2>
            <div class="ml-auto relative text-slate-500">
                <a href="" class="btn btn-primary shadow-md mr-2">Edit Akun</a>
            </div>
        </div>

        <div class="intro-y box p-5 mt-5 sm:mt-5 grid grid-cols-12">
            <div class="col-span-12 sm:col-span-6">
                <div class="text-base text-slate-500 mt-2">nama</div>
                <div class="text-2xl font-medium leading-8 mt-1">{{ auth()->user()->name }}</div>
            </div>
            <div class="col-span-12 sm:col-span-6">
                <div class="text-base text-slate-500 mt-5 sm:mt-2">email</div>
                <div class="text-2xl font-medium leading-8 mt-1">{{ auth()->user()->email }}</div>
            </div>
        </div>

        <div class="intro-y flex items-center content-space-between items-center h-10 mt-10">
            <h2 class="text-lg font-medium truncate mr-5">
                Pengaturan Data
            </h2>
            <div class="ml-auto relative text-slate-500">
                <a href="" class="btn btn-primary shadow-md mr-2">Edit Akun</a>
            </div>
        </div>

        <div class="intro-y box p-5 mt-5 sm:mt-5 grid grid-cols-12">
            <div class="col-span-12 sm:col-span-6">
                <div class="text-base text-slate-500 mt-2">nama</div>
                <div class="text-2xl font-medium leading-8 mt-1">oien fsdf</div>
            </div>
            <div class="col-span-12 sm:col-span-6">
                <div class="text-base text-slate-500 mt-5 sm:mt-2">email</div>
                <div class="text-2xl font-medium leading-8 mt-1">oapsdnf sd</div>
            </div>
        </div>
    </div>
@endsection
