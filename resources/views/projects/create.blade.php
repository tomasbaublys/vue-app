<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css">

	<style>
		body { 
			padding-top: 40px; 
		}
	</style>
</head>
<body>
	<div id="app" class="container">
		@include('projects.list')

		<form method="POST" action="/projects" @submit.prevent="onSubmit">

			<div class="control">
				<label for="name" class="label">Project Name</label>

				<input type="text" id="name" name="name" class="input is-rounded" v-model="name" @keydown="errors.clear('name')">

				<span class="is-danger" v-text="errors.get('name')"></span>
			</div>

			<div class="control">
				<label for="description" class="label">Project Description</label>

				<input type="text" id="description" name="description" class="input is-rounded" v-model="description" @keydown="errors.clear('description')">
				
				<span class="help is-danger" v-text="errors.get('description')"></span>
			</div>

			<div class="control">
				<button class="button is-primary is-rounded">Create</button>
			</div>
		</form>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script src="/js/app.js"></script>
</body>
</html>