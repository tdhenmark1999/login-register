<link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">

<style type="text/css">
	@media (max-width: 576px) {
		.d-sm-none {
			display: none;
		}
		.d-sm-block {
			display: block;
		}
	}
	.help-block {
		color: red;
	}
	.chairman {
		background-color: #16a085 !important;
		color: white !important;
	}
	 .chairman::placeholder{
		color: white !important;
	}
	.accre::placeholder {
		color: white !important;
	}
	.hide {
		display: none;
	}

	.show {
		display: block;
	}
	.accre {
		background-color: #c0392b  !important;
		color: white !important;
	}
	.main-content {
		margin-left: 0px !important;
	}
	@media (min-width: 577px) {
		.d-md-none {
			display: none;
		}
		.d-md-block {
			display: block;
		}
	}

	@media (max-width: 764px) {
		.d-md1-none {
			display: none;
		 }
		.d-md1-block {
			display: block;
		}
	}
	.hide {
		display: none;
	}
	.show {
		display: block;
	}
	.text-white {
		color: white !important;
	}
	.bg-red {
		background-color: #760000 !important;
	}

	input[type="radio"][id^="cb"] {
    display: none;
}

.radio-forms {
    padding: 5px;
    display: block;
    position: relative;
    margin: 5px;
    cursor: pointer;
}

.radio-forms:before {
    background-color: white;
    color: white;
    content: " ";
    display: block;
    border-radius: 50%;
    position: absolute;
    top: -5px;
    left: -5px;
    width: 25px;
    height: 25px;
    text-align: center;
    line-height: 28px;
    transition-duration: 0.4s;
    transform: scale(0);
    z-index: 9999999;
}

.radio-forms img {
    height: 50%;
    width: 90px;
    transition-duration: 0.2s;
    transform-origin: 50% 50%;
}

:checked + .radio-forms {
    border-color: #ddd;
}

:checked + .radio-forms:before {
    content: "✓";
    background-color: grey;
    transform: scale(1);
}
</style>