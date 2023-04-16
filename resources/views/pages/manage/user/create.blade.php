<!--Extra Large Modal -->
<div class="modal fade text-left w-100" id="xlarge" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel16">Tambah User</h4>
        <button type="button" class="close text-secondary " data-bs-dismiss="modal" aria-label="Close">
          X
        </button>
      </div>

      <div class="modal-body">
        <div class="row">
          <div class="col-6">
            <div>Role</div>
            <div class="d-flex">

              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Admin
                </label>
              </div>
              <div class="form-check ms-3">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Reseller
                </label>
              </div>
            </div>
            <div>Personal</div>

            <div class="d-flex">
              <div class="image">
                Foto Wajah

                <div class="d-flex justify-content-center align-items-center position-relative"
                  style="width: 133px; height: 133px; border-radius: 100%; background: #3B3B4B;">
                  <div class="fs-1">
                    <i class="bi bi-person" style="color: #818199;"></i>
                  </div>
                  <div class="position-absolute" style="right: 0; bottom: 0;">
                    <div class="d-flex justify-content-center align-items-center" style="width: 48px;
                            height: 48px;
                            background: #435EBE; border-radius: 100%;">
                      <div>
                        <i class="bi bi-pencil fs-5 text-white"></i>
                      </div>
                    </div>
                  </div>
                </div>


              </div>


              <div class="d-flex flex-column w-100">

                <div class="form-group position-relative has-icon-left mb-4">
                  <input type="text" class="form-control form-control-md text-white" name="name" placeholder="Nama">
                  <div class="form-control-icon">
                    <i class="bi bi-person-badge"></i>
                  </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                  <input type="text" class="form-control form-control-md text-white" name="Nomor HP"
                    placeholder="Nomor HP">
                  <div class="form-control-icon">
                    <i class="bi bi-telephone"></i>
                  </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                  <input type="text" class="form-control form-control-md text-white" name="Kode Referral"
                    placeholder="Kode Referral">
                  <div class="form-control-icon">
                    <i class="bi bi-gift"></i>
                  </div>
                </div>
                <div class="text-white mt-3 mb-2">Foto KTP</div>
                <div class="d-flex justify-content-center align-items-center" style="width: 398px;
        height: 64px;
        background: #FFFFFF;
        border: 1px solid #35354F;
        border-radius: 8px;">
                  <div style="font-weight: 400;
        font-size: 15px;
        line-height: 20px;
        text-align: center;
        color: #9899AA;">
                    Drag & Drop your files here or Browse</div>
                </div>

                <div class="form-group position-relative has-icon-left mt-4 mb-4">
                  <input type="text" class="form-control form-control-md text-white" name="Nomor KTP"
                    placeholder="Nomor KTP">
                  <div class="form-control-icon">
                    <i class="bi bi-person-lines-fill"></i>
                  </div>
                </div>
              </div>



            </div>

            <div class="text-white mt-3 mb-2">Rekening</div>
            <fieldset class="form-group position-relative has-icon-left mb-4 d-flex align-items-center">

              <select class="form-select form-control form-control-md "
                style="background-color: #1e1e2d; border: 1px solid #35354f; color:#607080; " id="basicSelect">

                <option>Bank yang Digunakan</option>
              </select>
              <div class="form-control-icon">
                <i class="bi bi-credit-card"></i>
              </div>
            </fieldset>

            <div class="form-group position-relative has-icon-left mb-4">
              <input type="text" class="form-control form-control-md text-white" name="Nomor Rekening"
                placeholder="Nomor Rekening">
              <div class="form-control-icon">
                <i class="bi bi-credit-card"></i>
              </div>
            </div>

          </div>

          <div class="col-6">
            <div class="text-white mt-3 mb-2">Alamat</div>

            <fieldset class="form-group position-relative has-icon-left mb-4 d-flex align-items-center">

              <select class="form-select form-control form-control-md "
                style="background-color: #1e1e2d; border: 1px solid #35354f; color:#607080; " id="basicSelect">
                <option>Pilih Provinsi</option>
                <option>Pilih Provinsi</option>
                <option>Pilih Provinsi</option>
              </select>
              <div class="form-control-icon">
                <i class="bi bi-pin-map"></i>
              </div>
            </fieldset>

            <fieldset class="form-group position-relative has-icon-left mb-4 d-flex align-items-center">

              <select class="form-select form-control form-control-md "
                style="background-color: #1e1e2d; border: 1px solid #35354f; color:#607080; " id="basicSelect">
                <option>Pilih Kota / Kabupaten</option>

              </select>
              <div class="form-control-icon">
                <i class="bi bi-pin-map"></i>
              </div>
            </fieldset>

            <fieldset class="form-group position-relative has-icon-left mb-4 d-flex align-items-center">

              <select class="form-select form-control form-control-md "
                style="background-color: #1e1e2d; border: 1px solid #35354f; color:#607080; " id="basicSelect">

                <option>Pilih Kecamatan</option>
              </select>

              <div class="form-control-icon">
                <i class="bi bi-pin-map"></i>
              </div>

            </fieldset>

            <fieldset class="form-group position-relative has-icon-left mb-4 d-flex align-items-center">

              <select class="form-select form-control form-control-md "
                style="background-color: #1e1e2d; border: 1px solid #35354f; color:#607080; " id="basicSelect">

                <option>Pilih Kelurahan</option>
              </select>
              <div class="form-control-icon">
                <i class="bi bi-pin-map"></i>
              </div>
            </fieldset>

            <div class="form-group position-relative has-icon-left mb-4">
              <input type="text" class="form-control form-control-md text-white" name="Kode Pos" placeholder="Kode Pos">
              <div class="form-control-icon">
                <i class="bi bi-pin-map"></i>
              </div>
            </div>

            <div class="form-group position-relative has-icon-left mb-4">
              <input type="text" class="form-control form-control-md text-white" name="Detail Alamat"
                placeholder="Detail Alamat">
              <div class="form-control-icon">
                <i class="bi bi-pin-map"></i>
              </div>
            </div>

            <div class="text-white mt-3 mb-2">Akun</div>

            <div class="form-group position-relative has-icon-left mb-4">
              <input class="form-control form-control-md text-white" type="text" name="username" placeholder="Username">
              <div class="form-control-icon">
                <i class="bi bi-person"></i>
              </div>
            </div>

            <div class="form-group position-relative has-icon-left mb-4">
              <input class="form-control form-control-md text-white" type="email" name="email" placeholder="Email">
              <div class="form-control-icon">
                <i class="bi bi-envelope"></i>
              </div>
            </div>

            <div class="form-group position-relative has-icon-left mb-4">
              <input type="password" class="form-control form-control-md text-white" name="password"
                placeholder="Password">
              <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
              </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
              <input type="password" class="form-control form-control-md text-white" name="password"
                placeholder="Konfirmasi Password">
              <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
          <i class="bx bx-x d-block d-sm-none"></i>
          <span class="d-none d-sm-block">Batalkan</span>
        </button>
        <button type="button" class="btn btn-primary ms-1" data-bs-dismiss="modal">
          <i class="bx bx-check d-block d-sm-none"></i>
          <span class="d-none d-sm-block">Siman</span>
        </button>
      </div>
    </div>
  </div>
</div>