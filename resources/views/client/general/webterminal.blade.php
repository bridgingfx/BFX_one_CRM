@extends('layouts.app')
@section('content')

	<div class="content-body">
		<div class="container-fluid pt-0">
			<div class="row">
				<div class="col-xl-12">
					<div class="card">
						<div class="card-header border-0">
							<div class="d-flex flex-wrap">
								<select class="default-select p2p-select width-200 mb-2" aria-label="Default" tabindex="0" name="status" >
									<option value="25">1234567890</option>
									<option value="26">1234567891</option>
									<option value="27">1234567892</option>
								</select>
								<div class="">Account ID : 1234567890</div>
								<div class="">Password : qwertyuiopasd</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-xl-12 col-xxl-12">
					<div class="row">
						<div class="col-xl-12">
							<div class="card ">
								<div class="card-body py-0 mt-3 mb-3">
									<iframe id="termialmt5" src="https://webterminal.fxlivecapital.com/terminal?mode=connect&amp;theme-mode=2&amp;utm_source=FXLiveCapital" class="rounded border p-3 w-100" style="height: 80vh;"></iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>

@endsection