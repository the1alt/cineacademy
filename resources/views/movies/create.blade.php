@extends('layout')

@section('css')
    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin-tools/admin-forms/css/admin-forms.css')}}">
@endsection

@section('content')

  <section id="content" class=" animated fadeIn">

    <!-- begin: .tray-center -->
    <div class="content">

        <div class="center-block">

          <!-- Begin: Content Header -->
          <div class="content-header">
            <h2> Ajouter un film</h2>
          </div>

          <!-- Begin: Admin Form -->
          <div class="admin-form theme-danger">
            <div class="panel heading-border panel-danger">
              <div class="panel-body bg-light">
                <form method="post" action=" {{ route('movies.create') }}" id="form-ui" enctype='multipart/form-data' >
                  <div class="section-divider mb40" id="spy1">
                    <span>Form UI Elements</span>
                  </div>
                  <!-- .section-divider -->
                  <div class="row">
                    <div class="col-md-3">
                      <div class="section">
                        <label class="field select">
                          <select id="type" name="type" class="form-control">
                            <option value="" selected disabled>Type de film</option>
                            <option value="long-métrage">Long-Métrage</option>
                            <option value="court-métrage">Court-Métrage</option>
                          </select>
                          <i class="arrow"></i>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-9">
                      <div class="section">
                        <div class="smart-widget sm-left sml-50">
                          <label class="field">
                            <input type="text" name="title" id="title" class="gui-input" placeholder="Titre du film">
                          </label>
                          <label for="sm3" class="button">
                            <i class="fa fa-pencil"></i>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="section">
                        <label class="field prepend-icon">
                          <input type="time" name="duration" id="duration" class="gui-input" placeholder="durée">
                          <label for="duration" class="field-icon">
                            <i class="fa fa-clock-o"></i>
                          </label>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="section">
                        <label class="field prepend-icon">
                          <input type="date" name="dateRelease" id="dateRelease" class="gui-input" placeholder="Date de sortie">
                          <label for="firstname" class="field-icon">
                            <i class="fa fa-clock-o"></i>
                          </label>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="section">
                        <label for="image" class="field file">
                        <span class="button btn-danger"> Image </span>
                        <input type="file" class="gui-file" name="image" id="image" onchange="document.getElementById('uploader1').value = this.value;" accept="image/*" capture="capture">
                        <input type="text" class="gui-input" id="uploader1" placeholder="no file selected" readonly="">
                      </label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="section">
                        <label class="field prepend-icon">
                          <input type="url" name="video" id="video" class="gui-input" placeholder="video">
                          <label for="video" class="field-icon">
                            <i class="fa fa-globe"></i>
                          </label>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="section">
                        <label for="synopsis" class="field prepend-icon">
                          <textarea class="gui-textarea" id="synopsis" name="synopsis" placeholder="Synopsis"></textarea>
                          <label for="synopsis" class="field-icon">
                            <i class="fa fa-comments"></i>
                          </label>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="section">
                        <label for="description" class="field prepend-icon">
                          <textarea class="gui-textarea" id="description" name="description" placeholder="Description"></textarea>
                          <label for="synopsis" class="field-icon">
                            <i class="fa fa-comments"></i>
                          </label>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="section">
                      <div class="col-md-4 pr40 border-right">
                        <span class="rating block">
                          <span class="lbl-text">Note de la presse</span>


                          <input class="rating-input" id="r5" type="radio" name="custom" value="5">
                          <label class="rating-star" for="r5">
                            <i class="fa fa-star"></i>
                          </label>
                          <input class="rating-input" id="r4" type="radio" name="custom" value="4">
                          <label class="rating-star" for="r4">
                            <i class="fa fa-star"></i>
                          </label>
                          <input class="rating-input" id="r3" type="radio" name="custom" value="3">
                          <label class="rating-star" for="r3">
                            <i class="fa fa-star"></i>
                          </label>
                          <input class="rating-input" id="r2" type="radio" name="custom" value="2">
                          <label class="rating-star" for="r2">
                            <i class="fa fa-star"></i>
                          </label>
                          </label>
                          <input class="rating-input" id="r1" type="radio" name="custom" value="1">
                          <label class="rating-star" for="r1">
                            <i class="fa fa-star"></i>
                          </label>
                          </label>
                          <input class="rating-input" id="r0" type="radio" name="custom" value="0">
                          <label class="rating-star" for="r0">
                            <i class="fa fa-times"></i>
                          </label>
                        </span>
                      </div>
                      <div class="col-md-2">
                        <div class="section">
                          <label class="field select">
                            <select id="langue" name="langue" class="form-control">
                              <option value="" selected disabled>langue</option>
                              <option value="long-métrage">FR</option>
                              <option value="court-métrage">EN</option>
                              <option value="court-métrage">ES</option>
                              <option value="court-métrage">IT</option>
                            </select>
                            <i class="arrow"></i>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="section">
                          <label class="field select">
                            <select id="BO" name="BO" class="form-control">
                              <option value="" selected disabled>BO</option>
                              <option value="VO">VO</option>
                              <option value="VOST">VOST</option>
                              <option value="VOSTFR">VOSTFR</option>
                              <option value="VF">VF</option>
                            </select>
                            <i class="arrow"></i>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="section">
                          <div class="option-group field">
                            <label class="block mt15 option option-primary">
                              <input type="checkbox" name="visible" id="visible" value="visible">
                              <span class="checkbox"></span> Au cinéma
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="section">
                          <div class="option-group field">
                            <label class="block mt15 option option-primary">
                              <input type="checkbox" name="cover" id="cover" value="cover">
                              <span class="checkbox"></span> Cover
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="smart-widget sm-left sml-50">
                        <label class="field">
                          <input type="text" name="distributeur" id="distributeur" class="gui-input" placeholder="Distributeur">
                        </label>
                        <label for="distributeur" class="button">
                          <i class="fa fa-pencil"></i>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="smart-widget sm-left sml-50">
                        <label class="field">
                          <input type="number" name="annee" id="annee" class="gui-input" placeholder="année">
                        </label>
                        <label for="annee" class="button">
                          <i class="fa fa-pencil"></i>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="smart-widget sm-left sml-50">
                        <label class="field">
                          <input type="number" name="budget" id="budget" class="gui-input" placeholder="Budget">
                        </label>
                        <label for="budget" class="button">
                          <i class="fa fa-dollar"></i>
                        </label>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>

          </div>

        </div>
      </div>
      <!-- end: .tray-center -->
  </section>
@endsection
