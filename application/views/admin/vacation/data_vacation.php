<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <nav class="d-none d-md-inline-block ml-md-4" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-search-location"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Vacation</a></li>
                </ol>
              </nav>
            </div>
          </div>
        </div>

<div class="card">
              <!-- Souvenird header -->
              <div class="card-header border-0">
                <div class="row">
                  <div class="col-6">
                    <h3 class="mb-0">Data</h3>
                  </div>
                  <div class="col-12 text-center">

                  <?php if($this->session->flashdata('flash')) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          Data Vacation <strong><?= $this->session->flashdata('flash'); ?></strong>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                    <?php endif; ?>

                    <div class="col-12 text-right">
                      <a class="btn btn-sm btn-neutral btn-round btn-icon" href="<?= base_url(); ?>vacation/add" data-original-title="Add Customers" data-toggle="tooltip">
                        <span class="btn-inner--icon"><i class="fas fa-plus"></i></span>
                        <span class="btn-inner--text-right">Add</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Light table -->
              <div class="table-responsive">
                <table class="table align-items-center table-flush">
                  <thead class="thead-light">
                    <tr>
                      <th>NO</th>
                      <th>Picture</th>
                      <th>Destination</th>
                      <th>Facilities</th>
                      <th>Price</th>
                      <th>Credit</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $NO = 1;?>
                  <?php foreach($vacation as $v) : ?>
                    <tr>
                      <td class="table-user">
                        <span><?= $NO++; ?></span>
                      </td>
                      <td>
                          <span><img src="<?= base_url('uploads/'.$v['file']); ?>" height="50" width="50"></span>
                      </td>
                      <td>
                        <span><?= $v['destination']; ?></span>
                      </td>
                      <td>
                        <span><?= $v['facilities']; ?></span>
                      </td>
                      <td>
                          <span><?= $v['price']; ?></span>
                      </td>
                      <td>
                        <span><?= $v['credit']; ?></span>
                      </td>
                      <td class="table-actions">
                        <a class="table-action" href="<?= base_url(); ?>vacation/update/<?= $v['id_vac']; ?>"data-original-title="Edit Vacation" data-toggle="tooltip">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a class="table-action table-action-delete" href="<?= base_url(); ?>vacation/delete/<?= $v['id_vac']; ?>" 
                        data-original-title="Delete Vacation" data-toggle="tooltip" onclick="return confirm('Are you sure?');">
                          <i class="fas fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <div class="souvenird-footer py-4">
                  <nav aria-label="...">
                    <ul class="pagination justify-content-end mb-0">
                      <li class="page-item disabled">
                        <a tabindex="-1" class="page-link" href="#">
                          <i class="fas fa-angle-left"></i>
                          <span class="sr-only">Previous</span>
                        </a>
                      </li>
                      <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">
                          <i class="fas fa-angle-right"></i>
                          <span class="sr-only">Next</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>
            </div>