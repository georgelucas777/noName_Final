<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>noName - Cadastro</title>
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
                                    <span class="logo-lg-text-light"><h4>Sign up</h4></span>

                                    <p class="text-muted mb-4 mt-3">Não tem uma conta? Crie sua conta, leva menos de um minuto.</p>
                                </div>

                                <form method="post" action="doCadastro.php">

                                    <div class="form-group mb-3">
                                        <label for="example-select">Perfil de Usuário</label>
                                        <select class="form-control" id="tipousuario" name="tipousuario" required>
                                            <option value=""> Selecione o seu perfil de usuário</option>
                                            <option value="2">Aluno</option>
                                            <option value="3">Professor</option>
                                        </select>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="nome" class="col-form-label">Nome</label>
                                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira seu nome" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="sobrenome" class="col-form-label">Sobrenome</label>
                                            <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Insira seu sobrenome" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="fullname">Email</label>
                                        <input class="form-control" type="email" id="usuario" name="usuario" placeholder="Insira seu email" required>
                                    </div>
                                    <div class="form-group">
                                    <label for="fullname">Senha</label>
                                        <input class="form-control" type="password" id="senha" name="senha" placeholder="Insira sua senha" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signup">
                                            <label class="custom-control-label" for="checkbox-signup">I accept <a href="javascript: void(0);" class="text-dark">Terms and Conditions</a></label>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-success btn-block" type="submit"> Cadastrar </button>
                                    </div>

                                </form>

                                <?php if(isset($_GET['erro'])){ ?>

                                    <div class="alert alert-danger" role="alert" style="margin-top: 15px;">
                                        Usuário já cadastrados.
                                    </div>

                                <?php } ?>

                                <!--<div class="text-center">
                                    <h5 class="mt-3 text-muted">Sign up with</h5>
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
                                <p class="text-white-50">Já tem uma conta?  <a href="../login/login.php" class="text-white ml-1"><b>Faça login</b></a></p>
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