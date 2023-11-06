@extends('admin.layout.appadmin')
@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>nama</th>
                                            <th>warna</th>
                                            <th>no polsi</th>
                                            <th>jumlah kursi</th>
                                            <th>tahun beli</th>
                                        </tr>
                                    </thead>

                                    <tfoot>
                                        <tr>
                                            <th>nama</th>
                                            <th>warna</th>
                                            <th>no polsi</th>
                                            <th>jumlah kursi</th>
                                            <th>tahun beli</th>
                                        </tr>
                                    </tfoot>

                                    <tbody>
                                        @foreach ($tbl_mobil as $k)
                                        <tr>
                                            <td>{{$k->nama}}</td>
                                            <td>{{$k->warna}}</td>
                                            <td>{{$k->no_polisi}}</td>
                                            <td>{{$k->jumlah_kursi}}</td>
                                            <td>{{$k->tahun_beli}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                  
                                </table>
                            </div>
                        </div>


@endsection