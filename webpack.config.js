const currentTask = process.env.npm_lifecycle_event
const path = require('path')
const {CleanWebpackPlugin} = require('clean-webpack-plugin')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const CssMinimizerPlugin = require('css-minimizer-webpack-plugin') // For creating a minimized version of style.css
const HtmlWebpackPlugin = require('html-webpack-plugin')
const fse = require('fs-extra')

const postCSSPlugins = [
	require('postcss-import'),
	require('postcss-mixins'),
	require('postcss-simple-vars'),
	require('postcss-nested'),
	require('autoprefixer')
]


class RunAfterCompile {
	apply(compiler) {
		compiler.hooks.done.tap('Copy images', function() {
			fse.copySync('./app/assets/images', './dist/assets/images')
		})
		compiler.hooks.done.tap('Copy vendor files', function() {
			fse.copySync('./app/vendor', './dist/assets/vendor')
		})
	}
}

let cssConfig = {
	test: /\.css$/i,
	use: ['css-loader', {loader: 'postcss-loader', options: {postcssOptions: {plugins: postCSSPlugins}}}]
}

let pages = fse.readdirSync('./app').filter(function(file) {
	return file.endsWith('.html')
}).map(function(page) {
	return new HtmlWebpackPlugin({
		filename: page,
		template: `./app/${page}`
	})
})

let config = {
	entry: './app/assets/scripts/App.js',
	plugins: pages,
	module: {
		rules: [
			cssConfig,
			{
				 test: /\.(jpg|png|svg|gif)$/,
				 type: 'asset/resource',
				 generator: {
						//publicPath: '../fonts/',
						filename: 'assets/images/[name][ext][query]'
					}
			 },
			{
				test: /\.(svg|eot|woff|woff2|ttf)$/,
				 type: 'asset/resource',
				 generator: {
					 //publicPath: '../fonts/',
					 filename: 'assets/fonts/[name][ext][query]'
				 }
			},
		]
	}
}

if (currentTask == 'dev') {
	cssConfig.use.unshift('style-loader')
	config.output = {
		filename: 'bundled.js',
		path: path.resolve(__dirname, 'app')
	}
	config.devServer = {
		watchFiles: ['./app/**/*.html'],
		static: path.join(__dirname, 'app'),
		hot: true,
		port: 3000,
		host: '0.0.0.0',
		https: false,
	}
	config.mode = 'development'
}

if (currentTask == 'build') {
	config.module.rules.push({
		test: /\.js$/,
		exclude: [
			/(node_modules)/,
		],
		use: {
			loader: 'babel-loader',
			options: {
				presets: ['@babel/preset-env']
			}
		}
	})

	cssConfig.use.unshift(MiniCssExtractPlugin.loader)

	config.output = {
		filename: '[name].[chunkhash].js',
		chunkFilename: '[name].[chunkhash].js',
		path: path.resolve(__dirname, 'dist')
	}
	config.mode = 'production'
	config.optimization = {
		runtimeChunk: 'single',
		splitChunks: {
			cacheGroups: {
				vendor: {
					test: /[\\/]node_modules[\\/]/,
					name: 'vendors',
					chunks: 'all'
				}
			},

		},
		// minimize: true,
		// minimizer: [`...`, new CssMinimizerPlugin()],
	}
	config.plugins.push(
		new CleanWebpackPlugin(),
		new MiniCssExtractPlugin({filename: 'styles.[chunkhash].css'}),
		new RunAfterCompile()
	)

}

module.exports = config