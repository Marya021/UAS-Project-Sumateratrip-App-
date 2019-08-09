<!DOCTYPE html>
<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <nav class="d-none d-md-inline-block ml-md-4" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-building"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Hotels</a></li>
                </ol>
              </nav>
            </div>
          </div>
        </div>

<div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                      <h3 class="mb-0">Add Hotels</h3>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">

                      <form action="" method="post" enctype="multipart/form-data">
                      <input class="form-control" type="hidden" name="id_hotels" value="<?= $accommodations['id_hotels']; ?>">
                        <!-- Input groups with icon -->
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-building"></i></span>
                                </div>
                                <input class="form-control" type="text" name="name" placeholder="Hotels" value="<?= $accommodations['name']; ?>">
                              </div>
                              <span class="form-text text-danger"><?= form_error('name'); ?></span>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-thumbtack"></i></span>
                                </div>
                                <input class="form-control" type="text" name="address" placeholder="Address" value="<?= $accommodations['address']; ?>">
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
                                      <span class="input-group-text"><i class="fas fa-star"></i></span>
                                    </div>
                                    <select class="form-control" id="exampleFormControlSelect1" name="rating">
                                      <?php foreach($rating as $r): ?>
                                        <?php if ($r == $accommodations['rating']): ?>
                                            <option value="<?= $r; ?>" selected><?= $r; ?></option>
                                        <?php else: ?>
                                            <option value="<?= $r; ?>"><?= $r; ?></option>
                                        <?php endif;?>              
                                      <?php endforeach;?>
                                    </select>
                                  </div>
                                  <span class="form-text text-danger"><?= form_error('rating'); ?></span>
                                </div>
                            </div>
                          <div class="col-md-6">
                          <div class="form-group">
                                  <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-money-bill"></i></span>
                                    </div>
                                    <input class="form-control" type="text" name="price" placeholder="Price"value="<?= $accommodations['price']; ?>">
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
                              <span class="input-group-text"></span>
                              </div>
                                <textarea class="form-control" type="text" name="ket" placeholder="Detail"><?= $accommodations['ket']; ?></textarea>
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
                                    <input class="custom-file-input" id="projectCoverUploads" type="file" name="file" value="<?= $accommodations['file']; ?>">
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