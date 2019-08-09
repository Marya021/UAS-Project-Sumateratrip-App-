<!DOCTYPE html>
<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <nav class="d-none d-md-inline-block ml-md-4" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-book"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Bookings</a></li>
                </ol>
              </nav>
            </div>
          </div>
        </div>

<div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                      <h3 class="mb-0">Update Bookings</h3>
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
                                  <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input class="form-control" type="text" name="id_book" placeholder="Destination" value="<?= $bookings['id_book']; ?>" readonly>
                              </div>
                              <span class="form-text text-danger"><?= form_error('id_book'); ?></span>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input class="form-control" type="text" name="id_user" placeholder="Credit" value="<?= $bookings['id_user']; ?>" readonly>
                              </div>
                              <span class="form-text text-danger"><?= form_error('id_user'); ?></span>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                              <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-book"></i></span>
                                </div>
                                <input class="form-control" type="text" name="booking" placeholder="Price" value="<?= $bookings['booking']; ?>" readonly>
                              </div>
                              <span class="form-text text-danger"><?= form_error('booking'); ?></span>
                            </div>
                            </div>
                          <div class="col-md-6">
                          <div class="form-group">
                                  <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-file-invoice"></i></span>
                                    </div>
                                    <select class="form-control" data-toggle="select" name="status">
                                      <?php foreach($status as $s): ?>
                                        <?php if ($s == $bookings['status']): ?>
                                            <option value="<?= $s; ?>" selected><?= $s; ?></option>
                                        <?php else: ?>
                                            <option value="<?= $s; ?>"><?= $s; ?></option>
                                        <?php endif;?>              
                                      <?php endforeach;?>
                                    </select>
                                  </div>
                                  <span class="form-text text-danger"><?= form_error('status'); ?></span>
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
                                <textarea class="form-control" type="text" name="detail" placeholder="Facilities" readonly><?= $bookings['detail']; ?></textarea>
                              </div>
                              <span class="form-text text-danger"><?= form_error('detail'); ?></span>
                            </div>
                          </div>
                        <div class="col-md-6">
                        <div class="form-group">
                              <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-money-bill"></i></span>
                                </div>
                                <input class="form-control" type="text" name="price" placeholder="Price" value="<?= $bookings['price']; ?>" readonly>
                              </div>
                              <span class="form-text text-danger"><?= form_error('price'); ?></span>
                            </div>
                            </div>
                            </div>
                         
                            <div class="col-mod-12">
                                <button class="btn btn-primary" name="update" type="submit">Update</button>
                            </div>
                          </form></div>   
                        </div>