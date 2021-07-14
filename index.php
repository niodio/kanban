<?php
include __DIR__ . '/includes/header.php';
?>

<main class='wrapper'>
	<!-- inicio do todo -->
	<div class="todo wrapper-group">
		<div class="todo-header">To Do</div>

		<div class="postit postit-todo">
			<div class="postit-header postit-todo-header">
				<a href=' . $arquivo . '>Titulo</a>
			</div>
			<div class="postit-content postit-todo-content">
				Descrição do projeto a ser executado.
			</div>
		</div>


	</div>
	<!-- inicio do doing -->
	<div class="doing wrapper-group">
		<div class="doing-header">Doing</div>
		<div class="postit postit-doing">
			<div class="postit-header">
				Nome do arquivo
			</div>
			<div class="postit-content postit-doing-content">
				Descrição do projeto a ser executado.
			</div>
		</div>
	</div>
	<!-- inicio do done -->
	<div class="done wrapper-group">
		<div class="done-header">Done</div>
		<div class="postit postit-done">
			<div class="postit-header">
				Nome do arquivo
			</div>
			<div class="postit-content postit-done-content ">
				Descrição do projeto a ser executado.
				será pego da DB
			</div>
		</div>
	</div>

</main>

<?php
include __DIR__ . '/includes/footer.php';
?>