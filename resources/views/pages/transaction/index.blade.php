@extends("index");

@section('content')
	<div class="content-header">
	    <h2 class="title">Transaksi</h2>
	    <div class="right-content">
	    	<a class="btn btn-primary pull-right btn-add" href="{{ route('transaction.add') }}"> 
	    		<span>Tambah Transaksi</span>
	    	</a>
	    </div>
	</div>

	<div class="content-body">
		<div class="table-responsive-md">
          <table class="table table-custom">
            <thead>
              <tr>
                <th rowspan="2" width="1%">No.</th>
                <th rowspan="2">Nama Transaksi</th>
                <th colspan="3">Timeline</th>
                <th rowspan="2" width="1%">Status</th>
                <th rowspan="2" width="120px">Incentive Value (Rp)</th>
                <th rowspan="2" width="1%"></th>
              </tr>
              <tr>
                <th width="130px">Start Date</th>
                <th width="130px">End Date</th>
                <th width="130px">Actual Date</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td align="center">1.</td>
                <td>Terra Logistics</td>
                <td align="center">12/08/2018</td>
                <td align="center">12/12/2018</td>
                <td align="center">01/12/2018</td>
                <td> <span class="badge badge-info status">on progress</span></td>
                <td align="right">2.000.000</td>
                <td>
                  <div class="dropdown">
                    <button class="btn btn-outline-secondary btn-sm" type="button" data-toggle="dropdown">Action</button>
                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="project-detail.html">Detail</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#modalDelete" data-toggle="modal">Delete</a></div>
                  </div>
                </td>
              </tr>
              <tr>
                <td align="center">2.</td>
                <td>Terra Logistics</td>
                <td align="center">12/08/2018</td>
                <td align="center">12/12/2018</td>
                <td align="center">01/12/2018</td>
                <td> <span class="badge badge-success status">on time</span></td>
                <td align="right">2.000.000</td>
                <td>
                  <div class="dropdown">
                    <button class="btn btn-outline-secondary btn-sm" type="button" data-toggle="dropdown">Action</button>
                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="project-detail.html">Detail</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#modalDelete" data-toggle="modal">Delete</a></div>
                  </div>
                </td>
              </tr>
              <tr>
                <td align="center">3.</td>
                <td>Terra Logistics</td>
                <td align="center">12/08/2018</td>
                <td align="center">12/12/2018</td>
                <td align="center">01/12/2018</td>
                <td> <span class="badge badge-warning status">delayed</span></td>
                <td align="right">2.000.000</td>
                <td>
                  <div class="dropdown">
                    <button class="btn btn-outline-secondary btn-sm" type="button" data-toggle="dropdown">Action</button>
                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="project-detail.html">Detail</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#modalDelete" data-toggle="modal">Delete</a></div>
                  </div>
                </td>
              </tr>
              <tr>
                <td align="center">4.</td>
                <td>Terra Logistics</td>
                <td align="center">12/08/2018</td>
                <td align="center">12/12/2018</td>
                <td align="center">01/12/2018</td>
                <td> <span class="badge badge-danger status">no incentive</span></td>
                <td align="right">2.000.000</td>
                <td>
                  <div class="dropdown">
                    <button class="btn btn-outline-secondary btn-sm" type="button" data-toggle="dropdown">Action</button>
                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="project-detail.html">Detail</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#modalDelete" data-toggle="modal">Delete</a></div>
                  </div>
                </td>
              </tr>
              <tr>
                <td align="center">5.</td>
                <td>Terra Logistics</td>
                <td align="center">12/08/2018</td>
                <td align="center">12/12/2018</td>
                <td align="center">01/12/2018</td>
                <td> <span class="badge badge-info status">on progress</span></td>
                <td align="right">2.000.000</td>
                <td>
                  <div class="dropdown">
                    <button class="btn btn-outline-secondary btn-sm" type="button" data-toggle="dropdown">Action</button>
                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="project-detail.html">Detail</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#modalDelete" data-toggle="modal">Delete</a></div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
	</div>
@endsection