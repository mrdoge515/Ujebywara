import { error } from '@sveltejs/kit';
import { supabase } from '$lib/supabaseClient';

/**
 * @param {any} code
 */
async function codeSearch(code) {
	const { data, error } = await supabase.from('links').select().eq('code', code);
	console.log(data);
	return data;
}

/**
 * @type {import('./$types').PageLoad}
 */
export function load({ params }) {
	let data = codeSearch(params.slug);
	return {
		content: data
	};

	throw error(404, 'Not found');
}
