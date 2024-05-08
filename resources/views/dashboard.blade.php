@extends('layout.app')

@section('style')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

<style>
.select2-container .select2-selection--single {
    height: 10%!important;
}

.form-control, .asColorPicker-input, .dataTables_wrapper select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type="text"], .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type="number"], .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead, .tt-query, .tt-hint{
    color: black!important
}

table.dataTable.display tbody tr:hover > .sorting_1, table.dataTable.order-column.hover tbody tr:hover > .sorting_1{
    background: white;
}
table.dataTable tbody th, table.dataTable tbody td{
    background: white;
}
table.dataTable.display tbody tr.odd > .sorting_1, table.dataTable.order-column.stripe tbody tr.odd > .sorting_1{
    background: white;
}
table.dataTable.display tbody{
    background: white;
}
td{
    background: white;
}

</style>
@endsection
@section('content')

<div class="content-wrapper p-4">
    
    @if(session('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('message') }}</strong>
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('error') }}</strong>
        </div>
    @endif
    <div class="page-header">
        <h3 class="page-title"> Verifikasi Data </h3>
      </div>
      <div class="row ">
          <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <table id="myDataTable1">
                    <thead>
                      <tr>
                        <th> Nama Lengkap </th>
                        <th> NIK </th>
                        <th> Alamat </th>
                        <th> No. HP </th>
                        <th> Email </th>
                        <th> Pengecekan </th>
                      </tr>
                    </thead>
                    <tbody>

                    </tbody>
                  </table>
                </div>
              </div>
              <div id="modal" class="modal">
                  <div class="modal-konten">
                      <table class="table">
                          <tr>
                              <th>Nama </th>
                              <td>: Erlangga</td>
                          </tr>
                          <tr>
                              <th>Jenis kelamin </th>
                              <td>: Laki-laki</td>
                          </tr>
                          <tr>
                              <th>Usia </th>
                              <td>: 22</td>
                          </tr>
                          <tr>
                              <th>NIK </th>
                              <td>: 1040329231</td>
                          </tr>
                          <tr>
                              <th>No. TPS </th>
                              <td>: 002</td>
                          </tr>
                          <tr>
                              <th>Desa/Kelurahan </th>
                              <td>: Tj Pati</td>
                          </tr>
                          <tr>
                              <th>Kecamatan </th>
                              <td>: Harau</td>
                          </tr>
                          <tr>
                              <th>Kabupaten </th>
                              <td>: Lima Puluh Kota</td>
                          </tr>
                      </table>
                      <div class="fotoKTP"><img src="../../assets/images/fotoKTP.png" alt="foto_ktp"></div>
                      <div class="approval">
                          <button type="button" class="btn btn-success btn-fw">Terima</button>
                  <button type="button" class="btn btn-danger btn-fw">Tolak</button>
                      </div>
                    
                    <span id="tutup-modal" class="tutup-modal">&times;</span>
                  </div>
                </div>
                
            </div>
          </div>
        </div>
</div>



<div class="content-wrapper p-4">
    
    <div class="page-header">
        <h3 class="page-title"> Data UMKM </h3>
      </div>
        <div class="row ">
          <div class="col-12 grid-margin">
            <div class="card">
                <div class="row ">
                  <div class="col-12 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <div class="table-responsive">
                            <table id="myDataTable2" style="width:100%">
                              <thead>
                                  <tr>
                                        <th> Nama Lengkap </th>
                                        <th> NIK </th>
                                        <th> Alamat </th>
                                        <th> No. HP </th>
                                        <th> Email </th>
                                        <th> Status</th>
                                  </tr>
                              </thead>
                              {{-- <div class="badge badge-outline-success">Approved</div> --}}
                              {{-- <div class="badge badge-outline-danger">Rejected</div> --}}
                              {{-- <div class="badge badge-outline-warning">Pending</div> --}}

                              <tbody>
                                  
                                  
                              </tbody>
                              
                          </table>
                        </div>
                    </div>
                  </div>
                </div>
                </div>
            </div>
          </div>
</div>



@endsection
@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

<script>
$(document).ready(function() {
    $('.select2').select2();
    initDataTable('#myDataTable1');
    initDataTable('#myDataTable2');
    // Handle reject button click
    $('.reject-btn').click(function() {
                // Close the verification modal
                $(this).closest('.modal').modal('hide');
            });
});
 
function initDataTable(tableId) {
    $(tableId).DataTable({
        // DataTable initialization options
    });
}

 
</script>
@endsection

