import { sveltekit } from '@sveltejs/kit/vite';
import type { UserConfig } from 'vite';
import { ViteMinifyPlugin } from 'vite-plugin-minify';

const config: UserConfig = {
	plugins: [sveltekit(), ViteMinifyPlugin({})]
};

export default config;
