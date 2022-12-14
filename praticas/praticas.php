<!-- Inicio Conteúdo da página -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h3 class="page-title">Atividades Práticas</h3>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row">
                <div class="col-lg-4">
                    <div class="card card-body" style="border-radius: 30px;">
                        <h4 class="card-title" style="position: absolute; padding-top: 10px;"><b>Sistemas Digitais</b></h4>
                        <i class="mdi mdi-check-circle" style="text-align:right; color: green; font-size: x-large;" data-toggle="tooltip" data-placement="right" data-original-title="Realizada"></i>
                        <div class="card-body">
                            <label class="card-text" style="color: #000; position: absolute; width: 50%"><b>Prof(a):</b> José Sombra</label>
                            <label class="card-text" style="color: #000; text-align: right; width: 100%"> <b>Inicio:</b> 11/12/2022</label>
                            <label class="card-text" style="color: #000; position: absolute; width: 50%"><b>Disciplina:</b> Eletrônica Digital II</label>
                            <label class="card-text" style="color: #000; text-align: right; width: 100%"> <b>Expira:</b> 17/12/2022</label>
                        </div>
                        <label style="text-align: center;"><a href="?pagina=acompanhamento" class="btn btn-success waves-effect waves-light" style="border-radius: 10px; width: 50%;">Consultar Avaliação</a></label>
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-body" style="border-radius: 30px;">
                        <h4 class="card-title" style="position: absolute; padding-top: 10px;"><b>Portas Lógicas</b></h4>
                        <i id="tarefaNaoRealizada" class="mdi mdi-check-circle" style="text-align:right; color: #ccc; font-size: x-large;" data-toggle="tooltip" data-placement="right" data-original-title="Não Realizada"></i>
                        
                        <div class="card-body">
                            <label class="card-text" style="color: #000; position: absolute; width: 50%"><b>Prof(a):</b> Jonathan Pereira</label>
                            <label class="card-text" style="color: #000; text-align: right; width: 100%"> <b>Inicio:</b> 13/12/2022</label>
                            <label class="card-text" style="color: #000; position: absolute; width: 50%"><b>Disciplina:</b> Eletrônica Digital</label>
                            <label class="card-text" style="color: #000; text-align: right; width: 100%"> <b>Expira:</b> 23/12/2022</label>
                        </div>
                        <label style="text-align: center;"><button class="btn btn-primary waves-effect waves-light" style="border-radius: 10px; width: 50%;" data-toggle="modal" data-target="#con-close-modal">Acessar</button></label>
                        
                    </div>
                </div>

                <div class="row" id="WarningInspecao" style = "display:none">
                    <p style="color:red;">ID não existente</p>
                </div>


                <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border-radius: 30px;">
                            <div class="modal-header">
                                <h4 class="modal-title">Detalhes da Atividade Prática</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body p-4" style="font-size: 1.0rem; color: azure;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="field-2" class="control-label"><b>Titulo - </b></label>
                                        Portas Lógicas
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                            <label for="field-1" class="control-label"><b>Professor(a) -  </b></label>
                                            Jonathan Pereira
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="field-3" class="control-label"><b>Disciplina - </b></label>
                                        Eletrônica Digital    
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="field-4" class="control-label"><b>Data Inicial - </b></label>
                                        13/12/2022
                                    </div>
                                    <div class="col-md-6">
                                        <label for="field-5" class="control-label"><b>Data Final - </b></label>
                                        22/12/2022
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                            <label for="field-7" class="control-label"><b>Descrição</b></label>
                                            <p>Familiarizar-se com montagens com circuitos integrados em protoboard e conhecer algumas aplicações de
                                                portas lógicas, o foco não está envolvido com a aplicação em si e tão pouco menos a algum conceito teórico,
                                                mas sim com o trabalho de montagem prática de circuitos eletrônicos usando circuitos integrados discretos
                                                (CI ou CHIPs).
                                            </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="field-7" class="control-label"><b>Baixar Arquivo</b></label></br>
                                        <!--<img src="assets\images\pdf-icon-png-2068.png" alt="" height="75px;">
                                        <a href="" style="color: azure;">Download</a> -->
                                        <a href="assets\docs\PRATICA1-D.pdf" download style="color: azure; margin-left: 10%;" data-toggle="tooltip" data-placement="bottom" data-original-title="Orientações da Prática"><i class=" far fa-file-pdf" style="font-size: xx-large;"></i></a>
                                    </div>
                                     
                                        
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fechar</button>
                                <a href="?pagina=pratica_realizando" type="button" class="btn btn-blue waves-effect waves-light">Realizar Prática</a>
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
