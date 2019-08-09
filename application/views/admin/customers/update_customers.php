<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <nav class="d-none d-md-inline-block ml-md-4" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-user"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Customers</a></li>
                </ol>
              </nav>
            </div>
          </div>
        </div>

<div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                      <h3 class="mb-0">Update Customers</h3>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                      <form action="" method="post">
                        <input type="hidden" name="id_user" value="<?= $user['id_user']; ?>">
                        <!-- Input groups with icon -->
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input class="form-control" type="text" placeholder="Full Name" name="full_name" value="<?= $user['full_name']; ?>">
                              </div>
                              <span class="form-text text-danger"><?= form_error('full_name'); ?></span>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                </div>
                                <input class="form-control" type="email" placeholder="Email address" name="email" value="<?= $user['email']; ?>">
                              </div>
                              <span class="form-text text-danger"><?= form_error('email'); ?></span>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                            <div class="form-group">
                              <div class="input-group input-group-merge">
                                <input class="form-control" type="password" placeholder="Password" name="password" value="<?= $user['password']; ?>">
                                <div class="input-group-append">
                                  <span class="input-group-text"><i class="fas fa-eye"></i></span>
                                </div>
                              </div>
                              <span class="form-text text-danger"><?= form_error('password'); ?></span>
                            </div>
                          </div>
                          <div class="col-md-6">
                                <div class="form-group">
                                  <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="Phone" name="phone" value="<?= $user['phone']; ?>">
                                  </div>
                                  <span class="form-text text-danger"><?= form_error('phone'); ?></span>
                                </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <div class="input-group input-group-merge">
                                <input class="form-control" type="text" placeholder="Address" name="address" value="<?= $user['address']; ?>">
                                <div class="input-group-append">
                                  <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
                                </div>
                              </div>
                              <span class="form-text text-danger"><?= form_error('address'); ?></span>
                            </div>
                          </div>
                        </div>
                            <div class="col-mod-12">
                                <button class="btn btn-primary" name="update" type="submit">Update</button>
                            </div>
                          </form></div>   
                        </div>