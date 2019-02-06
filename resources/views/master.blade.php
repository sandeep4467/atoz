<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>A to Z Finance | Independent Mortgage Adviser London | Mortgages London</title>
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="/resources/demos/style.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<script>
		$( function() {
		    $( ".datepicker" ).datepicker({
		      changeMonth: true,
		      changeYear: true
		    });
		});
		</script>
	</head>
	<body style="font-family: 'Lato';margin: 0;">

		@if ($errors->any())
		    <div class="alert alert-danger">

		        <ul>
		            @foreach ($errors->all() as $error)
		                <li><i class="fas fa-exclamation-triangle"></i> {{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

		<table style="background: #003468;width: 100%;margin-bottom: 30px">
			<tr>
				<td style="height: 40px"></td>
			</tr>
		</table>
		<table align="center" style="width:100%; max-width: 70%;">
			<tr style="width:100%;">
				<td style="text-align:center;">
					<a href="{{ url('') }}"><img style="width:300px;  margin-bottom: 50px;" src="{{ asset('img/logo.png') }}" alt="a2z"/></a>
				</td>
			</tr>
		</table>
		@yield('content')
		<table style="background: #003468;width: 100%;margin-top: 30px">
			<tr>
				<td style="height: 40px;text-align: center;color: #fff;">© Copyright 2019. All rights reserved</td>
			</tr>
		</table>
	</body>
	<style type="text/css">
		button.download-pdf {
		background: #e31e24;
		color: #fff;
		border: 0;
		padding: 15px;
		width: 200px;
		border-radius: 3px;
		font-size: 19px;
		margin: 10px 23px;
		}
		i.far.fa-file-pdf{
			font-size: 41px;
		color: #e31e24;
		vertical-align: middle;
		}
		.alert.alert-danger {
		    background: #ca0d0d;
		    color: #fff;
		    text-align: center;
		    padding: 2px;
		    font-size: 22px;
		}		
	</style>
</html>