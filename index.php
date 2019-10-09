<?php 

	
	$url = isset($_GET['url']) ? $_GET['url'] : '';

 ?>

<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<title>Prev site</title>

		<style>
			body{
				background-color: #2D2D37;
				color: #848489;
			}
			h4{
				color: #848489;
			}
			.rotate{
				cursor: pointer;
				transition: .5s all;
			}
			.rotate:hover{
				transform: rotate(-45deg);
			}
			.rotate:hover path{
				fill: #FC005F;
			}
			.line-through{
				text-decoration: line-through;
			}

		</style>
	</head>
	<body>

		<div id="app" class="container-fluid mt-2">
			
			<div class="row mb-3 justify-content-between">
				<div class="col-5">
					<form action="" method="get">
						<div class="d-flex">
							<input name="url" type="text" class="form-control" placeholder="page url" value="<?php echo $url ?>">
							<button class="btn btn-primary ml-2">></button>
						</div>
					</form>
					<span class="btn btn-primary refresh-all mt-2">Refresh (ctrl)</span>
				</div>
				<div class="col-auto">
					<div>
						<span @click="focusRefresh = !focusRefresh" :class="{'line-through' : !focusRefresh}" class="mr-5">Auto Refresh</span>
						
						<span @click="shows.laptop = !shows.laptop" :class="{'line-through' : !shows.laptop}" class="mr-2">Laptop</span>
						<span @click="shows.mobile = !shows.mobile" :class="{'line-through' : !shows.mobile}" class="mx-2">iPhone</span>
						<span @click="shows.tablet = !shows.tablet" :class="{'line-through' : !shows.tablet}" class="mx-2">tablet</span>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-auto" v-if="shows.laptop">
					<h4 class="mb-3">Laptop</h4>
					<iframe id="laptop" width="1366" height="768" src="<?php echo $url; ?>" frameborder="0"></iframe>
				</div>
				<div class="col-auto" v-if="shows.mobile">
					<div class="d-flex align-items-center mb-3">
						<h4>iPhone 8</h4>
						<svg class="ml-3 rotate" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 					width="20px" height="20px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">
							<path fill="#848489" d="M419.475,63.75c84.15,38.25,142.8,119.85,153,216.75h38.25C595.425,122.4,465.375,0,304.725,0c-5.1,0-10.2,0-17.85,0
							l96.9,96.9L419.475,63.75z M258.825,43.35c-15.3-15.3-38.25-15.3-53.55,0l-163.2,163.2c-15.3,15.3-15.3,38.25,0,53.55l306,306
							c15.301,15.301,38.25,15.301,53.551,0L564.825,402.9c15.301-15.301,15.301-38.25,0-53.551L258.825,43.35z M376.125,540.6l-306-306
							l163.2-163.2l306,306L376.125,540.6z M189.975,548.25c-84.15-38.25-142.8-119.85-153-216.75h-35.7
							c12.75,158.1,142.8,280.5,303.45,280.5c5.1,0,10.2,0,17.85,0l-96.899-96.9L189.975,548.25z"/>
						</svg>
						<!-- <span class="btn btn-primary refresh">Refresh</span> -->
					</div>

					<iframe id="mobile" width="375" height="667" src="<?php echo $url; ?>" frameborder="0"></iframe>
				</div>
				<div class="col-auto" v-if="shows.tablet">
					<div class="d-flex align-items-center mb-3">
						<h4>Tablet</h4>
						<svg class="ml-3 rotate" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 					width="20px" height="20px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">
							<path fill="#848489" d="M419.475,63.75c84.15,38.25,142.8,119.85,153,216.75h38.25C595.425,122.4,465.375,0,304.725,0c-5.1,0-10.2,0-17.85,0
							l96.9,96.9L419.475,63.75z M258.825,43.35c-15.3-15.3-38.25-15.3-53.55,0l-163.2,163.2c-15.3,15.3-15.3,38.25,0,53.55l306,306
							c15.301,15.301,38.25,15.301,53.551,0L564.825,402.9c15.301-15.301,15.301-38.25,0-53.551L258.825,43.35z M376.125,540.6l-306-306
							l163.2-163.2l306,306L376.125,540.6z M189.975,548.25c-84.15-38.25-142.8-119.85-153-216.75h-35.7
							c12.75,158.1,142.8,280.5,303.45,280.5c5.1,0,10.2,0,17.85,0l-96.899-96.9L189.975,548.25z"/>
						</svg>
					</div>

					<iframe id="tablet" width="768" height="1024" src="<?php echo $url; ?>" frameborder="0"></iframe>
				</div>
			</div>
		</div>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

		<script>	

				$(document).ready(function(){

					$('.rotate').click(function(){
						var iframe = $(this).parent().parent().find('iframe');

						var size = {
							'x': iframe.attr('width'),
							'y': iframe.attr('height')
						}

						iframe.attr('width', size.y);
						iframe.attr('height', size.x);
					});

					$('.refresh-all').click(function(event) {
						refreshAll();
					});

					$(window).keydown(function(event) {

						if( event.keyCode === 17 ){
							refreshAll();
						}

						if( event.keyCode === 116 ){
							event.preventDefault();
							refreshAll();
						}
					});

					$(window).on("focus", function(e) {
						if( vue._data.focusRefresh ){
	    					refreshAll();
	    				}
					})

					function refreshAll() {
						$('iframe').each(function(){
							var myIframe = $(this);
							var scroll = myIframe.contents().scrollTop()

							$(this).attr('src', $(this).attr('src'));

							$(this).on('load', function(){
								myIframe.contents().scrollTop(scroll)
							});
						})
					}




					

				})
				
		</script>

		<script>
			
			var vue = new Vue({
				el: '#app',
				data: {
					focusRefresh: false,

					shows: {
						laptop: true,
						mobile: true,
						tablet: false
					}
				}
			})

		</script>
	</body>
</html>
