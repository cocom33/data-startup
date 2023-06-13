@extends('user.includes.app-detail');

@section('title', 'Data')
@section('subtitle', 'Identitas Startup')

@section('content')
  <div class="row">
    <div class="col-md">
      <div class="nav-align-top mb-4 mt-3">
        <div class="tab-content">
          <div class="tab-pane fade show active" id="navs-top-home" role="tabpanel">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h3 class="mb-0">Isi Identitas Startup</h3>
                <a href="" class="btn btn-primary">Submit</a>
            </div>

            <form class="row" action="">
                @csrf
                <input type="hidden" name="user_id" value="">

                <x-user.form-input label="Nama CEO" name="nama_ceo" placeholder="Nama CEO" />
                <x-user.form-input label="Nomor HP/Telepon" name="nomor_hp" placeholder="Nomor HP/Telepon" type="number" />
                <x-user.form-input label="Email" name="email" placeholder="Email" type="email" />
                <x-user.form-input label="Usia" name="usia" placeholder="Usia" type="number" max="100" />
                <x-user.form-select label="usia" name="usia" options='kurang dari 22 Tahun,sekitar 22 - 40 Tahun,lebih dari 40 Tahun' />
                <x-user.form-select label="Jenis Kelamin" name="gender" options='Laki Laki,Wanita' />
                <x-user.form-select label="Latar Belakang CEO" name="latar_belakang_ceo" options='SMK/SMA/Sederajat,Diploma, Sarjana (S1),Master (S2),Doktor (S3)' />
                <x-user.form-input label="Nama Founder" name="nama_founder" placeholder="Nama Founder" />
                <x-user.form-input label="Nama Usaha" name="nama_usaha" placeholder="Nama Usaha" />
                <x-user.form-input label="Rata Rata Omset Awal" name="omset_awal" placeholder="Rata Rata Omset Awal" />
                <x-user.form-input label="Alamat Usaha" name="alamat_usaha" placeholder="Alamat Usaha" />
                <x-user.form-input label="Alamat Bengkel/Workshop" name="alamat_workshop" placeholder="Alamat Bengkel/Workshop" />
                <x-user.form-select label="Bentuk Usaha" name="bentuk_usaha" options='PT,CV,Belum Berbadan Hukum' />
                {{-- peer --}}
                <x-user.form-input label="Bidang Fokus Usaha" name="bidang_fokus_usaha" placeholder="Bidang Fokus Usaha" />
                {{-- peer --}}
                <x-user.form-select label="Izin Usaha" name="izin_usaha" options='SIUP,TKD,PKP,SIUM,Izin Usaha Industri' is_multiple="true" />

                <x-user.form-input label="Tahun Berdiri" name="tahun_berdiri" placeholder="Tahun Berdiri" type="date" />
                <x-user.form-input label="Produk Yang Dihasilkan" name="izin_usaha" placeholder="Produk Yang Dihasilkan" />
                <x-user.form-input label="Izin Produksi Tahun" name="izin_produksi" placeholder="Izin Produksi Tahun" />
                {{-- peer --}}
                <x-user.form-input label="Perlindungan Hak" name="izin_usaha" placeholder="Perlindungan Hak" />

                <x-user.form-select label="Legalitas Perizinan Usaha" name="bentuk_usaha" options='Halal,SNI' />
                <x-user.form-input label="Kapasitas Produksi Awal" name="kapasitas_produksi" placeholder="Kapasitas Produksi Awal" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
