@extends('layouts.default')

@section('content')

<div class="page-heading">
  <div class="page-title">
    <h3>Top Up</h3>
  </div>
</div>
<style>
 .dataTable-top {
    display: none;
  }
</style>
<section class="section">
  <div class="row mt-5">
    <div class="col-12 col-md-12">
      <div class="card p-3 m-0">
        <div class="d-flex justify-content-between mb-4 position-relative">
          <div>Total 200 data</div>
          <div class="d-flex">
            <div>
              <fieldset class="form-group">
                <select class="form-select id=" basicSelect">
                  <option>10</option>
                  <option>5</option>
                  <option>2</option>
                </select>
              </fieldset>
            </div>

            <div class="ms-3">
              <div class="form-group">
                <input type="text" class="form-control" id="positionFilter" placeholder="Cari...">
              </div>
            </div>

            <div class="ms-3">

              <div class="me-1 mb-1 d-inline-block">
                <!-- Button trigger for Extra Large  modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#xlarge">
                  Tambah
                </button>

                <!--Extra Large Modal -->
                <div class="modal fade text-left w-100" id="xlarge" tabindex="-1" role="dialog"
                  aria-labelledby="myModalLabel16" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel16">Tambah Top Up</h4>
                        <button type="button" class="close text-secondary " data-bs-dismiss="modal" aria-label="Close">
                          X
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <label for="basicInput">Nominal</label>
                          <input type="text" class="form-control mt-1" id="basicInput" placeholder="Nominal">
                        </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                          <i class="bx bx-x d-block d-sm-none"></i>
                          <span class="d-none d-sm-block">Batalkan</span>
                        </button>
                        <button type="button" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                          <i class="bx bx-check d-block d-sm-none"></i>
                          <span class="d-none d-sm-block">Bayar</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
        <table class="table table-striped" id="table1">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>City</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Graiden</td>
              <td>vehicula.aliquet@semconsequat.co.uk</td>
              <td>076 4820 8838</td>
              <td>Offenburg</td>
              <td>
                <span class="badge bg-success">Active</span>
              </td>
            </tr>
            <tr>
              <td>Dale</td>
              <td>fringilla.euismod.enim@quam.ca</td>
              <td>0500 527693</td>
              <td>New Quay</td>
              <td>
                <span class="badge bg-success">Active</span>
              </td>
            </tr>
            <tr>
              <td>Nathaniel</td>
              <td>mi.Duis@diam.edu</td>
              <td>(012165) 76278</td>
              <td>Grumo Appula</td>
              <td>
                <span class="badge bg-danger">Inactive</span>
              </td>
            </tr>
            <tr>
              <td>Darius</td>
              <td>velit@nec.com</td>
              <td>0309 690 7871</td>
              <td>Ways</td>
              <td>
                <span class="badge bg-success">Active</span>
              </td>
            </tr>
            <tr>
              <td>Oleg</td>
              <td>rhoncus.id@Aliquamauctorvelit.net</td>
              <td>0500 441046</td>
              <td>Rossignol</td>
              <td>
                <span class="badge bg-success">Active</span>
              </td>
            </tr>
            <tr>
              <td>Kermit</td>
              <td>diam.Sed.diam@anteVivamusnon.org</td>
              <td>(01653) 27844</td>
              <td>Patna</td>
              <td>
                <span class="badge bg-success">Active</span>
              </td>
            </tr>
            <tr>
              <td>Jermaine</td>
              <td>sodales@nuncsit.org</td>
              <td>0800 528324</td>
              <td>Mold</td>
              <td>
                <span class="badge bg-success">Active</span>
              </td>
            </tr>
            <tr>
              <td>Ferdinand</td>
              <td>gravida.molestie@tinciduntadipiscing.org</td>
              <td>(016977) 4107</td>
              <td>Marlborough</td>
              <td>
                <span class="badge bg-danger">Inactive</span>
              </td>
            </tr>
            <tr>
              <td>Kuame</td>
              <td>Quisque.purus@mauris.org</td>
              <td>(0151) 561 8896</td>
              <td>Tresigallo</td>
              <td>
                <span class="badge bg-success">Active</span>
              </td>
            </tr>
            <tr>
              <td>Deacon</td>
              <td>Duis.a.mi@sociisnatoquepenatibus.com</td>
              <td>07740 599321</td>
              <td>Karapınar</td>
              <td>
                <span class="badge bg-success">Active</span>
              </td>
            </tr>
            <tr>
              <td>Channing</td>
              <td>tempor.bibendum.Donec@ornarelectusante.ca</td>
              <td>0845 46 49</td>
              <td>Warrnambool</td>
              <td>
                <span class="badge bg-success">Active</span>
              </td>
            </tr>
            <tr>
              <td>Aladdin</td>
              <td>sem.ut@pellentesqueafacilisis.ca</td>
              <td>0800 1111</td>
              <td>Bothey</td>
              <td>
                <span class="badge bg-success">Active</span>
              </td>
            </tr>
            <tr>
              <td>Cruz</td>
              <td>non@quisturpisvitae.ca</td>
              <td>07624 944915</td>
              <td>Shikarpur</td>
              <td>
                <span class="badge bg-success">Active</span>
              </td>
            </tr>
            <tr>
              <td>Keegan</td>
              <td>molestie.dapibus@condimentumDonecat.edu</td>
              <td>0800 200103</td>
              <td>Assen</td>
              <td>
                <span class="badge bg-success">Active</span>
              </td>
            </tr>
            <tr>
              <td>Ray</td>
              <td>placerat.eget@sagittislobortis.edu</td>
              <td>(0112) 896 6829</td>
              <td>Hofors</td>
              <td>
                <span class="badge bg-success">Active</span>
              </td>
            </tr>
            <tr>
              <td>Maxwell</td>
              <td>diam@dapibus.org</td>
              <td>0334 836 4028</td>
              <td>Thane</td>
              <td>
                <span class="badge bg-success">Active</span>
              </td>
            </tr>
            <tr>
              <td>Carter</td>
              <td>urna.justo.faucibus@orci.com</td>
              <td>07079 826350</td>
              <td>Biez</td>
              <td>
                <span class="badge bg-success">Active</span>
              </td>
            </tr>
            <tr>
              <td>Stone</td>
              <td>velit.Aliquam.nisl@sitametrisus.com</td>
              <td>0800 1111</td>
              <td>Olivar</td>
              <td>
                <span class="badge bg-success">Active</span>
              </td>
            </tr>
            <tr>
              <td>Berk</td>
              <td>fringilla.porttitor.vulputate@taciti.edu</td>
              <td>(0101) 043 2822</td>
              <td>Sanquhar</td>
              <td>
                <span class="badge bg-success">Active</span>
              </td>
            </tr>
            <tr>
              <td>Philip</td>
              <td>turpis@euenimEtiam.org</td>
              <td>0500 571108</td>
              <td>Okara</td>
              <td>
                <span class="badge bg-success">Active</span>
              </td>
            </tr>
            <tr>
              <td>Kibo</td>
              <td>feugiat@urnajustofaucibus.co.uk</td>
              <td>07624 682306</td>
              <td>La Cisterna</td>
              <td>
                <span class="badge bg-success">Active</span>
              </td>
            </tr>
            <tr>
              <td>Bruno</td>
              <td>elit.Etiam.laoreet@luctuslobortisClass.edu</td>
              <td>07624 869434</td>
              <td>Rocca d"Arce</td>
              <td>
                <span class="badge bg-success">Active</span>
              </td>
            </tr>
            <tr>
              <td>Leonard</td>
              <td>blandit.enim.consequat@mollislectuspede.net</td>
              <td>0800 1111</td>
              <td>Lobbes</td>
              <td>
                <span class="badge bg-success">Active</span>
              </td>
            </tr>
            <tr>
              <td>Hamilton</td>
              <td>mauris@diam.org</td>
              <td>0800 256 8788</td>
              <td>Sanzeno</td>
              <td>
                <span class="badge bg-success">Active</span>
              </td>
            </tr>
            <tr>
              <td>Harding</td>
              <td>Lorem.ipsum.dolor@etnetuset.com</td>
              <td>0800 1111</td>
              <td>Obaix</td>
              <td>
                <span class="badge bg-success">Active</span>
              </td>
            </tr>
            <tr>
              <td>Emmanuel</td>
              <td>eget.lacus.Mauris@feugiatSednec.org</td>
              <td>(016977) 8208</td>
              <td>Saint-Remy-Geest</td>
              <td>
                <span class="badge bg-success">Active</span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

@stop