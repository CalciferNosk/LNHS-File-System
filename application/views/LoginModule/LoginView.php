<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Sytem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .intro {
            height: 100%;
        }

        @media (min-height: 300px) and (max-height: 450px) {
            .intro {
                height: auto;
            }
        }

        .gradient-custom {
            background: radial-gradient(50% 123.47% at 50% 50%, #00FF94 0%, #720059 100%), linear-gradient(121.28deg, #669600 0%, #FF0000 100%), linear-gradient(360deg, #0029FF 0%, #8FFF00 100%), radial-gradient(100% 164.72% at 100% 100%, #6100FF 0%, #00FF57 100%), radial-gradient(100% 148.07% at 0% 0%, #FFF500 0%, #51D500 100%);
            background-blend-mode: screen, color-dodge, overlay, difference, normal;
        }

        .fas.fa-laptop {
            font-size: 19rem;
        }

        @media (max-width: 991px) {
            .fas.fa-laptop {
                font-size: 12rem;
            }
        }

        ;
    </style>
</head>

<body>
    <section class="intro">
        <div class="mask d-flex align-items-center h-100 gradient-custom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-10">
                        <div class="card">
                            <div class="card-body p-5">

                                <div class="row d-flex align-items-center">
                                    <div class="col-md-6 col-xl-7">

                                        <div class="text-center pt-md-5 pb-5 my-md-5" style="padding-right: 24px;">
                                            <i class="fas fa-laptop" style="color: #D6D6D6;"></i>
                                        </div>

                                    </div>
                                    <div class="col-md-6 col-xl-4 text-center">

                                        <h2 class="fw-bold mb-4 pb-2">Member Login</h2>

                                        <div class="form-outline mb-3">
                                            <input type="email" id="typeEmail" class="form-control form-control-lg" />
                                            <label class="form-label" for="typeEmail">Email</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="typePassword" class="form-control form-control-lg" />
                                            <label class="form-label" for="typePassword">Password</label>
                                        </div>

                                        <div class="text-center">
                                            <button class="btn btn-info btn-block btn-lg" type="submit">Login</button>
                                            <p class="small mt-3 mb-4 text-muted">Forgot <span class="fw-bold"><a href="#!" class="text-muted">Username</a> / <a href="#!" class="text-muted">Password</a>?</span></p>
                                            <a href="#!" class="link-info">Create your Account <i class="fas fa-long-arrow-alt-right"></i></a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>