<?php include_once "includes/header.php"; ?>

  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Paciente</h1>
                    <div class="alert alert-dismissable alert-success" id="msg" style="display: none">
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
                            Cadastro Novo Paciente
                          <!-- /.panel-heading -->
                          <div class="LoadingImage" style="display: none; text-align: center">
                              <img src="../img/load.gif" />
                        </div>
                        <div  id="painel" class="panel-body">
                            <form class="form-horizontal" name="cadastro" method="post" action="../../php/crud.php">
                                <fieldset>
                                <!-- Form Name -->
                                <legend>Dados Pessoais</legend>

                                <!-- Prepended text-->
                                <div class="form-group">
                                  <label class="col-md-2 control-label" for="prependedtext">Nome</label>
                                  <div class="col-md-8">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                      <input id="nome" name="nome" class="form-control" placeholder="joão" type="text">
                                    </div>
                                    
                                  </div>
                                </div>

                                <!-- Prepended text-->
                                <div class="form-group">
                                  <label class="col-md-2 control-label" for="prependedtext">CPF</label>
                                  <div class="col-md-8">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                      <input  id="cpf" name="cpf" class="form-control cpf" placeholder="000.000.000-00" type="text" required="">
                                    </div>
                                    
                                  </div>
                                </div>

                                <!-- Prepended text-->
                                <div class="form-group">
                                  <label class="col-md-2 control-label" for="nascimento">Nascimento</label>
                                  <div class="col-md-8">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-birthday-cake" aria-hidden="true"></i></span>
                                      <input id="data" name="nascimento" class="form-control "  type="text" required="">
                                       <script type="text/javascript">
                                        $(function () {
                                                            $('#data').datetimepicker({
                                                                locale: 'pt',
                                                                format: 'DD/MM/YYYY'
                                                            });
                                                        });
                                       </script>
                                    </div>
                                    
                                  </div>
                                </div>

                                <!-- Select Basic -->
                                <div class="form-group">
                                  <label class="col-md-2 control-label" for="civil">Estado Civil</label>
                                  <div class="col-md-8">
                                    <select id="civil" name="civil" class="form-control">
                                      <option value="1">Solteiro</option>
                                      <option value="2">Casado</option>
                                      <option value="3">Divorciado</option>
                                    </select>
                                  </div>
                                </div>

                                <!-- Multiple Radios -->
                                <div class="form-group">
                                  <label class="col-md-2 control-label" for="sexo">Sexo</label>
                                  <div class="col-md-8">
                                  <div class="radio">
                                    <label for="sexo-0">
                                      <input type="radio" name="sexo" id="sexo-0" value="F" checked="checked">
                                      Feminino
                                    </label>
                                    </div>
                                  <div class="radio">
                                    <label for="sexo-1">
                                      <input type="radio" name="sexo" id="sexo-1" value="M">
                                      Masculino
                                    </label>
                                    </div>
                                  </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="form-group">
                                  <label class="col-md-2 control-label" for="marketing">Marketing</label>
                                  <div class="col-md-8">
                                    <select id="marketing" name="marketing" class="form-control">
                                      <option value="1">Panfleto</option>
                                      <option value="2">Video Promocional</option>
                                      <option value="3">Conhecidos</option>
                                      <option value="4">Outros</option>
                                    </select>
                                  </div>
                                </div>

                                <!-- Textarea -->
                                <div class="form-group">
                                  <label class="col-md-2 control-label" for="Obs">Observações</label>
                                  <div class="col-md-8">                     
                                    <textarea class="form-control" id="Obs" name="Obs"></textarea>
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
                                  <label class="col-md-2 control-label" for="residencial">Telefone Residêncial</label>
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
