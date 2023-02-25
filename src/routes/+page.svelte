<script lang="ts">
	import { supabase } from '$lib/supabaseClient';
	import { makeid, isInputEmpty } from '$lib/utils';

	import Title from '../components/Title.svelte';

	let link: string = '';
	let code: string = makeid(5);

	async function saveLink() {
		if (/^(ftp|http|https):\/\/[^ "]+$/.test(link) === true) {
			await supabase.from('links').insert({ code: code, link: link });
			document.location.href = '/s/' + code;
		} else alert('The specified URL is invalid. Make sure the link starts with "https://"!');
	}

	async function findDuplicate() {
		const { data } = await supabase.from('links').select('code').eq('code', code);
		console.log(data?.length);
		if (data == null) {
			if (
				confirm(
					'There was an error. You can create an issue on GitHub regarding this error by clicking the OK button below!'
				)
			) {
				const issue = window.open('https://github.com/mrdoge515/Ujebywara/issues', '_blank');
				issue?.focus();
			}
		} else if (data.length >= 1) {
			code = makeid(5);
			findDuplicate();
		} else {
			saveLink();
		}
	}
</script>

<main>
	<Title val="ujebywara.cf" />
	<form>
		<input type="text" bind:value={link} placeholder="Your link..." />
		<input
			type="submit"
			on:click={() => findDuplicate()}
			disabled={!isInputEmpty(link) || !/^(ftp|http|https):\/\/[^ "]+$/.test(link)}
			value="Ujeb"
		/>
		<div class="cf-turnstile" data-sitekey="0x4AAAAAAACV4J6X-PDLISl4" />
	</form>
</main>

<svelte:head>
	<title>ujebywara.cf</title>
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

	/* 
		Form 
	*/
	input[type='text'] {
		height: 3em;
		width: 20em;
		padding: 0 0.6em;

		background-color: #ccd0da;
		transition-property: background-color color;
		transition: ease-in 0.5s;

		color: #5c5f77;
		font-family: 'Poppins', sans-serif;
		font-size: 0.85em;

		border: none;
		border-radius: 8px;
	}
	input[type='text']:hover {
		background-color: #bcc0cc;
	}
	input[type='text']:focus {
		background-color: #acb0be;
		color: #4c4f69;
	}

	input[type='submit'] {
		height: 3em;
		width: 4.5em;
		padding: 0 0.6em;

		background-color: #ea76cb;
		transition: background-color ease-in 0.5s;

		color: #cad3f5;
		font-family: 'Poppins', sans-serif;
		font-size: 0.85em;

		border: none;
		border-radius: 8px;
		cursor: pointer;
	}
	input[type='submit']:hover {
		background-color: #8839ef;
	}
	input[type='submit']:disabled,
	input[type='submit']:disabled:hover {
		background-color: #8c8fa1;
	}

	/* 
	Dark mode 
	*/
	@media (prefers-color-scheme: dark) {
		main {
			background-color: #24273a;
		}

		input[type='text'] {
			background-color: #363a4f;
			color: #b8c0e0;
		}
		input[type='text']:hover {
			background-color: #494d64;
		}
		input[type='text']:focus {
			background-color: #5b6078;
			color: #cad3f5;
		}
		input[type='submit'] {
			background-color: #f5bde6;
			color: #4c4f69;
		}
		input[type='submit']:hover {
			background-color: #c6a0f6;
		}
	}
</style>
