<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
    <link rel="icon" type="image/x-icon" href="https://www.lokatani.id/logo192.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.1/css/buttons.dataTables.css"/>
    <style>
        .container {
            margin-top: 50px;
            max-width: 1100px;
        }
        .footer {
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #f8f9fa;
            color: black;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header bg-secondary text-white">
                <strong>Data User</strong>
            </div>
            <div class="card-body">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  + Add New
                </button>
        
                <!-- Modal Add -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Create User</h1>
                        <button type="button" class="btn-close close-btn" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class="alert alert-danger error" role="alert" style="display: none;">
                        </div>
                        <div class="alert alert-primary success" role="alert" style="display: none;">
                        </div>
                        <input class= "inputId" type="hidden" id ="inputId">
                        <div class="mb-3 row">
                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control inputName" id="inputName">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control inputEmail" id="inputEmail">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPhone" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control inputPhone" id="inputPhone">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="exampleFormControlAddress" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <textarea class="form-control inputAddress" id="exampleFormControlAddress" rows="3"></textarea>
                            </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="buttonSubmit">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal Edit-->
                <div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalEditLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalEditLabel">Edit User</h1>
                        <button type="button" class="btn-close close-btn" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class="alert alert-danger error-edit" role="alert" style="display: none;">
                        </div>
                        <div class="alert alert-primary success-edit" role="alert" style="display: none;">
                        </div>
                        <input type="hidden" id ="inputIdEdit">
                        <div class="mb-3 row">
                            <label for="inputNameEdit" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNameEdit">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputEmailEdit" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control-plaintext inputEmailEdit" id="inputEmailEdit">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPhoneEdit" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPhoneEdit">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="exampleFormControlAddressEdit" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="exampleFormControlAddressEdit" rows="3"></textarea>
                            </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="buttonEdit">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal Detail -->
                <div class="modal fade" id="exampleModalDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail User</h1>
                        <button type="button" class="btn-close close-btn" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <input class= "inputIdDetail" type="hidden" id ="inputIdDetail">
                        <div class="mb-3 row">
                            <label for="IdDetail" class="col-sm-2 col-form-label">ID</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control-plaintext IdDetail" id="IdDetail">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputNameDetail" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control-plaintext inputNameDetail" id="inputNameDetail">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputEmailDetail" class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control-plaintext inputEmailDetail" id="inputEmailDetail">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPhoneDetail" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control-plaintext inputPhoneDetail" id="inputPhoneDetail">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="exampleFormControlAddressDetail" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <textarea class="form-control-plaintext inputAddressDetail" id="exampleFormControlAddressDetail" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="createdat" class="col-sm-2 col-form-label">Created At</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control-plaintext createdat" id="createdat">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="updatedat" class="col-sm-2 col-form-label">Updated At</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control-plaintext updatedat" id="updatedat">
                            </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                            <button type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-warning" id="editdetail" data-bs-toggle="modal" data-bs-target="#exampleModalEdit">Edit</button>
                            <button type="button" class="btn btn-danger" id="deletedetail">Delete</button>
                      </div>
                    </div>
                  </div>
                </div>
                <table id="tableusers" class="table table-striped" style="width:100%;">
                    <thead>
                        <tr>
                            <th style="text-align:center;">ID</th>
                            <th style="text-align:center;">Name</th>
                            <th style="text-align:center;">E-Mail</th>
                            <th style="text-align:center;">Phone</th>
                            <th style="text-align:center;">Created At</th>
                            <th style="text-align:center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user) : ?>
                            <tr style="text-align:center;">
                                <td><?= $user['ID'] ?></td>
                                <td><?= $user['name'] ?></td>
                                <td><?= $user['email'] ?></td>
                                <td><?= $user['phone'] ?></td>
                                <td><?= date('d F Y H:i:s', strtotime($user['created_at'])) ?></td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalDetail" onclick="read(<?php echo $user['ID'] ?>)">View</button>
                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalEdit" onclick="edit(<?php echo $user['ID'] ?>)">Edit</button>
                                    <button type="button" class="btn btn-danger btn-sm" onclick="deletedata(<?php echo $user['ID'] ?>)">Delete</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="footer">
            <p>Made with ❤️ by <b><a href="https://www.linkedin.com/in/achmadardanip/" target="_blank" style="text-decoration: none;">Achmad Ardani Prasha</a></b> for <b><a target="_blank" style="color: #455b30; text-decoration:none;" href="https://www.lokatani.id/">Lokatani</a></b></p>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.1/js/dataTables.buttons.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.print.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    // $(document).ready(function() {
        function clean(){
            $('.inputId').val('');
            $('.inputName').val('');
            $('.inputEmail').val('');
            $('.inputPhone').val('');
            $('.inputAddress').val('');
        }
        function edit($id) {
            $.ajax({
                url: "<?php echo site_url('user/get_by_id') ?>/"+$id,
                type: "GET",
                success: function(result) {
                    var $obj = $.parseJSON(result);
                    if($obj.ID != ''){
                        $('#inputIdEdit').val($obj.ID);
                        $('#inputNameEdit').val($obj.name);
                        $('#inputEmailEdit').val($obj.email);
                        $('#inputPhoneEdit').val($obj.phone);
                        $('#exampleFormControlAddressEdit').val($obj.address);
                    }
                }
            });
        }
        function read($id) {
            $.ajax({
                url: "<?php echo site_url('user/get_by_id') ?>/"+$id,
                type: "GET",
                success: function(result) {
                    var $obj = $.parseJSON(result);
                    if($obj.ID != ''){
                        $('#inputIdDetail, .IdDetail').val($obj.ID).attr('readonly', true);
                        $('#inputNameDetail').val($obj.name).attr('readonly', true);
                        $('#inputEmailDetail').val($obj.email).attr('readonly', true);
                        $('#inputPhoneDetail').val($obj.phone).attr('readonly', true);
                        $('#exampleFormControlAddressDetail').val($obj.address).attr('readonly', true);
                        $('#createdat').val($obj.created_at).attr('readonly', true);
                        if($obj.updated_at == null || $obj.updated_at == '01 January 1970 07:00:00'){
                            $obj.updated_at = "Not Updated Yet";
                        }
                        $('#updatedat').val($obj.updated_at).attr('readonly', true);
                        $('#editdetail').attr('onclick', 'edit(' + $obj.ID + ')');
                        $('#deletedetail').attr('onclick', 'deletedata(' + $obj.ID + ')');
                    }
                }
            });
        }
        function deletedata($id){
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this data!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: "<?php echo site_url('user/delete') ?>/"+$id,
                        type: "POST",
                        success: function(result) {
                            swal({
                                title: "Success!",
                                text: "Successfully delete user data",
                                icon: "success",
                                button: "OK",
                            }).then(function() {
                                location.reload();
                            });
                        },
                        error: function(result) {
                            swal({
                                title: "Error!",
                                text: "Failed to delete user data",
                                icon: "error",
                                button: "OK",
                            }).then(function() {
                                location.reload();
                            });
                        }
                    });
                }
            });
        }
        $(document).click(function(event) {
            if(!$(event.target).closest('.modal').length) {
                clean();
                $('.alert').hide();

            }
        });
        $('.close-btn').on('click', function() {
            if($('.success').is(':visible')) {
                window.location.href="<?php echo current_url()."?".$_SERVER['QUERY_STRING'] ?>";
            }
            clean();
            $('.alert').hide();
        });
        new DataTable('#tableusers', {
            layout: {
                topStart: {
                    buttons: [
                        {
                            extend: 'pageLength',
                            text: 'Show Entries',
                        },
                        {
                            extend: 'copy',
                            exportOptions: {
                                columns: ':not(:nth-child(6))'
                            }
                        },
                        {
                            extend: 'csv',
                            exportOptions: {
                                columns: ':not(:nth-child(6))'
                            }
                        },
                        {
                            extend: 'excel',
                            exportOptions: {
                                columns: ':not(:nth-child(6))'
                            }
                        },
                        {
                            extend: 'pdf',
                            exportOptions: {
                                columns: ':not(:nth-child(6))'
                            }
                        },
                        {
                            extend: 'print',
                            exportOptions: {
                                columns: ':not(:nth-child(6))'
                            }
                        }
                    ]
                }
            },
        });
        $('#buttonSubmit').on('click', function() {
            var id = $('#inputId').val();
            var name = $('#inputName').val();
            var email = $('#inputEmail').val();
            var phone = $('#inputPhone').val();
            var address = $('#exampleFormControlAddress').val();
            $.ajax({
                url: "<?php echo site_url('user/create') ?>",
                type: "POST",
                data: {
                    id: id,
                    name: name,
                    email: email,
                    phone: phone,
                    address: address
                },
                success: function(result) {
                    var $obj = $.parseJSON(result);
                    if($obj.success == false) {
                        $('.error').show();
                        $('.success').hide();
                        $('.error').html($obj.error);
                    } else {
                        swal({
                            title: "Success!",
                            text: "Successfully add new user",
                            icon: "success",
                            button: "OK",
                        }).then(function() {
                            location.reload();
                            clean();
                        });
                    }
                }
            });
        });
        $('#buttonEdit').on('click', function() {
            var id = $('#inputIdEdit').val();
            var name = $('#inputNameEdit').val();
            var phone = $('#inputPhoneEdit').val();
            var address = $('#exampleFormControlAddressEdit').val();
            $.ajax({
                url: "<?php echo site_url('user/submitedit') ?>",
                type: "POST",
                data: {
                    id: id,
                    name: name,
                    phone: phone,
                    address: address
                },
                success: function(result) {
                    var $obj = $.parseJSON(result);
                    if($obj.success == false) {
                        $('.error-edit').show();
                        $('.success-edit').hide();
                        $('.error-edit').html($obj.error);
                    } else {
                        swal({
                            title: "Success!",
                            text: "Successfully edit user data",
                            icon: "success",
                            button: "OK",
                        }).then(function() {
                            location.reload();
                            clean();
                        });

                    }
                }
            });
        });
    // });
</script>
</html>