@extends("index");

@section('content')
<div class="row justify-content-center">
	<div class="col-md-6">
		<div class="content-body">
			<form action="{{ route('transaction.store') }}" class="mb-5">
				{{ csrf_field() }}
				<h3 class="mb-2">Input Transaksi</h3>
				<div class="multiplier">
					<div class="box-item">
					  <div class="row item">
					    <div class="item-header col-12">
					      <h4 class="title">Transaksi 1</h4>
					      <div class="btn btn-danger btn-del">Delete</div>
					    </div>
					    <div class="form-group col-6">
					      <label>Akun</label>
					      <select class="select-control" name="account_id" title="Jenis">
					      	@foreach ($accounts as $account)
						        <option value="{{ $account->id }}">{{ $account->name }}</option>
					      	@endforeach
					      </select>
					    </div>
					    <div class="form-group col-6">
					      <label>Transaksi</label>
					      <select class="select-control" name="transaction_id" title="Jenis">
					      	@foreach ($transactions as $transaction)
						        <option value="{{ $transaction->id }}">{{ $transaction->name }}</option>
					      	@endforeach
					      </select>
					    </div>
					    <div class="form-group col-md-12 col-sm-6">
					     	<label>Keterangan</label>
					        <input class="form-control" name="description" type="text" />
					    </div>
					    <div class="form-group col-md-12 col-sm-6">
                          <label>Start date</label>
                          <div class="date-control">
                            <input class="form-control" name="created_at" type="text" id="startDate" readonly="readonly"/>
                            <label class="fa fa-calendar" for="startDate"></label>
                          </div>
                        </div>
					    <div class="form-group col-md-12 col-sm-6">
					      <label>Nominal</label>
					      <div class="input-group readonly">
					        <div class="input-group-prepend">
					          <div class="input-group-text">Rp</div>
					        </div>
					        <input class="form-control" name="nominal" type="number"/>
					      </div>
					    </div>
					  </div>
					</div>
					<div class="btn-add"></div>
				</div>
				{{-- <hr/> --}}
	            <div class="form-action">
	            	<a class="btn btn-outline-secondary" href="{{ route('transaction') }}">Batal</a>
	            	<button class="btn btn-primary" type="submit">Submit</button>
	            </div>
			</form>
		</div>
	</div>
</div>
@endsection