<html>
<head>
    <title>Inventory Tools</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    {{ HTML::style('public/css/bootstrap.min.css') }}

    {{ HTML::style('public/css/business-casual.css') }}

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
	
	<!-- jQuery -->
	{{ HTML::script('public/js/jquery.js') }}
    <!-- Bootstrap Core JavaScript -->
	{{ HTML::script('public/js/bootstrap.min.js') }}

    <!-- Script to Activate the Carousel -->
    <script>
	    $('.carousel').carousel({
	        interval: 5000 //changes the speed
	    })
    </script>

    <!-- Table Report -->
    <style type="text/css">
        th, td { white-space: nowrap; }
        div.dataTables_wrapper {
            width: 1200px;
            margin: 0 auto;
        }

    </style>

    {{ HTML::style('public/css/jquery.dataTables.css') }}

    {{ HTML::script('public/js/jquery-1.11.1.min.js') }}
    {{ HTML::script('public/js/jquery.dataTables.min.js') }}

    <script type="text/javascript">
    $(document).ready(function() {
        $('#example').dataTable( {
            "scrollY": 200,
            "scrollX": true
        } );
    } );
    </script>

	@yield('css')
</head>


<body>
	<div class="brand">Inventory Tools</div>
    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Inventory Tools</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                       	{{ HTML::link('/' , 'Home') }}
                    </li>
                    <li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Master <span class="caret"></span></a>
					  <ul class="dropdown-menu" role="menu">
						<li>{{ HTML::link('/item' , 'Master Item') }}</li>                        
                        <li>{{ HTML::link('/itemset' , 'Master Item Set') }}</li>
						<li>{{ HTML::link('/user' , 'Master User') }}</li>
						<li>{{ HTML::link('/supplier' , 'Master Supplier') }}</li>
                        <li>{{ HTML::link('/salesman' , 'Master Salesman') }}</li>
                        <li>{{ HTML::link('/customer' , 'Master Customer') }}</li>
                        <li>{{ HTML::link('/area' , 'Master Area') }}</li>
                        <li>{{ HTML::link('/region' , 'Master Region') }}</li>
                        <li>{{ HTML::link('/warehouse' , 'Master Warehouse') }}</li>

					  </ul>
					</li>
                    <li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Transaction <span class="caret"></span></a>
					  <ul class="dropdown-menu" role="menu">
						<li> Transaction External</li>
						<li class="divider"></li>
						<li><a href="#">Inquiry</a></li>
						<li><a href="#">Quotation</a></li>
						<li><a href="#">Pre Order</a></li>
						<li><a href="#">Sales Order</a></li>
						<li class="divider"></li>
						
						<li> Transaction Internal</li>
						<li class="divider"></li>
						<li><a href="#">Inquiry</a></li>
						<li><a href="#">Quotation</a></li>
						<li><a href="#">Pre Order</a></li>
						<li><a href="#">Sales Order</a></li>
					  </ul>
					</li>
                    <li>
                        <a href="#">Utilities</a>
                    </li>
                    @if(Session::has('role'))
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{Session::get('name')}} <span class="caret"></span></a>
                              <ul class="dropdown-menu" role="menu">
                                <li> {{ HTML::link('/logout' , 'Logout') }}</li>
                              </ul>
                        </li>
                    @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<!-- Content -->
    <div class="container-fluid">
    	@yield('content')
    </div>
<!-- End of container -->
 
<!-- Static Footer-->
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<p>Copyright &copy; Your Website 2015</p>
			</div>
		</div>
	</div>
	</footer>
</body>

</html>
