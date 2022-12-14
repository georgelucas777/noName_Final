<!-- Inicio Conteúdo da página -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <!--<li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>-->
                                <li class="breadcrumb-item active">  Não quer realizar a pratica agora?<a href="?pagina=praticas3" class="text-white ml-1"><b>Sair</b></a></li>
                            </ol>
                        </div>
                        <h2 class="page-title">Atividade Prática - Portas Lógicas</h2>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row">
                <div class="col-12 text-left">
                        <label><b>Prof(a):</b> Jonathan Pereira</label></br>
                        <label><b>Disciplina:</b> Eletrônica Digital</label></br>
                        <label><b>Tempo máximo:</b> 2 horas</label></br>
                        <label><b>Local:</b> Ambiente de Estação Remota</label></br>
                        <label><b>Resposta:</b> Script e Relatório</label></br>

                        <div class="row">
                            <div class="col-md-1">
                                <a id="btn_DespRNC" href="javascript: openCollapse_DespRNC();" type="button" class="btn btn-blue waves-effect waves-light">Agendar Prática</a>
                            </div>
                            <div class="col-md-1">
                                <a href="?pagina=pratica_iniciar" type="button" class="btn btn-success waves-effect waves-light">Iniciar Prática</a>
                            </div>
                        </div>

                        <div class="row" id="DespRNC" style="margin-top: 20px;">
                            <div class="card-box col-lg-10">
                            <div class="col-lg-12">
                                <div id="calendar"></div>
                            </div>
                            </div>
                        </div>
                </div>
                <div class="modal fade" id="event-modal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Reserva</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div> 
                            <div class="modal-body p-3">
                            </div>
                            <div class="text-right p-3">
                                <button type="button" class="btn btn-light " data-dismiss="modal">Fechar</button>
                                <button type="button" class="btn btn-success save-event  ">Confirmar Reserva</button>
                                <button type="button" class="btn btn-danger delete-event  " data-dismiss="modal">Deletar</button>
                            </div>
                        </div> <!-- end modal-content-->
                    </div> <!-- end modal dialog-->
                </div>


            </div>
            <!-- end row -->
            
        </div> <!-- container -->

    </div> <!-- content -->
</div>

<!-- Fim Conteúdo da página -->
