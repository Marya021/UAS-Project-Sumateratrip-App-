<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <nav class="d-none d-md-inline-block ml-md-4" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-plane"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Flights</a></li>
                </ol>
              </nav>
            </div>
          </div>
        </div>

<div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                      <h3 class="mb-0">Update Flights</h3>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                      <form action="" method="post">
                        <input type="hidden" name="id_trans" value="<?= $flights['id_trans']; ?>">
                        <!-- Input groups with icon -->
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-plane"></i></span>
                                </div>
                                <input class="form-control" type="text" name="name" placeholder="Airline" value="<?= $flights['name']; ?>">
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
                                <input class="form-control" type="time" name="leave" placeholder="Leave" value="<?= $flights['leave']; ?>">
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
                                  <span class="input-group-text"><i class="fas fa-caret-left"></i></span>
                                </div>
                                <input class="form-control" type="text" name="from" placeholder="From" value="<?= $flights['from']; ?>">
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
                                    <input class="form-control" type="time" name="arrived" placeholder="Arrived" value="<?= $flights['arrived']; ?>">
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
                                <span class="input-group-text"><i class="fas fa-caret-right"></i></span>
                                </div>
                                <input class="form-control" type="text" name="to" placeholder="To" value="<?= $flights['to']; ?>">
                              </div>
                              <span class="form-text text-danger"><?= form_error('to'); ?></span>
                            </div>
                          </div>
                          <div class="col-md-6">
                                <div class="form-group">
                                  <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-plane"></i></span>
                                    </div>
                                    <select class="form-control" data-toggle="select" name="class">
                                      <?php foreach($class as $c): ?>
                                        <?php if ($c == $flights['class']): ?>
                                            <option value="<?= $c; ?>" selected><?= $c; ?></option>
                                        <?php else: ?>
                                            <option value="<?= $c; ?>"><?= $c; ?></option>
                                        <?php endif;?>              
                                      <?php endforeach;?>
                                    </select>
                                  </div>
                                  <span class="form-text text-danger"><?= form_error('class'); ?></span>
                                </div>
                            </div>
                          </div>
                          <div class="row">
                           <div class="col-md-6">
                            <div class="form-group">
                              <div class="input-group input-group-merge">
                              <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                              </div>
                                <input class="form-control" type="text" name="passengers" placeholder="Passengers" value="<?= $flights['passengers']; ?>">
                              </div>
                              <span class="form-text text-danger"><?= form_error('passengers'); ?></span>
                            </div>
                          </div>
                          <div class="col-md-6">
                                <div class="form-group">
                                  <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-money-bill"></i></span>
                                    </div>
                                    <input class="form-control" type="text" name="price" placeholder="Price" value="<?= $flights['price']; ?>">
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