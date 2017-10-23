<?php include('header.php')?>

<div class="container">
<div class="row">
<div class="col-sm-12 py-5">

<?php
$csv = array_map('str_getcsv', file('data/eleccion_diputados.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
?>
<?php $chilevamos = 0; $lafuerzadelamayoria = 0; $sumemos = 0; $unionpatriotica = 0; $convergenciademocratica = 0; $portodochile = 0;
$coalicionregionalista = 0; $frenteamplio = 0; $trabajadoresrevolucionarios = 0; $independiente = 0;?>

<h3>Chile Vamos</h3>

      <table class="table table-bordered table-striped table-responsive">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Partido</th>
                    <th>Comunas</th>
          </tr>
        </thead>
        <tbody>
          <?php for($a = 0; $a < $total = count($csv); $a++){?>
                <?php if(($csv[$a]["Lista/Pacto"])=="Chile Vamos"){?>
          <tr>
            <td>
                        <?php echo($csv[$a]["Candidato Nombre"])?>
                  <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                  <?php echo($csv[$a]["Candidato Apellido Materno"])?>
            </td>

                    <td><?php echo($csv[$a]["Partido Politico"])?></td>
                    <td><?php echo($csv[$a]["Comunas"])?></td>
          </tr>
                <?php $chilevamos++;?>
                <?php };?>
          <?php };?>
        </tbody>
      </table>

        <hr>

        <h3>La fuerza de la Mayoría</h3>

              <table class="table table-bordered table-striped table-responsive">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Partido</th>
                            <th>Comunas</th>
                  </tr>
                </thead>
                <tbody>
                  <?php for($a = 0; $a < $total = count($csv); $a++){?>
                        <?php if(($csv[$a]["Lista/Pacto"])=="La fuerza de la Mayoria"){?>
                  <tr>
                    <td>
                                <?php echo($csv[$a]["Candidato Nombre"])?>
                          <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                          <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                    </td>

                            <td><?php echo($csv[$a]["Partido Politico"])?></td>
                              <td><?php echo($csv[$a]["Comunas"])?></td>
                  </tr>
                        <?php $lafuerzadelamayoria++;?>
                        <?php };?>
                  <?php };?>
                </tbody>
              </table>

                <hr>

                <h3>Sumemos</h3>

                      <table class="table table-bordered table-striped table-responsive">
                        <thead>
                          <tr>
                            <th>Nombre</th>
                            <th>Partido</th>
                                    <th>Comunas</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php for($a = 0; $a < $total = count($csv); $a++){?>
                                <?php if(($csv[$a]["Lista/Pacto"])=="Sumemos"){?>
                          <tr>
                            <td>
                                        <?php echo($csv[$a]["Candidato Nombre"])?>
                                  <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                                  <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                            </td>

                                    <td><?php echo($csv[$a]["Partido Politico"])?></td>
                                      <td><?php echo($csv[$a]["Comunas"])?></td>
                          </tr>
                                <?php $sumemos++;?>
                                <?php };?>
                          <?php };?>
                        </tbody>
                      </table>

                        <hr>


                                        <h3>Unión Patriótica</h3>

                                              <table class="table table-bordered table-striped table-responsive">
                                                <thead>
                                                  <tr>
                                                    <th>Nombre</th>
                                                    <th>Partido</th>
                                                            <th>Comunas</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <?php for($a = 0; $a < $total = count($csv); $a++){?>
                                                        <?php if(($csv[$a]["Lista/Pacto"])=="Unión Patriótica"){?>
                                                  <tr>
                                                    <td>
                                                                <?php echo($csv[$a]["Candidato Nombre"])?>
                                                          <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                                                          <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                                                    </td>

                                                            <td><?php echo($csv[$a]["Partido Politico"])?></td>
                                                              <td><?php echo($csv[$a]["Comunas"])?></td>
                                                  </tr>
                                                        <?php $unionpatriotica++;?>
                                                        <?php };?>
                                                  <?php };?>
                                                </tbody>
                                              </table>

                                                <hr>

                                                <h3>Convergencia Democrática</h3>

                                                      <table class="table table-bordered table-striped table-responsive">
                                                        <thead>
                                                          <tr>
                                                            <th>Nombre</th>
                                                            <th>Partido</th>
                                                                    <th>Comunas</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <?php for($a = 0; $a < $total = count($csv); $a++){?>
                                                                <?php if(($csv[$a]["Lista/Pacto"])=="Convergencia Democrática"){?>
                                                          <tr>
                                                            <td>
                                                                        <?php echo($csv[$a]["Candidato Nombre"])?>
                                                                  <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                                                                  <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                                                            </td>
                                                            <td><?php echo($csv[$a]["Partido Politico"])?></td>
                                                              <td><?php echo($csv[$a]["Comunas"])?></td>
                                                          </tr>
                                                                <?php $convergenciademocratica++;?>
                                                                <?php };?>
                                                          <?php };?>
                                                        </tbody>
                                                      </table>

                                                        <hr>

                                                        <h3>Por Todo Chile</h3>

                                                              <table class="table table-bordered table-striped table-responsive">
                                                                <thead>
                                                                  <tr>
                                                                    <th>Nombre</th>
                                                                    <th>Partido</th>
                                                                            <th>Comunas</th>
                                                                  </tr>
                                                                </thead>
                                                                <tbody>
                                                                  <?php for($a = 0; $a < $total = count($csv); $a++){?>
                                                                        <?php if(($csv[$a]["Lista/Pacto"])=="Por Todo Chile"){?>
                                                                  <tr>
                                                                    <td>
                                                                                <?php echo($csv[$a]["Candidato Nombre"])?>
                                                                          <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                                                                          <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                                                                    </td>
                                                                    <td><?php echo($csv[$a]["Partido Politico"])?></td>
                                                                      <td><?php echo($csv[$a]["Comunas"])?></td>
                                                                  </tr>
                                                                        <?php $portodochile++;?>
                                                                        <?php };?>
                                                                  <?php };?>
                                                                </tbody>
                                                              </table>

                                                                <hr>


                                                                <h3>Coalición Regionalista Verde</h3>

                                                                      <table class="table table-bordered table-striped table-responsive">
                                                                        <thead>
                                                                          <tr>
                                                                            <th>Nombre</th>
                                                                            <th>Partido</th>
                                                                                    <th>Comunas</th>
                                                                          </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                          <?php for($a = 0; $a < $total = count($csv); $a++){?>
                                                                                <?php if(($csv[$a]["Lista/Pacto"])=="Coalición Regionalista Verde"){?>
                                                                          <tr>
                                                                            <td>
                                                                                        <?php echo($csv[$a]["Candidato Nombre"])?>
                                                                                  <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                                                                                  <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                                                                            </td>
                                                                            <td><?php echo($csv[$a]["Partido Politico"])?></td>
                                                                              <td><?php echo($csv[$a]["Comunas"])?></td>
                                                                          </tr>
                                                                                <?php $coalicionregionalista++;?>
                                                                                <?php };?>
                                                                          <?php };?>
                                                                        </tbody>
                                                                      </table>

                                                                      <h3>Frente Amplio</h3>

                                                                            <table class="table table-bordered table-striped table-responsive">
                                                                              <thead>
                                                                                <tr>
                                                                                  <th>Nombre</th>
                                                                                  <th>Partido</th>
                                                                                          <th>Comunas</th>
                                                                                </tr>
                                                                              </thead>
                                                                              <tbody>
                                                                                <?php for($a = 0; $a < $total = count($csv); $a++){?>
                                                                                      <?php if(($csv[$a]["Lista/Pacto"])=="Frente Amplio"){?>
                                                                                <tr>
                                                                                  <td>
                                                                                              <?php echo($csv[$a]["Candidato Nombre"])?>
                                                                                        <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                                                                                        <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                                                                                  </td>
                                                                                  <td><?php echo($csv[$a]["Partido Politico"])?></td>
                                                                                    <td><?php echo($csv[$a]["Comunas"])?></td>
                                                                                </tr>
                                                                                      <?php $frenteamplio++;?>
                                                                                      <?php };?>
                                                                                <?php };?>
                                                                              </tbody>
                                                                            </table>

                                                                              <hr>
                                                                              <h3>Trabajadores Revolucionarios</h3>

                                                                                    <table class="table table-bordered table-striped table-responsive">
                                                                                      <thead>
                                                                                        <tr>
                                                                                          <th>Nombre</th>
                                                                                          <th>Partido</th>
                                                                                                  <th>Comunas</th>
                                                                                        </tr>
                                                                                      </thead>
                                                                                      <tbody>
                                                                                        <?php for($a = 0; $a < $total = count($csv); $a++){?>
                                                                                              <?php if(($csv[$a]["Lista/Pacto"])=="Trabajadores revolucionarios"){?>
                                                                                        <tr>
                                                                                          <td>
                                                                                                      <?php echo($csv[$a]["Candidato Nombre"])?>
                                                                                                <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                                                                                                <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                                                                                          </td>
                                                                                          <td><?php echo($csv[$a]["Partido Politico"])?></td>
                                                                                            <td><?php echo($csv[$a]["Comunas"])?></td>
                                                                                        </tr>
                                                                                              <?php $trabajadoresrevolucionarios++;?>
                                                                                              <?php };?>
                                                                                        <?php };?>
                                                                                      </tbody>
                                                                                    </table>

                                                                                      <hr>

                                                                                      <h3>Independiente</h3>

                                                                                            <table class="table table-bordered table-striped table-responsive">
                                                                                              <thead>
                                                                                                <tr>
                                                                                                  <th>Nombre</th>
                                                                                                  <th>Partido</th>
                                                                                                          <th>Comunas</th>
                                                                                                </tr>
                                                                                              </thead>
                                                                                              <tbody>
                                                                                                <?php for($a = 0; $a < $total = count($csv); $a++){?>
                                                                                                      <?php if(($csv[$a]["Lista/Pacto"])=="Independiente"){?>
                                                                                                <tr>
                                                                                                  <td>
                                                                                                              <?php echo($csv[$a]["Candidato Nombre"])?>
                                                                                                        <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                                                                                                        <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                                                                                                  </td>
                                                                                                  <td><?php echo($csv[$a]["Partido Politico"])?></td>
                                                                                                    <td><?php echo($csv[$a]["Comunas"])?></td>
                                                                                                </tr>
                                                                                                      <?php $independiente++;?>
                                                                                                      <?php };?>
                                                                                                <?php };?>
                                                                                              </tbody>
                                                                                            </table>

                                                                                              <hr>



<pre><code><?php print_r($csv);?></code></pre>

</div>
</div>
</div>
<?php include('footer.php')?>
