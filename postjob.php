<?php 
require_once 'vendor/autoload.php'; 
require_once 'classes/Form.php';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BeaconU Job Listing</title>
	<link rel="stylesheet" href="css/style.css">
	<!-- twitter bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="container">

<header id="header">
	<div id="logo">
		<a href="http://beaconu.decipherinc.com/">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 140"><g><rect x="213.5" y="76.4" fill="#C0D72F" width="5" height="16.6"></rect><path fill="#C0D72F" d="M230.5 75.8c-2.5 0-4.2 1.1-5.3 2.4v-1.8h-4.7v20.5h4.9V93v-1.5c0.6 0.6 2 2.1 5 2.1c4.7 0 8.1-3.9 8.1-8.7 C238.6 81 236.3 75.8 230.5 75.8 M233.6 84.7c0 2.1-1.6 4.2-4.1 4.2c-1.2 0-2.2-0.5-3-1.2c-0.7-0.7-1.2-1.8-1.2-2.9 c0-1.2 0.4-2.3 1.2-3c0.7-0.8 1.8-1.3 3-1.3C232.2 80.5 233.6 82.7 233.6 84.7L233.6 84.7z"></path><path fill="#C0D72F" d="M249 75.8c-1.8 0-3.4 0.6-4.3 2.1v-2.1v-4.9h-5V93h5v-9.2c0-0.4 0-1.2 0.3-1.9c0.3-0.7 1-1.3 2.4-1.3 c1.1 0 1.7 0.4 2.1 1c0.4 0.6 0.5 1.5 0.5 2.4v9h5v-9.2c0-2.1-0.2-4.1-1.1-5.5C253 76.7 251.5 75.8 249 75.8"></path><path fill="#C0D72F" d="M264.8 75.8c-5 0-8.7 4.3-8.7 8.9c0 4.9 4 8.8 8.8 8.8c1.7 0 3.3-0.5 4.7-1.5c1.4-1 2.6-2.4 3.4-4.2h-5.1 c-0.6 0.9-1.4 1.6-3 1.6c-1.9 0-3.6-1.2-3.8-2.9h12.3c0.4-3-0.2-5.7-2.3-7.9C269.5 76.8 267.3 75.8 264.8 75.8 M261.1 82.6 c0.1-0.8 1.1-2.6 3.7-2.6c2.6 0 3.6 1.9 3.7 2.6H261.1z"></path><path fill="#C0D72F" d="M279.4 78.3v-1.9h-4.7V93h5v-8.9c0-2.3 1.2-3.3 3.7-3.3h0.2v-5C280.8 75.8 279.9 77.4 279.4 78.3"></path><path fill="#C0D72F" d="M215.9 66.1c-2.1 0-3.9 1.7-3.9 3.9c0 2.1 1.7 3.9 3.9 3.9c2.1 0 3.9-1.7 3.9-3.9 C219.8 67.9 218 66.1 215.9 66.1 M215.9 73c-1.6 0-3-1.3-3-3c0-1.6 1.3-3 3-3c1.6 0 3 1.3 3 3C218.9 71.6 217.6 73 215.9 73"></path><path fill="#A6A698" d="M215.9 67.9c-1.1 0-2.1 0.9-2.1 2.1c0 1.1 0.9 2.1 2.1 2.1c1.1 0 2.1-0.9 2.1-2.1 C218 68.9 217.1 67.9 215.9 67.9"></path><path fill="#C0D72F" d="M207.3 86.7c-0.5 1-1.5 2.2-3.6 2.2c-2.3 0-3.9-1.8-3.9-4.2c0-1.2 0.4-2.3 1.1-3c0.7-0.8 1.7-1.2 2.9-1.2 c2.1 0 3 1.2 3.6 2.3h5c-0.8-4.1-4.4-7-8.8-7c-2.8 0-5.3 1.3-6.9 3.3v0c-1.2 1.5-1.9 3.4-1.9 5.5c0 2.5 1 4.7 2.7 6.3l0 0 c1.6 1.6 3.8 2.5 6.2 2.5c4.5 0 7.8-3.1 8.7-6.8H207.3z"></path><path fill="#C0D72F" d="M175.7 93V70.9h-5v6.9c-0.5-0.5-1.9-2-4.9-2c-4.2 0-8.2 3.2-8.2 8.8c0 5 3.3 8.9 8.3 8.9 c3.3 0 4.5-1.6 5-2.3V93H175.7z M169.8 87.6c-0.8 0.8-1.9 1.2-3.1 1.2c-2.3 0-4.1-1.7-4.1-4.2v0c0-1.9 1.3-4.1 4.2-4.1 c1.2 0 2.2 0.4 3 1.2c0.7 0.7 1.2 1.7 1.2 2.9C171 85.8 170.6 86.9 169.8 87.6"></path><path fill="#C0D72F" d="M191.5 78.4c-1.6-1.6-3.7-2.6-6.3-2.6c-2.9 0-5.3 1.4-6.8 3.5l0 0c-1.2 1.5-1.8 3.4-1.8 5.4 c0 2.5 1 4.7 2.7 6.3l0 0c0.1 0.1 0.2 0.2 0.3 0.2l0 0c1.6 1.4 3.6 2.3 5.9 2.3c1.7 0 3.3-0.5 4.7-1.5c1.4-1 2.6-2.4 3.4-4.2h-5.1 c-0.6 0.9-1.4 1.5-3 1.5c-1.9 0-3.6-1.2-3.8-2.9h12.3C194.2 83.3 193.6 80.7 191.5 78.4 M181.6 82.6c0.1-0.8 1.1-2.6 3.7-2.6 c2.6 0 3.6 1.9 3.7 2.6H181.6z"></path><g><path fill="#C0D72F" d="M120.9 92.8V73.2h2.8v7h0.1c1.2-1.7 3-2.4 5-2.4c3.9 0 7.6 3.2 7.6 7.7c0 4.2-3.3 7.7-7.6 7.7 c-1.3 0-3.6-0.5-5.1-2.5h-0.1v2.1H120.9z M128.6 90.7c2.7 0 5-2.3 5-5.2c0-2.8-2.1-5.2-5-5.2c-3 0-5 2.6-5 5.2 C123.6 88.7 126.1 90.7 128.6 90.7z"></path><path fill="#C0D72F" d="M143.6 97.7h-2.9l2.1-5.2L137 78.1h3l4.3 11.4l4.4-11.4h3L143.6 97.7z"></path></g><g><path fill="#F79727" d="M6.9 2h10.6v18.7c3.7-3.7 8.8-5.5 13.8-5.5c13.4 0 22.2 11.7 22.2 23.4c0 8.8-5.8 23.7-22 23.7 c-8.5 0-12.2-3.8-14.9-6.8v5.3H6.9V2z M30.1 52.6c6.9 0 12.7-5.3 12.7-13.9c0-8.6-6.2-13.8-12.9-13.8c-8.1 0-13.1 6.8-13.1 13.3 C16.9 48 23.9 52.6 30.1 52.6z"></path></g><g><path fill="#F79727" d="M65.8 43.5c0.5 2.9 4.6 9.1 12.2 9.1c4.7 0 8.2-2 10.2-5.6h11.1c-2.5 7.9-10.9 15.3-21.3 15.3 c-13.4 0-23.3-10.5-23.3-23.4c0-12.5 9.2-23.7 23.2-23.7c14.5 0 22.8 11.9 22.8 23c0 2.1-0.3 3.9-0.6 5.3H65.8z M89.9 35 c-1.2-7.1-6.3-10.1-11.9-10.1c-4.3 0-10.5 1.9-12.5 10.1H89.9z"></path></g><g><path fill="#F79727" d="M148.5 60.8h-9.7v-5.5c-3.3 4-9.9 6.9-15.4 6.9c-11.4 0-21.5-9.1-21.5-23.8c0-13.5 9.9-23.3 22.1-23.3 c9 0 14.3 6.4 14.6 7.1h0.2v-5.6h9.7V60.8z M125.6 24.9c-8.7 0-13.1 7.5-13.1 14.1c0 7.5 5.6 13.6 13.1 13.6 c7.3 0 12.9-5.7 12.9-13.9C138.5 29.5 131.9 24.9 125.6 24.9z"></path></g><path fill="#F79727" d="M183.5 47.2c-2.2 3.2-5.8 5.4-10.2 5.4c-6.7 0-13-5.4-13-13.8c0-9.2 7.5-13.9 13-13.9 c4.3 0 8.3 2.5 10.7 6.4l11.1-1.2c-3.5-8.9-12.1-14.9-21.8-14.9c-12.6 0-23.5 10.3-23.5 23.6c0 12.6 10.4 23.5 23.5 23.5 c9.3 0 18-5.3 21.6-14.3L183.5 47.2z"></path><g><g><path fill="#F79727" d="M285.5 19.4h-0.9v-1.6h0.9v-2.4h1.7v2.4h1.1v1.6h-1.1v5.8h-1.7V19.4z"></path><path fill="#F79727" d="M289 17.9h1.6v0.6h0c0.1-0.2 0.6-0.9 1.9-0.9c0.4 0 1.4 0.1 2.1 1.1c0.8-1.1 1.8-1.1 2.4-1.1 c1.4 0 2.1 0.8 2.4 1.1c0.3 0.4 0.6 1.1 0.6 2.2v4.3h-1.8v-4.1c0-0.4 0-1.9-1.4-1.9c-0.5 0-1 0.3-1.2 0.7c-0.3 0.4-0.3 1-0.3 1.5 v3.8h-1.8v-4.1c0-1-0.4-1.9-1.5-1.9c-1.4 0-1.4 1.5-1.4 2.3v3.6H289V17.9z"></path></g></g><g><path fill="none" d="M210.4 28.9l15.8-1.7c-2-1.4-4.4-2.2-6.8-2.2C216.5 24.9 213 26.2 210.4 28.9z"></path><path fill="none" d="M219.4 52.6c2.9 0 5.5-1 7.5-2.6l-16.6-1.3C212.7 51.2 216 52.6 219.4 52.6z"></path><path fill="#F79727" d="M219.4 24.9c2.4 0 4.8 0.8 6.8 2.2l12.7-1.4c-4.3-6.5-11.6-10.5-19.5-10.5c-9.8 0-18.5 6.1-21.9 15.1 l12.9-1.4C213 26.2 216.5 24.9 219.4 24.9z"></path><path fill="#F79727" d="M219.4 52.6c-3.4 0-6.6-1.4-9.1-3.8l-12.7-1c3.5 8.4 11.9 14.5 21.7 14.5c8.3 0 16-4.2 20.2-11.3l-12.6-1 C224.9 51.6 222.3 52.6 219.4 52.6z"></path><polygon fill="#F79727" points="244.5,60.8 255,60.8 255,52.1 244.5,51.3"></polygon><polygon fill="#F79727" points="273.1,60.8 283.7,60.8 283.7,54.3 273.1,53.5"></polygon><path fill="#F79727" d="M266.3 15.2c-6.7 0-10.3 3.7-12.1 5.3v-3.8h-9.8v8.4l35-3.9C275.8 16.9 270.1 15.2 266.3 15.2z"></path><path fill="#FDD9BF" d="M238.9 25.7l-12.7 1.4c3.5 2.4 6 6.7 6 11.8c0 4.3-1.9 8.5-5.3 11.1l12.6 1c2-3.5 3.2-7.6 3.2-12.3 C242.7 33.8 241.3 29.4 238.9 25.7z"></path><path fill="#FDD9BF" d="M206.4 38.8c0-4.3 1.7-7.6 4-10l-12.9 1.4c-1 2.6-1.6 5.5-1.6 8.5c0 3.1 0.7 6.2 1.8 9l12.7 1 C208 46.4 206.4 42.9 206.4 38.8z"></path><path fill="#FDD9BF" d="M279.6 21.3C279.6 21.3 279.5 21.3 279.6 21.3l-35.1 3.8v26.2l10.6 0.8V39.8c0-3.7 0-8.3 1.9-11 c1.9-2.9 5.3-3.9 7.2-3.9c8.9 0 8.9 10.5 8.9 14.2v14.4l10.6 0.8V37C283.7 33.6 283.7 26.2 279.6 21.3z"></path></g></g><g><path fill="#F79727" d="M23.1 130.4c-1 0.5-3 1-5.6 1c-6 0-10.5-3.8-10.5-10.7c0-6.6 4.5-11.2 11.1-11.2c2.6 0 4.3 0.6 5 0.9 l-0.7 2.2c-1-0.5-2.5-0.9-4.3-0.9c-5 0-8.3 3.2-8.3 8.8c0 5.2 3 8.5 8.2 8.5c1.7 0 3.4-0.3 4.5-0.9L23.1 130.4z"></path><path fill="#F79727" d="M27.6 124c0.1 3.7 2.5 5.3 5.2 5.3c2 0 3.2-0.3 4.2-0.8l0.5 2c-1 0.4-2.6 0.9-5.1 0.9 c-4.7 0-7.5-3.1-7.5-7.7c0-4.6 2.7-8.2 7.2-8.2c5 0 6.3 4.4 6.3 7.2c0 0.6-0.1 1-0.1 1.3H27.6z M35.7 122c0-1.8-0.7-4.5-3.8-4.5 c-2.8 0-4 2.6-4.3 4.5H35.7z"></path><path fill="#F79727" d="M41.9 120.6c0-1.8 0-3.3-0.1-4.8h2.4l0.1 3h0.1c0.7-2 2.4-3.3 4.2-3.3c0.3 0 0.5 0 0.8 0.1v2.6 c-0.3-0.1-0.6-0.1-0.9-0.1c-2 0-3.3 1.5-3.7 3.6c-0.1 0.4-0.1 0.8-0.1 1.3v8.1h-2.7V120.6z"></path><path fill="#F79727" d="M56.2 111.5v4.4h4v2.1h-4v8.2c0 1.9 0.5 3 2.1 3c0.7 0 1.3-0.1 1.6-0.2l0.1 2.1c-0.5 0.2-1.4 0.4-2.5 0.4 c-1.3 0-2.3-0.4-3-1.2c-0.8-0.8-1.1-2.2-1.1-4V118h-2.4v-2.1h2.4v-3.7L56.2 111.5z"></path><path fill="#F79727" d="M66.4 111.6c0 0.9-0.7 1.7-1.8 1.7c-1 0-1.7-0.8-1.7-1.7c0-1 0.7-1.7 1.7-1.7 C65.8 109.8 66.4 110.6 66.4 111.6z M63.3 131.1v-15.2h2.8v15.2H63.3z"></path><path fill="#F79727" d="M71 131.1V118h-2.1v-2.1H71V115c0-4 2.4-6.6 6.6-6.6c1.4 0 3.1 0.4 3.9 1l-0.8 2.1 c-0.7-0.5-1.9-0.9-3.2-0.9c-2.9 0-3.8 2-3.8 4.5v0.8h8.9v15.2h-2.7V118h-6.1v13.1H71z"></path><path fill="#F79727" d="M98 130.5c-0.7 0.4-2.3 0.9-4.4 0.9c-4.6 0-7.6-3.1-7.6-7.8c0-4.7 3.2-8.1 8.2-8.1c1.6 0 3.1 0.4 3.8 0.8 l-0.6 2.1c-0.7-0.4-1.7-0.7-3.2-0.7c-3.5 0-5.4 2.6-5.4 5.8c0 3.5 2.3 5.7 5.3 5.7c1.6 0 2.6-0.4 3.4-0.8L98 130.5z"></path><path fill="#F79727" d="M109.7 131.1l-0.2-1.9h-0.1c-0.9 1.2-2.5 2.3-4.7 2.3c-3.1 0-4.7-2.2-4.7-4.4c0-3.7 3.3-5.7 9.2-5.7v-0.3 c0-1.3-0.3-3.5-3.5-3.5c-1.4 0-2.9 0.4-4 1.1l-0.6-1.8c1.3-0.8 3.1-1.4 5-1.4c4.7 0 5.8 3.2 5.8 6.2v5.7c0 1.3 0.1 2.6 0.3 3.7 H109.7z M109.3 123.3c-3-0.1-6.5 0.5-6.5 3.4c0 1.8 1.2 2.6 2.6 2.6c2 0 3.2-1.3 3.7-2.6c0.1-0.3 0.2-0.6 0.2-0.9V123.3z"></path><path fill="#F79727" d="M119.7 111.5v4.4h4v2.1h-4v8.2c0 1.9 0.5 3 2.1 3c0.7 0 1.3-0.1 1.6-0.2l0.1 2.1c-0.5 0.2-1.4 0.4-2.5 0.4 c-1.3 0-2.3-0.4-3-1.2c-0.8-0.8-1.1-2.2-1.1-4V118h-2.4v-2.1h2.4v-3.7L119.7 111.5z"></path><path fill="#F79727" d="M129.9 111.6c0 0.9-0.7 1.7-1.8 1.7c-1 0-1.7-0.8-1.7-1.7c0-1 0.7-1.7 1.7-1.7 C129.2 109.8 129.9 110.6 129.9 111.6z M126.8 131.1v-15.2h2.8v15.2H126.8z"></path><path fill="#F79727" d="M147.9 123.4c0 5.6-3.9 8.1-7.6 8.1c-4.1 0-7.3-3-7.3-7.8c0-5.1 3.3-8.1 7.6-8.1 C145 115.5 147.9 118.7 147.9 123.4z M135.8 123.5c0 3.3 1.9 5.9 4.6 5.9c2.6 0 4.6-2.5 4.6-5.9c0-2.6-1.3-5.9-4.6-5.9 C137.3 117.6 135.8 120.6 135.8 123.5z"></path><path fill="#F79727" d="M151.4 120c0-1.6 0-2.9-0.1-4.1h2.5l0.2 2.5h0.1c0.8-1.4 2.5-2.9 5-2.9c2.1 0 5.4 1.3 5.4 6.5v9.1h-2.8 v-8.8c0-2.5-0.9-4.5-3.5-4.5c-1.8 0-3.2 1.3-3.7 2.8c-0.1 0.3-0.2 0.8-0.2 1.3v9.2h-2.8V120z"></path><path fill="#F79727" d="M175.7 110.1c1.3-0.2 3.1-0.4 5.3-0.4c2.7 0 4.7 0.6 6 1.8c1.2 1 1.9 2.6 1.9 4.4c0 1.9-0.6 3.4-1.6 4.5 c-1.4 1.5-3.8 2.3-6.5 2.3c-0.8 0-1.6 0-2.2-0.2v8.5h-2.7V110.1z M178.4 120.4c0.6 0.2 1.4 0.2 2.3 0.2c3.3 0 5.3-1.6 5.3-4.5 c0-2.8-2-4.2-5-4.2c-1.2 0-2.1 0.1-2.6 0.2V120.4z"></path><path fill="#F79727" d="M191.9 120.6c0-1.8 0-3.3-0.1-4.8h2.4l0.1 3h0.1c0.7-2 2.4-3.3 4.2-3.3c0.3 0 0.5 0 0.8 0.1v2.6 c-0.3-0.1-0.6-0.1-0.9-0.1c-2 0-3.3 1.5-3.7 3.6c-0.1 0.4-0.1 0.8-0.1 1.3v8.1h-2.7V120.6z"></path><path fill="#F79727" d="M215.6 123.4c0 5.6-3.9 8.1-7.6 8.1c-4.1 0-7.3-3-7.3-7.8c0-5.1 3.3-8.1 7.6-8.1 C212.7 115.5 215.6 118.7 215.6 123.4z M203.5 123.5c0 3.3 1.9 5.9 4.6 5.9c2.6 0 4.6-2.5 4.6-5.9c0-2.6-1.3-5.9-4.6-5.9 C205 117.6 203.5 120.6 203.5 123.5z"></path><path fill="#F79727" d="M232.3 115.9c-0.1 1.1-0.1 2.3-0.1 4.2v8.9c0 3.5-0.7 5.6-2.2 7c-1.5 1.4-3.6 1.8-5.5 1.8 c-1.8 0-3.8-0.4-5.1-1.3l0.7-2.1c1 0.6 2.6 1.2 4.5 1.2c2.8 0 4.9-1.5 4.9-5.3v-1.7h-0.1c-0.9 1.4-2.5 2.6-4.9 2.6 c-3.8 0-6.5-3.2-6.5-7.4c0-5.2 3.4-8.1 6.9-8.1c2.6 0 4.1 1.4 4.8 2.6h0.1l0.1-2.3H232.3z M229.4 121.9c0-0.5 0-0.9-0.2-1.3 c-0.5-1.6-1.9-2.9-3.9-2.9c-2.6 0-4.5 2.2-4.5 5.8c0 3 1.5 5.5 4.5 5.5c1.7 0 3.2-1.1 3.8-2.8c0.2-0.5 0.2-1 0.2-1.5V121.9z"></path><path fill="#F79727" d="M236.6 120.6c0-1.8 0-3.3-0.1-4.8h2.4l0.1 3h0.1c0.7-2 2.4-3.3 4.2-3.3c0.3 0 0.5 0 0.8 0.1v2.6 c-0.3-0.1-0.6-0.1-0.9-0.1c-2 0-3.3 1.5-3.7 3.6c-0.1 0.4-0.1 0.8-0.1 1.3v8.1h-2.7V120.6z"></path><path fill="#F79727" d="M255.1 131.1l-0.2-1.9h-0.1c-0.9 1.2-2.5 2.3-4.7 2.3c-3.1 0-4.7-2.2-4.7-4.4c0-3.7 3.3-5.7 9.2-5.7v-0.3 c0-1.3-0.3-3.5-3.5-3.5c-1.4 0-2.9 0.4-4 1.1l-0.6-1.8c1.3-0.8 3.1-1.4 5-1.4c4.7 0 5.8 3.2 5.8 6.2v5.7c0 1.3 0.1 2.6 0.3 3.7 H255.1z M254.7 123.3c-3-0.1-6.5 0.5-6.5 3.4c0 1.8 1.2 2.6 2.6 2.6c2 0 3.2-1.3 3.7-2.6c0.1-0.3 0.2-0.6 0.2-0.9V123.3z"></path><path fill="#F79727" d="M261.9 120c0-1.6 0-2.9-0.1-4.1h2.4l0.1 2.5h0.1c0.9-1.4 2.3-2.8 4.8-2.8c2.1 0 3.7 1.3 4.3 3.1h0.1 c0.5-0.9 1.1-1.5 1.7-2c0.9-0.7 1.9-1.1 3.4-1.1c2 0 5 1.3 5 6.6v9h-2.7v-8.6c0-2.9-1.1-4.7-3.3-4.7c-1.6 0-2.8 1.2-3.3 2.5 c-0.1 0.4-0.2 0.9-0.2 1.4v9.4h-2.7V122c0-2.4-1.1-4.2-3.2-4.2c-1.7 0-3 1.4-3.4 2.8c-0.2 0.4-0.2 0.9-0.2 1.4v9.2h-2.7V120z"></path></g></svg>
		</a>
	</div>

	<h1 id="page-title">Post A Job</h1>
</header>



<!--<div class="alert alert-success">Job listing posted successfully <a href="listings.php">View Listings >></a></div>-->
<!--<div class="alert alert-danger">Uh oh! Something went wrong...</div>-->
<?php

$form = new Form();

$gump = new GUMP();

$_POST = $gump->sanitize($_POST);

$gump->validation_rules(array(
	'job-title' => 'required',
	'company'   => 'required',
	'email'     => 'required|valid_email'
));

$gump->filter_rules(array(
	'job-title'  => 'trim|sanitize_string',
	'company'    => 'trim|sanitize_string',
	'email'      => 'trim|sanitize_email'
));

$validation_data = $gump->run($_POST);

if (isset($_POST['submit'])) {
	if ($validation_data === false) {
		echo $gump->get_readable_errors(true);
	} else {
		echo '<span class="success">Success! Job Posted Successfully. <span class="right"><a href="listings.php">View Listings >></a></span></span>';
		$form->storeData();
	}
}


?>
	
<form action="postjob.php" method="post"> 


        <label for="job-title">
	 		<span class="title"><span class="req">*</span>Job Title</span>
			<input type="text" name="job-title" placeholder="Job Title" value="<?php 
			                                                       if(isset($_POST['job-title'])) {echo htmlspecialchars($_POST['job-title']); }?>"> 
		</label>
	

	
		<label for="company">
			<span class="title"><span class="req">*</span>Company</span>
			<input type="text" name="company" placeholder="Company" value="<?php 
																													if (isset($_POST['company'])) {echo htmlspecialchars($_POST['company']); }?>">
		</label>

	<label for="email">
		<span class="title"><span class="req">*</span>Email</span>
		<input type="email" name="email" placeholder="Email" value="<?php 
																											if (isset($_POST['email'])) {echo htmlspecialchars($_POST['email']);} ?>">
	</label>
 


	<label for="type"><span class="title">Type</span>
		<select name="type" id="">
			<option value="full-time">Full-Time</option>
			<option value="part-time">Part-Time</option>
			<option value="freelance">Freelance</option>
		</select>

	</label>

	<!--<label for="salary"><span class="title">Salary Range</span>
		<select name="salary" id="">
			<option value="$10,000 - $30,000">$10,000 - $30,000</option>
			<option value="$40,000 - $60,000">$40,000 - $60,000</option>
			<option value="$70,000 - $100,000">$70,000 - $100,000</option>
		</select>
	</label>-->
   
   <label for="salary"><span class="title">Salary Range</span>
   	<input type="text" name="salary" placeholder="Salary"/>
   </label>

<label for="apply"><span class="title">Best way to apply</span>
		<select name="apply" id="">
			<option value="Email">Email</option>
			<option value="Website">Website</option>
			<option value="Call">Call</option>
		</select>
</label>

	<label for="date">
		<span class="title">Start Date</span>
		<input type="date" name="date" value="<?php if (isset($_POST['date'])) {htmlspecialchars($_POST['date']);} ?>">
	</label>

	<label for="qualifications">
		<span class="title">Qualifications</span>
		<input type="text" name="qualifications" placeholder="Qualifications" value="<?php if(isset($_POST['qualifications'])) {htmlspecialchars($_POST['qualifications']);} ?>">
	</label>

	<label for="description">
		<span class="title">Description</span>
		<textarea placeholder="Description" name="description" class="message" cols="100" rows="7" maxlength="4000" value="<?php if(isset($_POST['description'])) {htmlspecialchars($_POST['description']);}  ?>"></textarea>
		<span class="countdown"></span>
	</label>

	<input type="submit" value="Post" name="submit" class="btn">
		
</form>


</div><!-- /container -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<!--<script type="text/javascript" src="js/jquery.validate.min.js"></script>-->
<script type="text/javascript" src="js/main.js"></script>


</body>
</html>