@extends('layouts.index')

@section('content')

	<div class="container">
		<div class="row">
				<label for="typeOfService">What is the problem?<br></label>
					<select onchange="typeService()" class="typeOfService">
						<option id="defaultService">----</option>
						<option id="adv">Forgot my password</option>
						<option id="sce">Forgot my username</option>
						<option id="trans">I can't login!</option>
					</select>
			</div>
	</div>

@stop