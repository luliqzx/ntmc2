@extends('master.admin_template', ['page_title'=>'GCM User'])
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-14">
			<div class="panel panel-default">
				<div class="panel-body">
				<p> <a class="btn btn-primary" href="{{ url('/admin/books/create') }}">Tambah</a> </p>
						{!! $html->table(['class'=>'table-striped']) !!}
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection
	@section('scripts')
	{!! $html->scripts() !!}
	@endsection