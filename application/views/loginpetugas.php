<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-lg-6">

          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-12">
              <div class="p-5">
                <div class="text-center">
                  <br>
                  <br>
                  <br>
                  <br>
                <center><h2 class="text-white text-blod">OFFICER</h2></center>
                 <center><h2 class="text-white font-blod">Public complaints</h2></center>
               <p>
                </div>

                <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">','<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>') ?>

                <?= $this->session->flashdata('msg'); ?>
                
                <?= form_open('Auth/LoginpetugasController', 'class="user"'); ?>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Masukan Username" autofocus value="<?= set_value('username') ?>">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukan Password">
                  </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block">LOGIN</button>
                </form>
                <hr>
              </div>
            </div>
          </div>

    </div>

  </div>

</div>
