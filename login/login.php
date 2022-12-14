<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>noName - Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App css -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <span class="logo-lg-text-light"><h3>no Name - Remote Lab</h3></span>
                                    <span class="logo-lg-text-light"><h4>Sign in</h4></span>
                                </div>

                                <form method="post" action="doLogin.php">

                                    <div class="form-group mb-3">
                                        <label for="fullname">Email</label>
                                        <input class="form-control" type="email" id="usuario" name="usuario" required="" placeholder="Insira seu email">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="fullname">Senha</label>
                                        <input class="form-control" type="password" required="" id="senha" name="senha" placeholder="Insira sua senha">
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Entrar </button>
                                    </div>

                                </form>

                                <?php if(isset($_GET['erro'])){ ?>

                                    <div class="alert alert-danger" role="alert" style="margin-top: 15px;">
                                        Usuário e/ou senha inválidos.
                                    </div>

                                <?php } ?>
                                
                                <!--<div class="text-center">
                                    <h5 class="mt-3 text-muted">Sign in with</h5>
                                    <ul class="social-list list-inline mt-3 mb-0">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                                        </li>
                                    </ul>
                                </div> -->

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p> <a href="pages-recoverpw.html" class="text-white-50 ml-1">Esqueceu a senha?</a></p>
                                <p class="text-white-50">Não tem uma conta? <a href="../cadastro/cadastro.php" class="text-white ml-1"><b>Cadastre-se</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <footer class="footer footer-alt">
            <div class="col-md-12">
                Prof. Wellington Sarmento - Digital Eletronic Remote Lab
            </div>
            
            <div class="col-md-12">
                <b href="">equipe noName - Projeto Integrado I</b> 
            </div>
        </footer>

        <!-- Vendor js -->
        <script src="../assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="../assets/js/app.min.js"></script>
        
    </body>
</html>