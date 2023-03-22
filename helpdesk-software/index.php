<!DOCTYPE html>
<html lang="en">
<head>
	<title> Helpdesk Software </title>
	<meta name="viewport" content="width=device-width">

	<style>
	body
	{
		margin: 0px;
		padding: 0px;
	}

	@font-face {
		font-family: Eras Demi ITC;
		src: url(./themes/default/fonts/ERASDEMI.ttf);
	}

	.container
	{
		margin-left: auto;
		margin-right: auto;
		margin-left: calc(20%);
		margin-right: calc(20%);
	}

	.banner
	{
		background: #1e3846; /* Dark Blue */
		color: #ffffff; /* White */
		font-family: Eras Demi ITC;
		font-size: 65px;
		height: 125px;
		width: 100%;
		line-height: 60px;
	}

	.submenu
	{
		background: #3f7e98; /* Light Blue */
		color: #ffffff; /* White */
		font-family: Century Gothic;
		font-size: 20px;
		height: 65px;
		line-height: 60px;
		width: 100%;
	}

	.left
	{
		background: green;
		float: left;
		-webkit-transition: padding 1s; /* For Safari 3.1 to 6.0 */
		transition: padding 1s;
	}

	.right
	{
		background: green;
		float: right;
		-webkit-transition: padding 1s; /* For Safari 3.1 to 6.0 */
		transition: padding 1s;
	}
		
	.banner
	{
		background: #1e3846; /* Dark Blue */
		color: #ffffff; /* White */
		font-family: Eras Demi ITC;
		font-size: 20px;
		height: 50px;
		width: 100%;
		line-height: 50px;
		-webkit-transition: font-size 1s, height 1s, line-height 1s; /* For Safari 3.1 to 6.0 */
		transition: font-size 1s, height 1s, line-height 1s;
	}

	/* Default styles first then media queries */
	@media screen and (min-width: 400px)
	{
		.left
		{
			background: red;
			float: left;
			padding: 5px;
			-webkit-transition: padding 1s; /* For Safari 3.1 to 6.0 */
			transition: padding 1s;
		}
		
		.right
		{
			background: red;
			float: right;
			padding: 5px;
			-webkit-transition: padding 1s; /* For Safari 3.1 to 6.0 */
			transition: padding 1s;
		}
		
		.banner
		{
			background: #1e3846; /* Dark Blue */
			color: #ffffff; /* White */
			font-family: Eras Demi ITC;
			font-size: 25px;
			height: 65px;
			width: 100%;
			line-height: 60px;
			-webkit-transition: font-size 1s, height 1s, line-height 1s; /* For Safari 3.1 to 6.0 */
			transition: font-size 1s, height 1s, line-height 1s;
		}
	}

	@media screen and (min-width: 600px)
	{
		.left
		{
			background: blue;
			float: left;
			padding: 15px;
			-webkit-transition: padding 1s; /* For Safari 3.1 to 6.0 */
			transition: padding 1s;
		}
		
		.right
		{
			background: blue;
			float: right;
			padding: 15px;
			-webkit-transition: padding 1s; /* For Safari 3.1 to 6.0 */
			transition: padding 1s;
		}
		
		.banner
		{
			background: #1e3846; /* Dark Blue */
			color: #ffffff; /* White */
			font-family: Eras Demi ITC;
			font-size: 30px;
			height: 105px;
			width: 100%;
			line-height: 100px;
			-webkit-transition: font-size 1s, height 1s, line-height 1s; /* For Safari 3.1 to 6.0 */
			transition: font-size 1s, height 1s, line-height 1s;
		}
	}

	@media screen and (min-width: 1000px)
	{
		.left
		{
			background: pink;
			float: left;
			padding: 25px;
			-webkit-transition: padding 1s; /* For Safari 3.1 to 6.0 */
			transition: padding 1s;
		}
		
		.right
		{
			background: pink;
			float: right;
			padding: 25px;
			-webkit-transition: padding 1s; /* For Safari 3.1 to 6.0 */
			transition: padding 1s;
		}
		
		.banner
		{
			background: #1e3846; /* Dark Blue */
			color: #ffffff; /* White */
			font-family: Eras Demi ITC;
			font-size: 40px;
			height: 115px;
			width: 100%;
			line-height: 120px;
			-webkit-transition: font-size 1s, height 1s, line-height 1s; /* For Safari 3.1 to 6.0 */
			transition: font-size 1s, height 1s, line-height 1s;
		}
	}

	@media screen and (min-width: 1400px)
	{
		.left
		{
			background: yellow;
			float: left;
			padding: 35px;
			-webkit-transition: padding 1s; /* For Safari 3.1 to 6.0 */
			transition: padding 1s;
		}
		
		.right
		{
			background: yellow;
			float: right;
			padding: 35px;
			-webkit-transition: padding 1s; /* For Safari 3.1 to 6.0 */
			transition: padding 1s;
		}
		
		.banner
		{
			background: #1e3846; /* Dark Blue */
			color: #ffffff; /* White */
			font-family: Eras Demi ITC;
			font-size: 50px;
			height: 125px;
			width: 100%;
			line-height: 120px;
			-webkit-transition: font-size 1s, height 1s, line-height 1s; /* For Safari 3.1 to 6.0 */
			transition: font-size 1s, height 1s, line-height 1s;
		}
	}
	</style>
</head>

<body>
	<div class="banner">
		<div class="container">
			Helpdesk Software
		</div>
	</div>

	<div class="submenu">
		<div class="container">
			Client Area
		</div>
	</div>

	<div class="container">
		<div class="left">
			Test Left
		</div>

		<div class="right">
			Test Right
		</div>
	</div>
</body>
</html>