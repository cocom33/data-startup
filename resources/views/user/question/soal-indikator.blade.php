@extends('user.includes.app-detail');

@section('title', 'Dashboard')
@section('subtitle', 'Soal Indikator')

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

            <div class="row">
                <div>{{ $indikator }}</div>
                @foreach ($subindikator->where('indicator_id', $indikator->id) as $item)
                    <div>tes {{ $item->sub_indicator }}</div>
                @endforeach
                <h5></h5>
                <div class="col-12 col-lg-6 mb-3">
                    <p class="mb-3">soal 1</p>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">
                        Tidak memiliki keunikan khusus, banyak produk yang sama di pasar
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        Memiliki keunikan khusus, terdapat banyak produk yang sama di pasar
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                      <label class="form-check-label" for="flexRadioDefault3">
                        Memiliki keunikan khusus, tidak banyak produk yang sama di pasar
                      </label>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <p class="mb-3">soal 2</p>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">
                        Tidak memiliki keunikan khusus, banyak produk yang sama di pasar
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        Memiliki keunikan khusus, terdapat banyak produk yang sama di pasar
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                      <label class="form-check-label" for="flexRadioDefault3">
                        Memiliki keunikan khusus, tidak banyak produk yang sama di pasar
                      </label>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
