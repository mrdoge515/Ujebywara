<script lang="ts">
	import type { PageData } from './$types';

	import Title from '../../../components/Title.svelte';

	export let data: PageData;
</script>

<main>
	<Title val="Link shortened" />
	<a href="https://ujebywara.cf/{data.content}">https://ujebywara.cf/{data.content}</a>
</main>

<svelte:head>
	<title>ujebywara.cf - shortened</title>
</svelte:head>

<style>
	main {
		background-color: #eff1f5;
		min-height: 100%;

		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
	}

	a {
		text-decoration: none;
		font-family: 'Poppins', sans-serif;
		font-size: 1.5em;

		color: #dc8a78;
		transition: color ease-in 0.5s;
	}
	a:hover {
		color: #fe640b;
	}

	/* 
	Dark mode 
	*/
	@media (prefers-color-scheme: dark) {
		main {
			background-color: #24273a;
		}
	}
</style>
