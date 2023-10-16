<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/cdn/bootstrap4.0.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/home.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <style>
        .input-group-prepend{
            background-color: #d3d1d1;
        }
        .form-controll{
            width: 80%;
        }
    </style>
</head>

<body>
    <section>
        <h3>Admin Panel</h3>
        <div class="card-lg">
            <!-- Tabs navs -->
            <ul class="nav nav-tabs nav-justified mb-3" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="ex3-tab-1" data-mdb-toggle="tab" href="#users" role="tab" aria-controls="users" aria-selected="true">Users</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex3-tab-2" data-mdb-toggle="tab" href="#Folder" role="tab" aria-controls="Folder" aria-selected="false">Folder</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex3-tab-3" data-mdb-toggle="tab" href="#ex3-tabs-3" role="tab" aria-controls="ex3-tabs-3" aria-selected="false">Another link</a>
                </li>
            </ul>
            <!-- Tabs navs -->

            <!-- Tabs content -->
            <div class="tab-content" id="ex2-content">
                <div class="tab-pane fade show active" id="users" role="tabpanel" aria-labelledby="ex3-tab-1">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Add user</button>
                    <br>
                    <table class="table" >
                        <thead>
                            <th>First Name</th>
                            <th>Middel Name</th>
                            <th>Last Name</th>
                            <th  class="edit-exemption">Address</th>
                            <th>Section</th>
                            <th>Email</th>
                            <th class="edit-exemption">Contact</th>
                            <th  class="edit-exemption">Role</th>
                            <th>Grade</th>
                            <th class="edit-exemption">Create Date</th>
                            <th class="edit-exemption">Updated Date</th>
                            <th>Action</th>
                        </thead>
                        <tbody id="user_data">
                            <span></span>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="Folder" role="tabpanel" aria-labelledby="ex3-tab-2">
                    Folder
                </div>
                <div class="tab-pane fade" id="ex3-tabs-3" role="tabpanel" aria-labelledby="ex3-tab-3">
                    Tab 3 content
                </div>

                <!-- Button trigger modal -->
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="">
                            <div class="modal-body">
                    
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">First Name</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Enter First Name">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Middel Name</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Enter Middel Name  (Optional)">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Last Name</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Enter Last Name">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Address</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Enter Address">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Enter Email">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"></span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Enter First Name">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Add</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tabs content -->
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" type="text/javascript"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        var base_url = '<?= base_url() ?>'
        $(document).ready(function(){

            $('.table').DataTable()
        })
        $(window).on('load', function() {

            
            $.ajax({
                type: "POST",
                url: `${base_url}load-users`,
                data: {
                    confirm: 1
                },
                dataType: 'json',
                success: function(data) {

                    var td = '';
                    $.each(data.result, function(k, v) {

                        td += `
                        <tr>
                            <td><span class="display-value-${v.id}">${v.fname}</span><span class="input-value-${v.id}" style="display:none"><input type="text" class="form-controll" value="${v.fname}"></span></td>
                            <td><span class="display-value-${v.id}">${v.mname}</span><span class="input-value-${v.id}" style="display:none"><input type="text" class="form-controll" value="${v.mname}"></span></td>
                            <td><span class="display-value-${v.id}">${v.lname}</span><span class="input-value-${v.id}" style="display:none"><input type="text" class="form-controll" value="${v.lname}"></span></td>
                            <td class="edit-exemption"><span class="display-value-${v.id}">${v.main_address}</span><span class="input-value-${v.id}" style="display:none"><input type="text" class="form-controll" value="${v.main_address}"></span></td>
                            <td><span class="display-value-${v.id}">${v.main_section}</span><span class="input-value-${v.id}" style="display:none"><input type="text" class="form-controll" value="${v.main_section}"></span></td>
                            <td><span class="display-value-${v.id}">${v.email}</span><span class="input-value-${v.id}" style="display:none"><textarea type="text" class="form-controll" value="">${v.email}</textarea></span></td>
                            <td class="edit-exemption"><span class="display-value-${v.id}">${v.contact}</span><span class="input-value-${v.id}" style="display:none"><input type="text" class="form-controll" value="${v.contact}"></span></td>
                            <td  class="edit-exemption"><span class="display-value-${v.id}">${v.role}</span><span class="input-value-${v.id}" style="display:none"><input type="text" class="form-controll" value="${v.role}"></span></td>
                            <td><span class="display-value-${v.id}">${v.grade}</span><span class="input-value-${v.id}" style="display:none"><input type="text" class="form-controll" value="${v.grade}"></span></td>
                            <td class="edit-exemption"><span class="display-value-${v.id}">${v.CreatedDate}</span><span class="input-value-${v.id}" style="display:none"><input type="text" class="form-controll" value="${v.CreatedDate}"></span></td>
                            <td class="edit-exemption"><span class="display-value-${v.id}">${v.UpdatedDate}</span><span class="input-value-${v.id}" style="display:none"><input type="text" class="form-controll" value="${v.UpdatedDate}"></span></td>
                            <td> <a href="#" type="button" class="btn btn-primary edit-row" data-id="${v.id}"> edit </td>
                        </tr>
                        `;
                        $('#user_data').html(td);
                        $('.edit-row').on('click', function() {
                            var id = $(this).data('id');
                            $('.display-value-' + id).hide();
                            $('.edit-exemption').hide();
                            $('.input-value-' + id).show();

                        })
                    })
                }
            });

        })
        $(document).ready(function() {


        })
    </script>
</body>

</html>