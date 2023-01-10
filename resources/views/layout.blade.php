<html>
<head>
	<style>
    .sidebarright{float:right;background-color:#D3D3D3;height:25%;width:60px; text-align: center;margin: 10px 0 0 10px;}

    .sidebarleft{float:left;background-color:#D3D3D3;height:25%;width:60px; text-align: center;margin: 10px 10px 0 0;}

    header{background-color:#D3D3D3;height:60px; text-align: center;}

    footer{background-color:#D3D3D3; height:60px; text-align: center;margin-top:10%}
    p{padding-top:20px}
	p.sidebars{padding-top:100%}
    </style>
	<title>Test my db</title>
</head>
<body>
	<header>
     <p>Header</p>
    </header>
    <div class="sidebarright">
     <p class="sidebars">sidebar right</p>
    </div>
    <div class="sidebarleft">
	<p class="sidebars">sidebar left</p>
    </div>
	<h1>My records</h1>
	 @yield('vvod')
	 <input type="button" onclick="history.back();" value="Назад"/>
</body>
<footer>
	<p>Footer</p>
</footer>
</html>