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
                            <li class="breadcrumb-item active">  Deseja encerrar a prática?<a href="?pagina=praticas" class="text-white ml-1"><b>Sair</b></a></li>
                            </ol>
                        </div>
                        <h2 class="page-title">Atividade Prática - Portas Lógicas</h2>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row">
                <div class="card-box col-lg-12" style="border-radius: 30px;">
                    <div class="col-lg-4 offset-8 text-right" style="position: absolute; padding-right: 50px;">
                        <a href=""><i class="mdi mdi-camera" style="color: #fff; font-size: xxx-large;"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Gravar"></i></a>
                        <a href="assets\docs\PRATICA1-D.pdf" download><i class="mdi mdi-file-pdf" style="color: #fff; font-size: xxx-large;"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Baixar Atividade"></i></a>
                        <button style="background: transparent; border: none;" data-toggle="modal" data-target="#con-close-modal2"><i class="mdi mdi-file-upload"style="color: #fff; font-size: xxx-large;"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Testar Script"></i></button>
                        <button style="background: transparent; border: none;" data-toggle="modal" data-target="#con-close-modal3"><i class="mdi mdi-send"style="color: #fff; font-size: xxx-large;"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Enviar Resolução"></i></a>
                    </div>
                    <div class="col-lg-6 offset-2"  >
                        <div class="card card-body" style="border-radius: 30px;">
                            <h4 class="header-title" style="color: #000;">Estação Remota</h4>
                            <p class="sub-header">ao vivo</p>
                            <div class="col-lg-4 offset-8 text-right" style="position: absolute; padding-right: 50px;">
                                <a href=""><i class="fe-zoom-in" style="color: #000; font-size: x-large;"></i></a>
                                <a href=""><i class="fe-zoom-out" style="color: #000; font-size: x-large;"></i></a>
                            </div>
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PrUxWZiQfy4?ecver=1"></iframe>
                            </div>
                            <div class="col-lg-4 offset-8 text-right">
                                <a href=""><i class="mdi mdi-camera-control" style="color: #000; font-size: xxx-large;"></i></a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div id="con-close-modal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border-radius: 30px;">
                            <div class="modal-header">
                                <h4 class="modal-title">Testar Script</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body p-4" style="font-size: 1.0rem; color: azure;">
                                <label for="example-fileinput">Upload do script</label>
                                <input type="file" id="example-fileinput" class="form-control-file">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fechar</button>
                                <a href="javascript:void(0);" type="button" class="btn btn-blue waves-effect waves-light" data-dismiss="modal" id="toastr-three">Executar</a>
                            </div>
                        </div>
                    </div>
                </div><!-- /.modal -->
            
            </div> <!-- container -->

            <div id="con-close-modal3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border-radius: 30px;">
                            <div class="modal-header">
                                <h4 class="modal-title">Enviar Resolução</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body p-4" style="font-size: 1.0rem; color: azure;">
                                <label for="example-fileinput">Script final</label>
                                <input type="file" id="example-fileinput" class="form-control-file"></br>
                                <label for="example-fileinput">Relatório</label>
                                <input type="file" id="example-fileinput" class="form-control-file">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fechar</button>
                                <a href="?pagina=praticas2" type="button" class="btn btn-blue waves-effect waves-light">Enviar</a>
                            </div>
                        </div>
                    </div>
                </div><!-- /.modal -->
            
            </div> <!-- container -->

    </div> <!-- content -->
</div>

<!-- Fim Conteúdo da página -->
