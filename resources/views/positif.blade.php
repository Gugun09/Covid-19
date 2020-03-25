<!DOCTYPE html>
<html>
<head>
	<title>Tes</title>
	<script type="text/javascript" src="{{ asset('assets/js/setahun.js') }}"></script>
	<style type="text/css">
		/* CSS */

body{
	margin: 0;
	margin: 0;
}

section{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100vh;
	font-family: sans-serif;
	box-sizing: border-box;
	padding: 100px;
	transition: 0.5s;
}

ul{
	position: absolute;
	top: 20px;
	right: 20px;
	margin: 0;
	padding: 0;
	width: 100px;
	height: 30px;
	z-index: 1;
	border: 1px solid #000;
	cursor: pointer;
	overflow: hidden;
}

ul li{
	list-style: none;
	width: 100%;
	height: 60px;
	text-align: center;
	text-transform: uppercase;
	transition: 0.5s;
}

ul li span{
	display: block;
	height: 30px;
	line-height: 30px;
	color: #262626;
	background: #ffffff;
}

ul li span:nth-child(1){
	background-color: #262626;
	color: #ffffff;
}

ul.active li{
	transform: translateY(-30px);
}

section.dark{
	background: #262626;
	color: #ffffff;
}

ul.active{
	border-color: #ffffff;
}
	</style>
</head>
<body>
	<!DOCTYPE html>
<html>
<head>
	<title>Jam (Aktif) With JavaScript</title>
</head>
<body>
	<!-- Menampilkan Jam (Aktif) -->
	<div id="clock"></div>

		<!-- Menampilkan Hari, Bulan dan Tahun -->
		<br>
	    <script language='JavaScript'>document.write(tanggallengkap);</script>

</body>
</html>
	<section>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
	</section>
	<ul>
		<li>
			<span>Dark</span>
			<span>Light</span>
		</li>
	</ul>
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
	<script>
		$(document).ready(function(){
			$('ul').click(function(){
				$('ul').toggleClass('active')
				$('section').toggleClass('dark')
			})
		})
	</script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Countdown Timer Download | Kursus Web YELLOWWEB.ID</title>
	<script type="text/javascript">
		
		var counter = 10;
		function countDown(){
			if(counter >= 0){
				document.getElementById("timer").innerHTML = counter;
			} else {
				download();
				return;
			}
			counter -=1;

			var counter2 = setTimeout("countDown()",1000);
			return;
		}

		function download(){
			document.getElementById("link").innerHTML = "<a href='#'>Download</a>";
		}

	</script>
</head>
<body onload="countDown();">

	<h3>File Download</h3>
	<em>Link download akan muncul dalam <span id="timer"></span> detik</em>

	<br>
	
	=> <span id="link"></span>
<script type="text/javascript" src="{{ asset('assets/js/waktu.js') }}"></script>
</body>
</html>