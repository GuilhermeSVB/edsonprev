<?php include_once "includes/header.php"; 
function __autoload($class_name) {
    require_once '../C/' . $class_name . '.php';
}
?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-ambulance" aria-hidden="true"></i> Clinicas</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>CNPJ</th>
                                            <th>CPF</th>
                                            <th>Telefone</th>
                                            <th>Telefone(s)</th>
                                            <th>Telefone</th>
                                              <th>Email</th>
                                            <th>Data Cadastro</th>
                                            <th>Editar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php                     
                                        $clinica = new Clinicas();
                                        
                                         foreach($clinica->findAll() as $key => $value):                                                  
                                         ?>                        
		        <tr class="odd gradeX">
                                                <td><?php echo $value->nome; ?></td>
                                                <td><?php echo $value->cnpj; ?></td>                                                                                 
                                                <td><?php echo $value->cpf; ?></td>                                                                                 
                                                <td><?php echo $value->telefone1; ?></td>
                                                <td><?php echo $value->telefone2; ?></td>
                                                <td class="center"><?php echo $value->telefone3; ?></td>
                                                <td><?php echo $value->email; ?></td>
                                                <td class="center"><?php  echo date('H:i d/m/Y', strtotime($value->data_cadastro)); ?></td>
                                                <td><a  id='config' alt='<?php echo $value->id; ?>' data-toggle='modal' data-target='#modal2' class='btn  btn-lg' data-toggle='modal'><i class="fa fa-cog" aria-hidden="true"></i></a></td>
                                        </tr>
		<?php endforeach; ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!-- /.row -->
        </div>
     <!-- Modal -->
    </div>
    <div class="fade modal" id="modal2">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Editar</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal">
              <fieldset>
                <!-- Form Name -->
                <!-- Prepended text-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="prependedtext">Nome</label>
                  <div class="col-md-8">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                      </span>
                      <input id="edinome" name="prependedtext" class="form-control" placeholder="João" type="text" value="Bastiao" required="">
                    </div>
                  </div>
                </div>
                <!-- Prepended text-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="prependedtext">Telefone</label>
                  <div class="col-md-8">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="glyphicon glyphicon-earphone"></i>
                      </span>
                      <input id="editelefone" value="" name="prependedtext" class="form-control" placeholder="(00)0000-0000" type="text">
                    </div>
                  </div>
                </div>
                <!-- Prepended text-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="prependedtext">Endereço</label>
                  <div class="col-md-8">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="glyphicon glyphicon-home"></i>
                      </span>
                      <input id="ediendereco" name="prependedtext" class="form-control" placeholder="rua das flores, 123 , centro" type="text">
                    </div>
                  </div>
                </div>
                <!-- Prepended text-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="prependedtext">Data</label>
                  <div class="col-md-4">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="glyphicon glyphicon-calendar"></i>
                      </span>
                      <input id="edidata" value="" name="prependedtext" class="form-control" placeholder="" type="text">
                    </div>
                  </div>
                </div>
                <script type="text/javascript">
                  $(function () {
                                                            $('#edidata').datetimepicker({
                                                                locale: 'pt'
                                                            });
                                                        });
                </script>
                <!-- Textarea -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textarea">Referência</label>
                  <div class="col-md-4">
                    <textarea class="form-control" id="edireferencia" name="textarea"></textarea>
                  </div>
                </div>
              </fieldset>
            </form>
            <div id="situacaoedi"></div>
          </div>
          <div class="modal-footer">
            <a class="btn btn-default" data-dismiss="modal">Fechar</a>
            <a id="update" alt="" class="btn btn-primary">Salvar</a>
          </div>
        </div>
      </div>
      <!-- Modal -->
 <!-- DataTables JavaScript -->
    <script src="../v/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../v/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
<?php include_once "includes/footer.php"; ?>
