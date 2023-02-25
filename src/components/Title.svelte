<script lang="ts">
	export let val: string = 'This is a title';
</script>

<h1>{val}</h1>

<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

	h1 {
		margin-bottom: 0.5em;

		color: #4c4f69;
		font-family: 'Poppins', sans-serif;
		font-size: 3em;
	}
	@media (prefers-color-scheme: dark) {
		h1 {
			color: #cad3f5;
		}
	}
	@media only screen and (min-width: 1000px) {
		h1 {
			font-size: 4em;
		}
	}
</style>
