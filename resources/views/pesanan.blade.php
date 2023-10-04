@extends('include.app')
@section('content')
    <div class="section-container contact-container">
        <div class="container">
            <center>
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <div class="section-container-spacer">
                            <h2 class="text-center">Form Pemesanan</h2>
                            <p class="text-center">Silahkan isi form dibawah ini untuk pemesanan online galon air</p>
                        </div>
                        <div class="card-container" id="app">
                            <div class="card card-shadow col-xs-8 col-xs-offset-1 col-md-16 col-md-offset-2 reveal">

                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger">{{ $error }}</div>
                                @endforeach

                                <form action="{{ route('pesanan.store') }}" method="post" class="reveal-content">
                                    @csrf
                                    <div class="row" v-show="!box">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select class="form-control" name="jenis">
                                                    @foreach ($data as $d)
                                                        <option value="{{ $d->jenis }}">{{ $d->jenis }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <input type="number" class="form-control" name="jumlah" v-model="jumlah"
                                                placeholder="Masukan Jumlah">


                                            <div class="form-group">
                                            </div>
                                            <button type="button" class="btn btn-primary"
                                                @click="lanjutkan(true)">Lanjutkan</button>
                                        </div>
                                    </div>

                                    <div class="row" v-show="box">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="form-control" type="name" name="nama"
                                                    placeholder="Nama Lengkap" value="{{ old('nama') }}">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="noHp"
                                                    placeholder="No HP Aktif" value="{{ old('noHp') }}">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" rows="2" name="alamat" placeholder="Tulis Alamat Lengkap">{{ old('alamat') }}</textarea>
                                            </div>
                                            <button type="button" class="btn btn-outline-dark"
                                                @click="lanjutkan(false)">kembali</button>
                                            <button type="submit" class="btn btn-primary">Submit Pesanan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-image col-xs-12" style="background-image: url('/assets/images/img-01.jpg')">
                            </div>
                        </div>
                    </div>
                </div>
            </center>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@3.3.4/dist/vue.global.min.js"></script>
    <script>
        const {
            createApp,
            ref
        } = Vue

        createApp({
            setup() {
                const box = ref(false);
                const jumlah = ref(0);

                const lanjutkan = (props) => {
                    if ((props && jumlah.value == 0) || (props && jumlah.value == '')) {
                        alert('jumlah masih kosong');
                    } else {
                        box.value = props;
                    }
                }

                return {
                    box,
                    jumlah,
                    lanjutkan
                }
            }
        }).mount('#app')
    </script>
@endsection
