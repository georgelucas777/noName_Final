<!-- Inicio Conteúdo da página -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h3 class="page-title">Avaliar Atividades Práticas</h3>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row">
                <div class="col-lg-12">
                <div class="col-lg-4" style="margin-top: 20px;">
                    <div class="card card-body" style="border-radius: 30px;">
                        <h4 class="card-title" style="position: absolute; padding-top: 10px;"><b>Sistemas Digitais</b></h4>
                        <i class="mdi mdi-check-circle" style="text-align:right; color: #f7b84b; font-size: x-large;"></i>
                        <div class="card-body">
                            <label class="card-text" style="color: #000; position: absolute; width: 50%"><b>Aluno:</b> George Lucas Bessa Pereira</label>
                            <label class="card-text" style="color: #000; text-align: right; width: 100%"> <b>Data Resposta:</b> 11/12/2022</label>
                            <!--<label class="card-text" style="color: #000; position: absolute; width: 50%">Não possui respostas</label>
                            <label class="card-text" style="color: #000; text-align: right; width: 100%"> <b>Expira:</b> 18/12/2022</label>-->
                        </div>
                        <label style="text-align: center;"><a href="javascript:void(0);" class="btn btn-warning waves-effect waves-light" style="border-radius: 10px; width: 50%;" data-toggle="modal" data-target="#con-close-modal">Avaliar</a></label>
        
                    </div>
                </div>
                </div>
                
                <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border-radius: 30px;">
                            <div class="modal-header">
                                <h4 class="modal-title">Avaliação</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body p-4" style="font-size: 1.0rem; color: azure;">
                            <div class="row">
                                
                                    <div class="col-lg-4">
                                        <label for="field-7" class="control-label"><b>Baixar Script</b></label></br>
                                        <a href="assets\docs\PRATICA1-D.pdf" download style="color: azure; margin-left: 10%;" data-toggle="tooltip" data-placement="bottom" data-original-title="Script"><i class=" far fa-file-pdf" style="font-size: xx-large;"></i></a>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="field-7" class="control-label"><b>Baixar Relatório</b></label></br>
                                        <a href="assets\docs\relatório.docx" download style="color: azure; margin-left: 10%;" data-toggle="tooltip" data-placement="bottom" data-original-title="Relatório"><i class=" far fa-file-pdf" style="font-size: xx-large;"></i></a>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="field-7" class="control-label"><b>Baixar Gravação</b></label></br>
                                        <a href="javascript:void(0);" download style="color: azure; margin-left: 10%;" data-toggle="tooltip" data-placement="bottom" data-original-title="Gravação da Prática"><i class="fas fa-file-video" style="font-size: xx-large;"></i></a>
                                    </div>

                                    <div class="form-group col-md-6" style="margin-top: 20px;" >
                                        <label for="nome" class="col-form-label">Nota</label>
                                        <input class="form-control" type="number" name="nota" min='0' max='10' required>
                                    </div>
                                    <div class="form-group col-lg-12" >
                                        <label for="fullname">Comentário</label>
                                        <textarea class="form-control" id="example-textarea" rows="5"></textarea>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fechar</button>
                                <a href="?pagina=avaliar3" type="button" class="btn btn-success waves-effect waves-light">Salvar Avaliação</a>
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
