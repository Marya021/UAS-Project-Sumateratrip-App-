<!DOCTYPE html>
<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <nav class="d-none d-md-inline-block ml-md-4" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-car"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Car</a></li>
                </ol>
              </nav>
            </div>
          </div>
        </div>

<div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                      <h3 class="mb-0">Add Car</h3>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                    
                      <form action="" method="post" enctype="multipart/form-data">
                      <input class="form-control" type="hidden" name="id_trans" value="<?= $car['id_trans']; ?>">
                        <!-- Input groups with icon -->
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-car"></i></span>
                                </div>
                                <input class="form-control" type="text" name="name" placeholder="Car" value="<?= $car['name']; ?>">
                              </div>
                              <span class="form-text text-danger"><?= form_error('name'); ?></span>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-caret-left"></i></span>
                                </div>
                                <input class="form-control" type="date" name="leave" placeholder="Leave" value="<?= $car['leave']; ?>">
                              </div>
                              <span class="form-text text-danger"><?= form_error('leave'); ?></span>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                            <div class="form-group">
                              <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-thumbtack"></i></span>
                                </div>
                                <input class="form-control" type="text" name="from" placeholder="Location" value="<?= $car['from']; ?>">
                              </div>
                              <span class="form-text text-danger"><?= form_error('from'); ?></span>
                            </div>
                          </div>
                          <div class="col-md-6">
                                <div class="form-group">
                                  <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-caret-right"></i></span>
                                    </div>
                                    <input class="form-control" type="date" name="arrived" placeholder="Arrived" value="<?= $car['arrived']; ?>">
                                  </div>
                                  <span class="form-text text-danger"><?= form_error('arrived'); ?></span>
                                </div>
                             </div>
                          </div>
                          <div class="row">
                           <div class="col-md-6">
                            <div class="form-group">
                              <div class="input-group input-group-merge">
                              <div class="input-group-prepend">
                              <span class="input-group-text"></span>
                              </div>
                                <textarea class="form-control" type="text" name="ket" placeholder="Detail" ><?= $car['ket']; ?></textarea>
                              </div>
                              <span class="form-text text-danger"><?= form_error('ket'); ?></span>
                            </div>
                          </div>
                          <div class="col-md-6">
                                <div class="form-group">
                                  <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-money-bill"></i></span>
                                    </div>
                                    <input class="form-control" type="text" name="price" placeholder="Price" value="<?= $car['price']; ?>">
                                  </div>
                                  <span class="form-text text-danger"><?= form_error('price'); ?></span>
                                </div>
                            </div>
                          </div>
                          <div class="row">
                          <div class="col-md-6">
                                <div class="form-group">
                                  <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-money-bill"></i></span>
                                    </div>
                                    <input class="custom-file-input" id="projectCoverUploads" type="file" name="file" value="<?= $car['file']; ?>">
                                    <label class="custom-file-label" for="projectCoverUploads">Choose</label>
                                  </div>
                                </div>
                            </div>
                          </div>
                            <div class="col-mod-12">
                                <button class="btn btn-primary" name="update" type="submit">Update</button>
                            </div>
                          </form></div>   
                        </div>