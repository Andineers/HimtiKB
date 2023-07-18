@extends('kerangka.main-login')

@section('content')
    <div class="content-wrapper">
        <div class="container">
            <section id="pricing" class="section-bg">
                <div class="container">
                    <div class="section-title" data-aos="fade-up">
                        <h2>HIMTI</h2>
                        <p>Data Peserta</p>
                    </div>
                    <div class="pull-right">
                        Acara :
                        <select>
                            <option value="semnas">SEMINAR NASIONAL</option>
                            <option value="workshop">WORKSHOP</option>
                            <option value="kunjus">KUNJUNGAN INDUSTRI</option>
                        </select>
                        <div class="search mb-3">
                            <form>
                                <input class="search" type="text" placeholder="Cari..." required>
                                <input class="button" type="button" value="Cari">
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Nama Acara</th>
                                    <th>Nama Lengkap</th>
                                    <th>No Telepon</th>
                                    <th>Asal Kampus</th>
                                    <th>Jurusan</th>
                                </tr>
                                <tr>
                                    <td>SEMINAR NASIONAL</td>
                                    <td>Adi Winarno</td>
                                    <td>08881488721</td>
                                    <td>Universitas Muhammadiyah Tangerang</td>
                                    <td>Teknik Informatika</td>
                                </tr>
                                <tr>
                                    <td>SEMINAR NASIONAL</td>
                                    <td>Fitri Lestari</td>
                                    <td>08881488721</td>
                                    <td>Universitas Muhammadiyah Malang</td>
                                    <td>Teknik Informatika</td>
                                </tr>
                                <tr>
                                    <td>SEMINAR NASIONAL</td>
                                    <td>Yazid Daulay</td>
                                    <td>08881488721</td>
                                    <td>Universitas Raharja</td>
                                    <td>Ekonomi Bisnis</td>
                                </tr>
                                <tr>
                                    <td>SEMINAR NASIONAL</td>
                                    <td>Adi Winarno</td>
                                    <td>08881488721</td>
                                    <td>Universitas Muhammadiyah Tangerang</td>
                                    <td>Teknik Informatika</td>
                                </tr>
                                <tr>
                                    <td>SEMINAR NASIONAL</td>
                                    <td>Fitri Lestari</td>
                                    <td>08881488721</td>
                                    <td>Universitas Muhammadiyah Malang</td>
                                    <td>Teknik Informatika</td>
                                </tr>
                                <tr>
                                    <td>SEMINAR NASIONAL</td>
                                    <td>Yazid Daulay</td>
                                    <td>08881488721</td>
                                    <td>Universitas Raharja</td>
                                    <td>Ekonomi Bisnis</td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </section>
        @endsection
