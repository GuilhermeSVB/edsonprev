<?php include_once "includes/header.php"; ?>

  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" ><i class="fa fa-ambulance" aria-hidden="true"></i> Cadastro Novo Clínica</h1>
                    <div class="alert alert-dismissable " id="msg" style="display: none">
                       <button contenteditable="false" type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                             
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">

                <div class="col-lg-12">
                    <div  class="panel panel-default">
                        <div class="panel-heading">
                           
                          <!-- /.panel-heading -->
                          <div class="LoadingImage" style="display: none; text-align: center">
                              <img src="../V/img/load.gif" />
                        </div>
                        <div  id="painel" class="panel-body">
                            <form class="form-horizontal" name="cadastro" method="post" action="../../php/teste.php">
                                <fieldset>
                                <!-- Form Name -->
                                <legend>Dados da Empresa</legend>

                                <!-- Prepended text-->
                                <div class="form-group">
                                  <label class="col-md-2 control-label" for="prependedtext">Nome</label>
                                  <div class="col-md-8">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
                                      <input id="nome" name="nome" class="form-control" placeholder="" type="text" required="">
                                    </div>
                                    
                                  </div>
                                </div>

                                <!-- Prepended text-->
                                <div class="form-group">
                                  <label class="col-md-2 control-label" for="prependedtext">CPF</label>
                                  <div class="col-md-8">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                      <input  id="cpf" name="cpf" class="form-control cpf" placeholder="000.000.000-00" type="text" >
                                    </div>
                                    
                                  </div>
                                </div>
                                <!-- Prepended text-->
                                <div class="form-group">
                                  <label class="col-md-2 control-label" for="prependedtext">CNPJ</label>
                                  <div class="col-md-8">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                      <input  id="cnpj" name="cnpj" class="form-control cnpj" placeholder="99.999.999/9999-99 " type="text">
                                    </div>
                                 </div>
                              

                            </fieldset>
                            <fieldset>
                            <legend>Dados Contatos</legend>
                              <div class="form-group">
                                  <label class="col-md-2 control-label" for="email">Email</label>
                                  <div class="col-md-8">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                      <input id="email" name="email" class="form-control" placeholder="email@email.com" type="text" required="">
                                    </div>
                                    
                                  </div>
                                </div>
                                 <!-- Prepended text-->
                                <div class="form-group">
                                  <label class="col-md-2 control-label" for="residencial">Telefone Comercial</label>
                                  <div class="col-md-8">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                      <input id="residencial" name="residencial" class="form-control phone_with_ddd" placeholder="(000)0000-0000" type="text" required="">
                                    </div>
                                    
                                  </div>
                                </div>

                                <!-- Prepended text-->
                                <div class="form-group">
                                  <label class="col-md-2 control-label" for="comercial">Telefone Comercial</label>
                                  <div class="col-md-8">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                      <input id="comercial" name="comercial" class="form-control phone_with_ddd" placeholder="(000)0000-0000" type="text">
                                    </div>
                                    
                                  </div>
                                </div>

                                <!-- Prepended text-->
                                <div class="form-group">
                                  <label class="col-md-2 control-label" for="celular">Telefone Celular</label>
                                  <div class="col-md-8">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                                      <input id="celular" name="celular" class="form-control phone_with_ddd" placeholder="(000)0000-0000" type="text" required="">
                                    </div>
                                    
                                  </div>
                                </div>
                            </fieldset>
                            <fieldset>
                               <legend>Endereços</legend>
                               <div class="form-group">
                                  <label class="col-md-2 control-label" for="lagradouro">Lagradouro</label>
                                  <div class="col-md-8">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-map" aria-hidden="true"></i></i></span>
                                      <input id="lagradouro" name="lagradouro" class="form-control" placeholder="" type="text">
                                    </div>
                                    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-2 control-label" for="numero">Numero</label>
                                  <div class="col-md-8">
                                    <div class="input-group">
                                      <span class="input-group-addon">nº</span>
                                      <input id="numero" name="numero" class="form-control" placeholder="" type="text">
                                    </div>
                                    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-2 control-label" for="bairro">Bairro</label>
                                  <div class="col-md-8">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true"></i></span>
                                      <input id="bairro" name="bairro" class="form-control" placeholder="" type="text">
                                    </div>
                                  </div>
                                </div>  
                                <div class="form-group">
                                  <label class="col-md-2 control-label" for="cep">CEP</label>
                                  <div class="col-md-8">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true"></i></span>
                                      <input id="bairro" name="cep" class="form-control cep" placeholder="" type="text">
                                    </div>
                                  </div>
                                </div> 
                               
                               <div class="form-group">
                                  <label class="col-md-2 control-label" for="estado">Estado e Cidade</label>
                                  <div class="col-md-8">
                                        <select id="estado4" name="estado" class="form-control"></select>
                                        <select id="cidade4" name="cidade" class="form-control"></select>            
                                            <script language="JavaScript" type="text/javascript" charset="utf-8">
                                                      new dgCidadesEstados({
                                                        cidade: document.getElementById('cidade4'),
                                                        estado: document.getElementById('estado4')
                                                      })
                                            </script>
                                    </select>
                                  </div>
                                </div>  
                                  <!-- Textarea -->
                                <div class="form-group">
                                  <label class="col-md-2 control-label" for="complemento">Complemento </label>
                                  <div class="col-md-8">                     
                                    <textarea class="form-control " id="complemento" name="complemento"></textarea>
                                  </div>
                                </div>
                                  <input type="hidden" name="acao" value="cadastrarclinica">
                                <!-- Button -->
                                <div class="form-group">
                                  <label class="col-md-4 control-label" for="salvar"></label>
                                  <div class="col-md-4">
                                      <button id="salvar" type="button" name="salvar" class="btn btn-lg btn-block btn-primary j_button">Salvar</button>
                                  </div>
                                </div>
                            </fieldset>
                            
                        </form>

                        </div>
                        <!-- .panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div> 
            <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
  
    
<?php include_once "includes/footer.php"; ?>
