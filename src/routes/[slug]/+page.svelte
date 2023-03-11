<script lang="ts">
	import type { PageData } from '../$types';

	export let data: PageData;
</script>

<svelte:head>
	<meta http-equiv="refresh" content="0; URL={data.content[0].link}" />
</svelte:head>

REDIRECTING
