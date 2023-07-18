@extends('kerangka.main-login')

@section('content')
    <div class="content-wrapper">
        <div class="container">
            <section id="pricing" class="section-bg">
                <div class="container">
                    <div class="section-title" data-aos="fade-up">
                        <h2>HIMTI</h2>
                        <p>Struktural Periode 2020/2021</p>
                    </div>
                    <div class="align-items-lg-center">
                        <img src="assets/images/struktural.png" alt="" class="img-fluid">
                    </div>
                </div>
            </section>
            <section id="pricing" class="section-bg mt-5">
                <div class="container">
                    <div class="section-title" data-aos="fade-up">
                        <h2>HIMTI</h2>
                        <p>Data Anggota</p>
                    </div>
                    <div class="pull-right">
                        Angkatan :
                        <select>
                            <option value="2011">2011</option>
                            <option value="2011">2012</option>
                            <option value="2011">2013</option>
                            <option value="2011">2014</option>
                            <option value="2011">2015</option>
                            <option value="2011">2016</option>
                            <option value="2011">2017</option>
                            <option value="2011">2018</option>
                            <option value="2011">2019</option>
                            <option value="2011">2020</option>
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
                                    <th>Nama Lengkap</th>
                                    <th>Nomor Induk Mahasiswa</th>
                                    <th>No Telepon</th>
                                    <th>Alamat Rumah</th>
                                    <th>Alamat Kerja</th>
                                </tr>
                                <tr>
                                    <td>Andi</td>
                                    <td>1155201102</td>
                                    <td>08881488721</td>
                                    <td>Cipondoh Makmur</td>
                                    <td>Gojek, Jakarta Selatan</td>
                                </tr>
                                <tr>
                                    <td>Andi Wijaya</td>
                                    <td>1155201101</td>
                                    <td>08881488721</td>
                                    <td>Batu Ceper, Deket St.Poris</td>
                                    <td>Google Indonesia</td>
                                </tr>
                                <tr>
                                    <td>Ahmad Sobari</td>
                                    <td>1355201102</td>
                                    <td>08881488721</td>
                                    <td>Jatiuwung</td>
                                    <td>Gojek, Jakarta Selatan</td>
                                </tr>
                                <tr>
                                    <td>Muhammad Rizal</td>
                                    <td>1355201102</td>
                                    <td>08881488721</td>
                                    <td>Jalan Sumur Pancing</td>
                                    <td>BRI, Jakarta Barat</td>
                                </tr>
                                <tr>
                                    <td>Ahmad Fauzan</td>
                                    <td>1455201102</td>
                                    <td>08881488721</td>
                                    <td>Cimone Jaya</td>
                                    <td>MNCTV, Jakarta Barat</td>
                                </tr>
                                <tr>
                                    <td>Rajif Mahendra</td>
                                    <td>155201102</td>
                                    <td>08881488721</td>
                                    <td>Cipondoh Jaya</td>
                                    <td>EduTech, Tangerang</td>
                                </tr>
                                <tr>
                                    <td>Viky Yahya</td>
                                    <td>1555201102</td>
                                    <td>08881488721</td>
                                    <td>Pasar Kemis</td>
                                    <td>MNCTV, Jakarta Barat</td>
                                </tr>
                                <tr>
                                    <td>Ahmad Rifandi</td>
                                    <td>1655201102</td>
                                    <td>08881488721</td>
                                    <td>Pondok Bahar</td>
                                    <td>Fidi IT Kreatif, Tangerang</td>
                                </tr>
                                <tr>
                                    <td>Rangga Cikal Senopati</td>
                                    <td>1655201102</td>
                                    <td>08881488721</td>
                                    <td>Kotabumi</td>
                                    <td>Google, Jakarta Barat</td>
                                </tr>
                                <tr>
                                    <td>Endi Julian</td>
                                    <td>1655201102</td>
                                    <td>08881488721</td>
                                    <td>Bekasi Jaya</td>
                                    <td>Pintro, Bekasi Timur</td>
                                </tr>
                                <tr>
                                    <td>Adi Winarno</td>
                                    <td>1755201102</td>
                                    <td>08881488721</td>
                                    <td>Rajeg Rajawali</td>
                                    <td>Google, London</td>
                                </tr>
                                <tr>
                                    <td>Fitri Lestari</td>
                                    <td>1755201102</td>
                                    <td>08881488721</td>
                                    <td>Rajeg Sukatani</td>
                                    <td>Gojek, Jakarta Barat</td>
                                </tr>
                                <tr>
                                    <td>Arief Al Rosyid</td>
                                    <td>1755201102</td>
                                    <td>08881488721</td>
                                    <td>Pinangan Jaya</td>
                                    <td>Google, London</td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            @endsection
