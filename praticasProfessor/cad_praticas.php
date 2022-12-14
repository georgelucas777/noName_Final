<!-- Inicio Conteúdo da página -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h3 class="page-title">Lista de Atividades Práticas</h3>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <?php if(isset($_SESSION['login'])){ ?>
                <?php if($_SESSION['nome'] == 'José'){
                        echo '<div class="row">
                        <div class="col-lg-1">
                            <button class="btn btn-blue waves-effect waves-light" style="border-radius: 10px;" data-toggle="modal" data-target="#con-close-modal"><i class="fe-plus"></i> Cadastrar</button>
                        </div>
                        <div class="col-lg-12">
                        <div class="col-lg-4" style="margin-top: 20px;">
                            <div class="card card-body" style="border-radius: 30px;">
                                <h4 class="card-title" style="position: absolute; padding-top: 10px;"><b>Sistemas Digitais</b></h4>
                                <i class="mdi mdi-check-circle" style="text-align:right; color: green; font-size: x-large;"></i>
                                <div class="card-body">
                                    <label class="card-text" style="color: #000; position: absolute; width: 50%"><b>Disciplina:</b> Eletrônica Digital II</label>
                                    <label class="card-text" style="color: #000; text-align: right; width: 100%"> <b>Inicio:</b> 14/12/2022</label>
                                    <label class="card-text" style="color: #000; position: absolute; width: 50%">Possui 1 resposta</label>
                                    <label class="card-text" style="color: #000; text-align: right; width: 100%"> <b>Expira:</b> 18/12/2022</label>
                                </div>
                                <label style="text-align: center;"><a href="?pagina=avaliar2" class="btn btn-success waves-effect waves-light" style="border-radius: 10px; width: 50%;">Ver Respostas</a></label>
                                <label style="text-align: center;"><a href="?pagina=cad_praticas" class="btn btn-danger waves-effect waves-light" style="border-radius: 10px; width: 50%;" data-toggle="modal" data-target="#con-close-modal">Cancelar</a></label>
                            </div>
                        </div>
                        </div>
                        
                        <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content" style="border-radius: 30px;">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Cancelamento de Reserva</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body p-4" style="font-size: 1.0rem; color: azure;">
                                        <div class="row">
                                            <div class="col-md-12">
                                                    <label for="field-1" class="control-label"><b>Deseja cancelar a reserva?</b></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fechar</button>
                                        <a href="?pagina=cad_praticas" type="button" class="btn btn-danger waves-effect waves-light">Sim, Cancelar</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.modal -->
                    </div>';
                    } else{
                        echo '<div class="row">
                                    <div class="col-lg-1">
                                        <button class="btn btn-blue waves-effect waves-light" style="border-radius: 10px;" data-toggle="modal" data-target="#con-close-modal"><i class="fe-plus"></i> Cadastrar</button>
                                    </div>
                                    <div class="row text-center col-lg-12" style="display: block;">
                                        </label><b>Não possui atividades práticas cadastradas.</b></label></br>
                                    </div>
                                    <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content" style="border-radius: 30px;">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Cadastrar Atividade Prática</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body p-4" style="font-size: 1.0rem; color: azure;">
                                                    <form action="">
                                                        <div class="form-group">
                                                            <label for="fullname">Titulo</label>
                                                            <input class="form-control" type="email" id="usuario" name="usuario" placeholder="Insira o Titulo da Atividade Prática" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="fullname">Disciplina</label>
                                                            <input class="form-control" type="email" id="usuario" name="usuario" placeholder="Insira a Disciplina Relacionada" required>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="nome" class="col-form-label">Data para Iniciar</label>
                                                                <input class="form-control" id="example-date" type="date" name="date" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="sobrenome" class="col-form-label">Data para Finalizar</label>
                                                                <input input class="form-control" id="example-date" type="date" name="date" required>
                                                            </div>
                                                        </div>
                    
                                                        <div class="form-group">
                                                            <label for="fullname">Arquivo de Orientação</label>
                                                            <input type="file" id="example-fileinput" class="form-control-file" required>
                                                        </div>
                                                    
                                                    
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fechar</button>
                                                    <a href="?pagina=cad_praticas2" type="button" class="btn btn-blue waves-effect waves-light">Cadastrar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.modal -->
                                </div>';
                    }?> 
            <?php } ?>

            
            <!-- end row -->
            
        </div> <!-- container -->

    </div> <!-- content -->
</div>

<!-- Fim Conteúdo da página -->
