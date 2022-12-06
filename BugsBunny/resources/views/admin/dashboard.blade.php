@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
      <div class="d-flex justify-content-between flex-wrap">
        <div class="d-flex align-items-end flex-wrap">
          <div class="me-md-3 me-xl-5">
            @if(session('message'))
              <h2>{{session('message')}}</h2>
            @endif
            <p class="mb-md-0">Your analytics dashboard template.</p>
          </div>
          <div class="d-flex">
            <i class="mdi mdi-home text-muted hover-cursor"></i>
            <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
            <p class="text-primary mb-0 hover-cursor">Analytics</p>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-end flex-wrap">
          <button type="button" class="btn btn-light bg-white btn-icon me-3 d-none d-md-block ">
            <i class="mdi mdi-download text-muted"></i>
          </button>
          <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
            <i class="mdi mdi-clock-outline text-muted"></i>
          </button>
          <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
            <i class="mdi mdi-plus text-muted"></i>
          </button>
          <button class="btn btn-primary mt-2 mt-xl-0">Generate report</button>
          

          <div class="col-lg-12 stretch-card">
            <div class="card">
              <div class="card-body">
              
                
                <div class="table-responsive pt-3">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>
                          #
                        </th>
                        <th>
                          User name
                        </th>
                        <th>
                          Order date
                        </th>
                        <th>
                          Check-in
                        </th>
                        <th>
                          Check-out
                        </th>
                        <th>
                          Room type
                        </th>
                        <th>
                          Status
                        </th>
                        <th>
                          Action
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="table-info">
                        <td>1</td>
                        <td>Narendra</td>
                        <td>29 august 2022</td>
                        <td>3 september 2022</td>
                        <td>5 september 2022</td>
                        <td>Delux</td>
                        <td>Not confirmed</td>
                        <td>
                            <a href="#" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn btn-info btn-sm"><i class="mdi mdi-account"></i></a>
                            <a href="#" class="btn btn-info btn-sm"><i class="mdi mdi-account-card-details"></i></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- script --}}
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
@endsection