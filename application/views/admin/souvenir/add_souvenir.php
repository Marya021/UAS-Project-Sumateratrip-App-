<!DOCTYPE html>
<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <nav class="d-none d-md-inline-block ml-md-4" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-store"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Souvenir</a></li>
                </ol>
              </nav>
            </div>
          </div>
        </div>

<div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                      <h3 class="mb-0">Add Souvenir</h3>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">

                      <form action="" method="post" enctype="multipart/form-data">
                        <!-- Input groups with icon -->
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-store"></i></span>
                                </div>
                                <input class="form-control" type="text" name="name" placeholder="Souvenir">
                              </div>
                              <span class="form-text text-danger"><?= form_error('name'); ?></span>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
                                </div>
                                <input class="form-control" type="text" name="address" placeholder="Address">
                              </div>
                              <span class="form-text text-danger"><?= form_error('address'); ?></span>
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
                                <input class="form-control" type="text" name="location" placeholder="Location">
                              </div>
                              <span class="form-text text-danger"><?= form_error('location'); ?></span>
                            </div>
                            </div>
                          <div class="col-md-6">
                             </div>
                          </div>
                          <div class="row">
                           <div class="col-md-6">
                            <div class="form-group">
                              <div class="input-group input-group-merge">
                              <div class="input-group-prepend">
                              <span class="input-group-text"></span>
                              </div>
                                <textarea class="form-control" type="text" name="info" placeholder="Detail"></textarea>
                              </div>
                              <span class="form-text text-danger"><?= form_error('info'); ?></span>
                            </div>
                          </div>
                          <div class="col-md-6">
                                <div class="form-group">
                                  <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-money-bill"></i></span>
                                    </div>
                                    <input class="custom-file-input" id="projectCoverUploads" type="file" name="file">
                                    <label class="custom-file-label" for="projectCoverUploads">Choose</label>
                                  </div>
                                </div>
                            </div>
                        </div>
                         
                            <div class="col-mod-12">
                                <button class="btn btn-primary" name="add" type="submit">Add</button>
                            </div>
                          </form></div>   
                        </div>