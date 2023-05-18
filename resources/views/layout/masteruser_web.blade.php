@extends('app.head')
@section('title')
    Master User Web
@endsection
@section('pageheading')
    Master User Web
@endsection
@section('masteruser')
    active
@endsection

@section('konten')
    <div class="page-content">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="d-flex justify-content-end">
                        <a href="#" class="btn icon btn-success" data-bs-toggle="modal" data-bs-target="#tambahModal"><i
                                class="bi bi-plus-lg"></i></a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>Kode User</th>
                                <th>Nama</th>
                                <th>Unit Induk</th>
                                <th>UP3</th>
                                <th>ULP</th>
                                <th>Username</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($crudweb as $item)
                                <tr>
                                    <td>
                                        {{ $item->kode_user }}
                                    </td>
                                    <td>
                                        {{ $item->nama }}
                                    </td>
                                    <td>
                                        {{ $item->unit_induk }}
                                    </td>
                                    <td>
                                        {{ $item->up3 }}
                                    </td>
                                    <td>
                                        {{ $item->ulp }}
                                    </td>
                                    <td>
                                        {{ $item->username }}
                                    </td>
                                    <td>
                                        {{ $item->role }}
                                    </td>
                                    <td>
                                        <button class="btn icon btn-warning" data-bs-toggle="modal" data-bs-target="#editModal" onclick="editData({{$item}})">
                                            <i class="bi bi-pencil-fill"></i>
                                        </button>
                                        <button class="btn icon btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal" >
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- modal tambah --}}
        <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalTitle" style="display: none;"
            aria-modal="true" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahModalTitle">Tambah User</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form form-horizontal" action="/masteruser-web/store" method="POST"
                            enctype="multipart/form-data" data-parsley-validate>
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <label for="nama" class="col-lg-3 col-3 col-form-label">
                                                <h6>Nama</h6>
                                            </label>
                                            <div class="col-lg-8 col-8">
                                                <input type="text" id="nama" class="form-control" placeholder=""
                                                    name="nama" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <label class="col-lg-3 col-3 col-form-label">
                                                <h6>Unit Induk</h6>
                                            </label>
                                            <div class="col-lg-8 col-8">
                                                <input type="text" id="unitinduk" class="form-control" placeholder=""
                                                    name="unit_induk" value="Kalimantan Barat" readonly required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <label class="col-lg-3 col-3 col-form-label">
                                                <h6>UP3</h6>
                                            </label>
                                            <div class="col-lg-8 col-8">
                                                <input type="text" class="form-control" id="up3" placeholder=""
                                                    value="Pontianak" name="up3" readonly required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <label class="col-lg-3 col-3 col-form-label">
                                                <h6>ULP</h6>
                                            </label>
                                            <div class="col-lg-8 col-8">
                                                <input type="text" class="form-control" id="ulp" placeholder=""
                                                    value="Menpawah" name="ulp" readonly required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <label class="col-lg-3 col-3 col-form-label">
                                                <h6>Username</h6>
                                            </label>
                                            <div class="col-lg-8 col-8">
                                                <input type="text" class="form-control" id="username" placeholder=""
                                                    name="username" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <label class="col-lg-3 col-3 col-form-label">
                                                <h6>Password</h6>
                                            </label>
                                            <div class="col-lg-8 col-8">
                                                <input type="password" class="form-control" id="password"
                                                    placeholder="" name="password" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <label class="col-lg-3 col-3 col-form-label">
                                                <h6>Role</h6>
                                            </label>
                                            <div class="col-lg-8 col-8">
                                                <input type="text" class="form-control" id="role" placeholder=""
                                                    name="role" value="admin" readonly required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Close</span>
                                </button>
                                <button type="submit" class="btn btn-primary ml-1" id="btn_upload">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Tambah</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        {{-- modal edit --}}
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalTitle" style="display: none;"
            aria-modal="true" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalTitle">Edit User</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form form-horizontal" action="/masteruser-web/update" method="POST"
                            enctype="multipart/form-data" data-parsley-validate>
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <div class="col-lg-8 col-8">
                                                <input type="hidden" id="kodeuser" class="form-control" placeholder=""
                                                    name="kodeuser" value="{{old('kodeuser')}}" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <label for="nama" class="col-lg-3 col-3 col-form-label">
                                                <h6>Nama</h6>
                                            </label>
                                            <div class="col-lg-8 col-8">
                                                <input type="text" id="nama_edit" class="form-control" placeholder=""
                                                    name="nama" value="{{old('nama')}}" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <label class="col-lg-3 col-3 col-form-label">
                                                <h6>Unit Induk</h6>
                                            </label>
                                            <div class="col-lg-8 col-8">
                                                <input type="text" id="unitinduk" class="form-control" placeholder=""
                                                    name="unit_induk" value="Kalimantan Barat" readonly required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <label class="col-lg-3 col-3 col-form-label">
                                                <h6>UP3</h6>
                                            </label>
                                            <div class="col-lg-8 col-8">
                                                <input type="text" class="form-control" id="up3" placeholder=""
                                                    value="Pontianak" name="up3" readonly required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <label class="col-lg-3 col-3 col-form-label">
                                                <h6>ULP</h6>
                                            </label>
                                            <div class="col-lg-8 col-8">
                                                <input type="text" class="form-control" id="ulp" placeholder=""
                                                    value="Menpawah" name="ulp" readonly required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <label class="col-lg-3 col-3 col-form-label">
                                                <h6>Username</h6>
                                            </label>
                                            <div class="col-lg-8 col-8">
                                                <input type="text" class="form-control" id="username_edit" placeholder=""
                                                    name="username" value="{{old('username')}}" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <label class="col-lg-3 col-3 col-form-label">
                                                <h6>Password</h6>
                                            </label>
                                            <div class="col-lg-8 col-8">
                                                <input type="password" class="form-control" id="password_edit"
                                                    placeholder="" name="password" value="{{old('password')}}" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <label class="col-lg-3 col-3 col-form-label">
                                                <h6>Role</h6>
                                            </label>
                                            <div class="col-lg-8 col-8">
                                                <input type="text" class="form-control" id="role" placeholder=""
                                                    name="role" value="admin" readonly required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Close</span>
                                </button>
                                <button type="submit" class="btn btn-primary ml-1" id="btn_upload">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Edit</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- modal hapus --}}
        <div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="hapusModalTitle" style="display: none;"
            aria-modal="true" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-md"
                role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="hapusModalTitle">
                            Hapus Data
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Apakah anda yakin akan menghapus data ini??
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <a href="/masteruser-mbl/destroy/{{count($crudweb)==0 ? '' : $item->kode_user}}">
                            <button type="button" class="btn btn-danger ml-1" data-bs-dismiss="modal" >
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">hapus</span>
                            </button>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

<script>
    function editData(item) {
        console.log(item);
    // $(".label-error-update").addClass("hidden");
    $("#kodeuser").val(item.kode_user);
    $("#nama_edit").val(item.nama);
    $("#username_edit").val(item.username);
    $("#password_edit").val(item.password);

    // Open the edit modal
    $("#editModal").modal("show");

    console.log(item);
}
// const hapusData = (url) => {
//     Swal.fire({
//         title: "Hapus Data",
//         text: "Apakah anda yakin ingin menghapus data?",
//         icon: "warning",
//         showCancelButton: true,
//         confirmButtonColor: "#3085d6",
//         cancelButtonText: "Tidak",
//         cancelButtonColor: "#d33",
//         confirmButtonText: "Ya",
//     }).then((result) => {
//         if (result.isConfirmed) {
//             location.href = window.location.origin + url;
//         }
//     });
// };

</script>
