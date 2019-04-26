<?php 
	session_start();

	if (! isset($_SESSION["logged"])) {
		header("Location: index.php");
	}
?>

<!DOCTYPE html>
<html>

<head>
	<title></title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<style>
		.box {
			list-style-type: none;
			margin: 0;
			padding: 0;
			width: auto;
		}

		.box li {
			margin: 0 3px 3px 3px;
			padding-left: 1.5em;
			font-size: 1.4em;
			height: 18px;
		}

		.box li span {
			position: absolute;
			margin-left: -1.3em;
		}

		.draggable {
			width: 100px;
			height: 100px;
			padding: 0.5em;
			float: left;
			margin: 10px 10px 10px 0;
		}

		.droppable {
			width: 150px;
			height: 150px;
			padding: 0.5em;
			float: left;
			margin: 10px;
		}

		.droppable li {
			left: 0 !important;
			right: 0 !important;
		}

		.bg-green {
			background-color: green
		}

		.bg-yellow {
			background-color: yellow
		}

		.bg-red {
			background-color: red
		}
	</style>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
		const usuarios = {
			0: {
				nome: "Lenon"
			},
			1: {
				nome: "Adriano"
			},
			2: {
				nome: "Filipe"
			},
			3: {
				nome: "Yuri"
			}
		}
		$(function() {
			$(".draggable li").draggable();
			$(".droppable").droppable({
				drop: function(event, ui) {
					const {
						draggable
					} = ui
					const userId = draggable.attr("id")

					$(this).append(draggable[0])

					usuarios[userId].box = $(this).attr("data-box")

					console.log(usuarios)
				},
				out: function(event, ui) {
					$(this)
						.addClass("ui-state-highlight")
						.find("p")
						.html("Drop here!");
				}
			});
		});
	</script>
</head>

<body>
	<ul id="" class="box draggable">
		<li id="0">Lenon</li>
		<li id="1">Adriano</li>
		<li id="2">Filipe</li>
		<li id="3">Yuri</li>
	</ul>
	
	<h3>Paciente bom!</h3>
	<div class="box bg-green droppable draggable" data-box="green">

	</div>
	<h3>Paciente em observação!</h3>
	<div class="box bg-yellow droppable draggable" data-box="yellow">

	</div>

	<h3>Paciente em estado critico!</h3>
	<div class="box bg-red droppable draggable" data-box="red">
	</div>

	<script>
	</script>

</body>

</html>