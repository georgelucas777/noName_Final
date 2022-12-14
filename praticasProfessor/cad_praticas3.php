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

            <div class="row">
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
                            <label class="card-text" style="color: #000; position: absolute; width: 50%">Não possui respostas</label>
                            <label class="card-text" style="color: #000; text-align: right; width: 100%"> <b>Expira:</b> 18/12/2022</label>
                        </div>
                        <label style="text-align: center;"><button href="?pagina=acompanhamento" class="btn btn-success waves-effect waves-light" style="border-radius: 10px; width: 50%;" disabled>Ver Respostas</button></label>
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
            </div>
            <!-- end row -->
            
        </div> <!-- container -->

    </div> <!-- content -->
</div>

<!-- Fim Conteúdo da página -->
