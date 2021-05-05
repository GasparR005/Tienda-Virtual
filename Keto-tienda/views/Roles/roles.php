<?php 
headerAdmin($data);
getModal('modalsRoles', $data);
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $data['page_title'] ?>
            <button type="button" onclick="openModal();" class="btn btn-success"><i class="fas fa-plus-circle"></i> Nuevo</button>
            </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>/dashboard">Home</a></li>
              <li class="breadcrumb-item active"><?= $data['page_tag'] ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="card">
              <div class="card-header">
                <h3 class="card-title"><?= $data['page_tag'] ?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="tableRoles" class="table table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Status</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
                   
        </tbody>
        <tfoot>
            <tr>
            <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Status</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>
            </div>  
     </div> 

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php footerAdmin($data); ?>