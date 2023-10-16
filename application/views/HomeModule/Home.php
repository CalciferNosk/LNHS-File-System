<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="assets/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>File System</title>
    
    <link rel="stylesheet" href="<?= base_url() ?>assets/cdn/bootstrap4.0.min.css">
    <!-- <link rel="stylesheet" href="<?= base_url() ?>assets/cdn/font-awesome.min.css"> -->
   <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/home.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <style>
        #myiframe {
            width: 600px;
            height: 100%;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>File System</h3>
                <strong>FS</strong>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="#" class="active" data-show="home">
                        <i class="fa-solid fa-house"></i>
                        Home
                    </a>

                </li>
                <li>
                    <a href="#" class="active click_quiz" data-show="quiz" data-session="<?= isset($_SESSION['username']) ? 1 : 0 ?>">
                        <i class="fa-solid fa-pen"></i>
                        Quiz
                    </a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="fa-solid fa-folder"></i>
                        Files
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <?php foreach ($folders as $key => $f) : ?>
                            <li><a href="#" class="active get-data" data-show="subject" data-subject="<?= $f['FolderName'] ?>"><?= $f['FolderName'] ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li>
                    <a href="#" class="active" data-show="Portfolio">
                        <i class="fa-solid fa-book"></i>
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="#" id="login">
                        <i class="fa-solid fa-right-to-bracket"></i>
                        Login
                    </a>
                </li>
                <?php if (isset($_SESSION['username'])) : ?>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-rocketchat"></i>
                            Contact
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-default" style="min-width: 100%;">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="glyphicon glyphicon-align-left"></i>
                            <span>Toggle</span>
                        </button>
                    </div>
                    <span>
                        <i class="fa-solid fa-circle-user fa-2xl"></i>
                        <span>Guest</span></span>
                </div>
            </nav>
            <hr>
            <div class="row">
                <div class="all_content" id="home">
                    home
                    <table class="table">
                        <thead>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                            <th>6</th>
                        </thead>
                        <tbody>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                        </tbody>
                    </table>
                </div>
                <div class="all_content" id="quiz" style="display: none;">
                    quiz
                    <div id="quiz_content"></div>
                </div>
                <div class="all_content" id="subject" style="display: none;">
                <div class="row">
                    <div class="col-3">
                        <ul>
                            <li>pdf1</li>
                            <li>pdf2</li>
                            <li>pdf3</li>
                            <li>pdf4</li>
                            <li>pdf5</li>
                        </ul>
                    </div>
                    <div class="col-9">
                        <iframe src="<?= base_url() ?>assets/files/sample.pdf" height="950" width="950" title="Name"></iframe>
                    </div>
                </div>
                </div>
                <div class="all_content" id="Portfolio" style="display: none;">
                    portfolio
                </div>
            </div>
            <footer>
                <p style="opacity:0.0"> _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _
                 _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ </p>
            </footer>

        </div>
    </div>
    

    <!-- Modal -->
    <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="LoginModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="post" id="login_form" enctype="multipart/form-data" data-formstate="0" data-otptries="3" data-otpstate="0" data-otp-exp-min="5">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="Enter username">

                        </div>
                        <div class="form-group">
                            <label for="password">Username</label>
                            <input type="password" class="form-control" name="password" id="password" aria-describedby="emailHelp" placeholder="Enter password">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" type="text/javascript"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.min.css">

    <script type="text/javascript">
        $(document).ready(function() {
            var base_url = '<?= base_url() ?>';
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });

            $('.active').on('click', function() {
                var item = $(this).data('show');
                console.log(item)
                $('.all_content').hide();
                $('#' + item).show();
            })

            $('.get-data').on('click', function() {
                var subj = $(this).data('subject')
                $('#subject-label').html(subj)

                $.ajax({
                    type: "POST",
                    url: `${base_url}load-data`,
                    data: {
                        subject: subj
                    },
                    // dataType: 'json',
                    success: function(data) {
                        console.log('data')
                    }
                });
            })

            $('.click_quiz').on('click', function() {
                var session_check = $(this).data('session');

                if (session_check == 0) {
                    Toastify({
                        text: `Login Required`,
                        className: "error",
                        style: {
                            background: '#f96b78',
                        }
                    }).showToast();

                    $('#quiz_content').html('<i>Login Required</i>')
                    $('#LoginModal').modal('show')
                }

            })

            $('#login').on('click', function() {
                $('#LoginModal').modal('show')
            })

            $('#login_form').on('submit',function(e){
                e.preventDefault();
                console.log('data')
                if($('#username').val() == ''){
                    Toastify({
                        text: `Username is Required`,
                        className: "error",
                        style: {
                            background: '#f96b78',
                        }
                    }).showToast();
                    return false;
                }
                if($('#password').val() == ''){
                    Toastify({
                        text: `Password is Required`,
                        className: "error",
                        style: {
                            background: '#f96b78',
                        }
                    }).showToast();
                    return false;
                }
                var formData = new FormData($('#login_form').get(0));
                $.ajax({
                    type: "POST",
                    url: `${base_url}login`,
                    processData: false,
                    contentType: false,
                    data:formData,
                    dataType:'json',
                    success: function(data) {
                        console.log(data.user);
                        if(data.user==0){
                            location.href = base_url+'Admin-view';
                        }
                        else{
                            location.reload();
                        }
                    
                    }
                });
            })

        });
    </script>
</body>

</html>