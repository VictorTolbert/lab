let mix = require('laravel-mix')
let path = require('path')
// let LiveReloadPlugin = require('webpack-livereload-plugin');



mix.setPublicPath('assets')

// mix.js('resources/js/main.js', 'js')
mix.js('resources/js/app.js', 'js').vue()

mix.sass('resources/css/site.scss', 'css')
	.postCss('resources/css/app.css', 'css', [
		require('postcss-custom-properties')
	])

mix.extract(['lodash'])

mix.alias({
	'@': path.join(__dirname, 'resources/js'),

	// d3$: path.join(__dirname, 'node_modules/d3/index.js'),
    // vue$: path.join(__dirname, 'node_modules/vue/dist/vue.esm-bundler.js'),
    // luxon$: path.join(__dirname, 'node_modules/luxon/src/luxon.js'),
    // dompurify$: path.join(
    //     __dirname,
    //     'node_modules/dompurify/dist/purify.es.js'
    // ),
    // easymde$: path.join(__dirname, 'node_modules/easymde/src/js/easymde.js'),
    // 'billboard.js$': path.join(
    //     __dirname,
    //     'node_modules/billboard.js/dist/billboard.esm.js'
    // )
});

// mix.webpackConfig({
//     plugins: []
// });


// mix.webpackConfig(webpack => {
//     return {
//         plugins: [
// 			new LiveReloadPlugin(),
//             // new webpack.ProvidePlugin({})
//         ]
//     };
// });


// mix.webpackConfig({
// 	// plugins: [new LiveReloadPlugin()],
//     resolve: {
//         modules: [
//             'node_modules',
//             path.resolve(__dirname, 'vendor/laravel/spark/resources/assets/js')
//         ]
//     }
// });

console.log(
	process.env.MIX_SOME_KEY
); // yourpublickey

// mix.sourceMaps()
// mix.browserSync({
//     proxy: 'http://promise-lab.test',
// });

// mix.dump();
