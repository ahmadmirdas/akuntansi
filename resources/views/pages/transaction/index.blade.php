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
                <th>No.</th>
                <th>Nama Transaksi</th>
                <th>Akun</th>
                <th>Waktu</th>
                <th>Nominal</th>
                <th>Deskripsi</th>
                <th></th>
              </tr>

            </thead>
            <tbody>

                @foreach ($data['data'] as $item)
                    @php
                        $no = 1;
                    @endphp
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->transaction->name }}</td>
                        <td>{{ $item->account->name }}</td>
                        <td>{{ $item->created_at->format('d M Y') }}</td>
                        <td>{{ number_format($item->nominal) }}</td>
                        <td>{{ $item->description }}</td>
                    </tr>
                @endforeach

            </tbody>
          </table>
        </div>
	</div>
@endsection
