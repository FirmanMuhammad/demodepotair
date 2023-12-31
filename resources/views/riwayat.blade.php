@extends('include.app')
@section('content')
    <div class="section-container contact-container">
        <div class="container">
            <!-- <center> -->
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="section-container-spacer">
                        <h1 class="text-center">Riwayat Pemesanan</h1>
                    </div>
                    <div class="card-container" id="app">
                        <div class="card card-shadow col-xs-10 col-xs-offset-1 col-md-16 col-md-offset-1 reveal">
                            <div class="statusRiwayat">
                                <span class="status"><span class="kotak" style="background: blue"></span>Dikirm</span>
                                <span class="status"><span class="kotak" style="background: green"></span>Selesai</span>
                            </div>
                            <table class="table table-hover">
                                <thead>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Alamat </th>
                                    <th>No Hp</th>
                                    <th>Pembelian</th>
                                    <th>Jumlah</th>
                                    <th>Tagihan</th>
                                    <th>status</th>
                                    <th>tanggal</th>
                                </thead>
                                <tbody>
                                    @php
                                        $n = 1;
                                    @endphp
                                    @foreach ($data as $d)
                                        <tr>
                                            <td>{{ $n++ }}</td>
                                            <td>{{ $d->user->name }}</td>
                                            <td>{{ $d->user->alamat }}</td>
                                            <td>{{ $d->user->hp }}</td>
                                            <td>{{ $d->jenis }}</td>
                                            <td>{{ $d->jumlah }}</td>
                                            <td>{{ $d->harga }}</td>
                                            <td>
                                                <label class="switch">
                                                    <input type="checkbox" {{ $d->status == 'selesai' ? 'checked' : '' }}
                                                        @change="handleStatus($event, {{ $d->id_penjualan }})">
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>
                                            <td>{{ \Carbon\Carbon::parse($d->tgl_penjualan)->isoFormat('DD MMM YYYY') }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <a href="{{ route('riwayat.pdf') }}" target="_blank" class="btn btn-primary">cetak</a>


                        </div>
                        {{-- <div class="card-image col-xs-12"
                            style="background-image: url('{{ asset(`front/assets/images/img-01.jpg`) }}')">
                        </div> --}}
                    </div>
                </div>
            </div>
            <!-- </center> -->
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/vue@3.3.4/dist/vue.global.min.js"></script>
    <script>
        const {
            createApp,
            ref,
            computed
        } = Vue

        createApp({
            setup() {
                const handleStatus = (e, id) => {
                    const label = e.target.checked;

                    const updateData = async () => {
                        try {
                            const req = await fetch(`{{ url('/riwayat/${label}/${id}') }}`);
                            const res = await req.json();

                            alert('Status berhasil diperbarui');

                        } catch (error) {
                            console.log(error);
                            alert('Terjadi kesalahan, cobalah kembali');

                        }

                    }

                    updateData();
                }

                return {
                    status,
                    handleStatus
                }
            }
        }).mount('#app')
    </script>
@endsection
