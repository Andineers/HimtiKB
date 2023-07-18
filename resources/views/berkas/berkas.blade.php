@extends('kerangka.main-login')

@section('content')
    <div class="content-wrapper">
        <div class="container">
            <section id="pricing" class="section-bg">
                <div class="container">
                    <div class="section-title" data-aos="fade-up">
                        <h2>HIMTI</h2>
                        <p>Kesekretariatan</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="box wow fadeInLeft">
                                <h5>COP HIMTI</h5>
                                <a href="#" class="get-started-btn">Download</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="box featured wow fadeInUp">
                                <h5>Form Sharing Mingguan</h5>
                                <a href="#" class="get-started-btn">Download</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="box wow fadeInRight">
                                <h5>Surat Peminjaman Aula</h5>
                                <a href="#" class="get-started-btn">Download</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="box wow fadeInLeft">
                                <h5>Surat Peminjaman Peralatan</h5>
                                <a href="#" class="get-started-btn">Download</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="box wow fadeInUp">
                                <h5>Surat Dispen Kerja</h5>
                                <a href="#" class="get-started-btn">Download</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="box wow fadeInRight">
                                <h5>Surat Izin Dosen</h5>
                                <a href="#" class="get-started-btn">Download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="pricing" class="section-bg mt-5">
                <div class="container">
                    <div class="section-title" data-aos="fade-up">
                        <h2>HIMTI</h2>
                        <p>Dokumentasi</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="box featured wow fadeInLeft">
                                <h5>LPJ 2014</h5>
                                <a href="#" class="get-started-btn">Download</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="box wow fadeInUp">
                                <h5>LPJ 2015</h5>
                                <a href="#" class="get-started-btn">Download</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="box wow fadeInRight">
                                <h5>LPJ 2016</h5>
                                <a href="#" class="get-started-btn">Download</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="box wow fadeInLeft">
                                <h5>LPJ 2017</h5>
                                <a href="#" class="get-started-btn">Download</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="box wow fadeInUp">
                                <h5>LPJ 2018</h5>
                                <a href="#" class="get-started-btn">Download</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="box wow fadeInRight">
                                <h5>LPJ 2019</h5>
                                <a href="#" class="get-started-btn">Download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="pricing" class="section-bg mt-5">
                <div class="container">
                    <div class="section-title" data-aos="fade-up">
                        <h2>HIMTI</h2>
                        <p>Rincian KAS</p>
                    </div>
                    <div class="pull-right">
                        Periode :
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
                                    <th>NO</th>
                                    <th>Uraian</th>
                                    <th>Jumlah</th>
                                    <th>Satuan</th>
                                    <th>Harga</th>
                                    <th>Total</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Printer</td>
                                    <td>1</td>
                                    <td>Buah</td>
                                    <td>Rp. 300.000,00</td>
                                    <td>Rp. 300.000,00</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Nasi kotak untuk tamu</td>
                                    <td>20</td>
                                    <td>Kotak</td>
                                    <td>Rp. 200.000,00</td>
                                    <td>Rp. 200.000,00</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Kipas Angin</td>
                                    <td>3</td>
                                    <td>Buah</td>
                                    <td>Rp. 150.000,00</td>
                                    <td>Rp. 150.000,00</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        @endsection
