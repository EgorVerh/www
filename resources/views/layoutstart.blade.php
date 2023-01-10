<html>
<head>
    <style>
    .sidebarright{float:right;background-color:#D3D3D3;height:175px;width:60px; text-align: center;margin: 10px 0 0 10px}

    .sidebarleft{float:left;background-color:#D3D3D3;height:175px;width:60px; text-align: center;margin: 10px 10px 0 0}

    header{background-color:#D3D3D3;height:60px; text-align: center;}

    footer{background-color:#D3D3D3; height:60px; text-align: center; margin-top:10%}
    p{padding-top:20px}
    </style>
	<title>Test my db</title>
</head>
<body>
    <header>
     <p>Header</p>
    </header>
    <div class="sidebarright">
     sidebar right
    </div>
    <div class="sidebarleft">
     sidebar left
    </div>
	<h1>My records</h1>
	 @yield('vvod')
</body>
<footer>
    <p>Footer</p>
</footer>
</html>