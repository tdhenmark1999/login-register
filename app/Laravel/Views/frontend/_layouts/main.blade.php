<!DOCTYPE html>
<html>
<head>
	@include('frontend._components.metas')

	@yield('page-styles')
	
</head>

<body data-topbar="dark" data-layout="horizontal">	

			@yield('content')
				
			@include('frontend._components.scripts')
		

</body>
</html>