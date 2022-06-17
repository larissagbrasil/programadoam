

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><b>Dashboard</b></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Articuladores</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-alt"></i>
              </div>
              <a href="#" class="small-box-footer">Visualizar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px"></sup></h3>

                <p>Mobilizadores</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">Visualizar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>Líderes</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">Visualizar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Municípios</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">Visualizar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  <b>Gráfico Geral</b>
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                    </li>
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 300px;">
                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>                         
                   </div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>                         
                  </div>  
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->



            <!-- TO DO List -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  <b>Demandas e Compromissos</b>
                </h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm">
                    <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul class="todo-list" data-widget="todo-list">
                  <li>
                    <!-- drag handle -->
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <!-- checkbox -->
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo1" id="todoCheck1">
                      <label for="todoCheck1"></label>
                    </div>
                    <!-- todo text -->
                    <span class="text">Adesivagem São José</span>
                    <!-- Emphasis label -->
                    <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
                      <label for="todoCheck2"></label>
                    </div>
                    <span class="text">Caminhada Grande Vitória</span>
                    <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo3" id="todoCheck3">
                      <label for="todoCheck3"></label>
                    </div>
                    <span class="text">Ação em Iranduba</span>
                    <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo4" id="todoCheck4">
                      <label for="todoCheck4"></label>
                    </div>
                    <span class="text">Reunião no Comitê</span>
                    <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo5" id="todoCheck5">
                      <label for="todoCheck5"></label>
                    </div>
                    <span class="text">Postagem redes sociais</span>
                    <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo6" id="todoCheck6">
                      <label for="todoCheck6"></label>
                    </div>
                    <span class="text">Ação de rua no Eldorado</span>
                    <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <button type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Add item</button>
              </div>
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

            <!-- Map card -->
            <div class="card bg-gradient-primary">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-map-marker-alt mr-1"></i>
                  <b>Áreas de Influência</b>
                </h3>
                <!-- card tools -->
                <div class="card-tools">
                  <button type="button"
                          class="btn btn-primary btn-sm daterange"
                          data-toggle="tooltip"
                          title="Date range">
                    <i class="far fa-calendar-alt"></i>
                  </button>
                  <button type="button"
                          class="btn btn-primary btn-sm"
                          data-card-widget="collapse"
                          data-toggle="tooltip"
                          title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <div class="card-body">
                <div id="world-map" style="height: 250px; width: 100%;"></div>
              </div>
              <!-- /.card-body-->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <div id="sparkline-1"></div>
                    <div class="text-white">Articuladores</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                    <div class="text-white">Mobilizadores</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                    <div class="text-white">Líderes</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.card -->

            

            <!-- Calendar -->
            <div class="card bg-gradient-success">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt mr-1"></i>
                  <b>Agenda Projeto AM</b>
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                      <i class="fas fa-bars"></i></button>
                    <div class="dropdown-menu" role="menu">
                      <a href="#" class="dropdown-item">Add novo evento</a>
                      <a href="#" class="dropdown-item">Limpar</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">Ver calendário</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><b>Cadastro Projeto AM</b></h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-4">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><b>Cadastro Geral</b></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Insira o nome do contato">
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mobilizador</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Insira o nome do mobilizador">
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Articulador</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Insira o nome do articulador">
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Função</label><br>
                    <form method="GET" action="">
                      <select name="funcao">
                        <option value="art">Articulador</option>
                        <option value="mob">Mobilizador</option>
                        <option value="lid">Líder</option>
                      </select>
                    </form><br>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Endereço</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Insira o endereço">
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputPassword1">CEP</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Insira o CEP">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Cidade</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Insira a cidade">
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Estado</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Insira o estado">
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Whatsapp</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="(XX) X XXXX-XXXX">
                  </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">E-mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Insira um e-mail">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Seção Eleitoral</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Insira a seção">
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Zona</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Insira a zona">
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Local de Atuação</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Insira o local de atuação">
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Segmento</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Insira o segmento">
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Senador</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Insira o senador">
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Deputado Estadual</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Insira o deputado estadual">
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Deputado Federal</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Insira o deputado federal">
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputFile">Sua foto</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Buscar imagem</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Carregar</span>
                      </div>
                    </div>
                  </div>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">  
                      <label class="form-check-label" for="exampleCheck1">Autorizo o cadastro do meu contato</label>
                  </div>
                </div>
                <!-- /.card-body -->
          </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><b>Cadastrados</b></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nome</th>
                      <th>Telefone</th>
                      <th>Função</th>
                      <th>Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Kleber</td>
                      <td>
                      (92) 9 9999-9999
                      </td>
                      <td>
                        Articulador
                      </td>
                      <td>
                        <div class="btn-group">
                          <a href="home.php?acao=editar" class ="btn btn-success" title="Editar cadastro"><i class="fas fa-user-edit"></i></a>
                          <a href="#" class="btn btn-danger" title="Remover cadastro"><i class="fas fa-user-times"></i></a>
                      </td> 
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Humberto</td>
                      <td>
                      (92) 9 9999-9999
                      </td>
                      <td>
                        Articulador
                      </td>
                      <td>
                        <div class="btn-group">
                          <a href="home.php?acao=editar" class ="btn btn-success" title="Editar cadastro"><i class="fas fa-user-edit"></i></a>
                          <a href="#" class="btn btn-danger" title="Remover cadastro"><i class="fas fa-user-times"></i></a>
                      </td> 
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Elcy</td>
                      <td>
                      (92) 9 9999-9999
                      </td>
                      <td>
                        Articulador
                      </td>
                      <td>
                        <div class="btn-group">
                          <a href="home.php?acao=editar" class ="btn btn-success" title="Editar cadastro"><i class="fas fa-user-edit"></i></a>
                          <a href="#" class="btn btn-danger" title="Remover cadastro"><i class="fas fa-user-times"></i></a>
                      </td> 
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Larissa</td>
                      <td>
                        (92) 9 9999-9999
                      </td>
                      <td>
                        Articulador
                      </td>
                      <td>
                        <div class="btn-group">
                          <a href="home.php?acao=editar" class ="btn btn-success" title="Editar cadastro"><i class="fas fa-user-edit"></i></a>
                          <a href="#" class="btn btn-danger" title="Remover cadastro"><i class="fas fa-user-times"></i></a>
                      </td> 
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
