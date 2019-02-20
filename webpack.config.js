var path = require('path');
var webpack = require('webpack');
var WebpackBuildNotifierPlugin = require('webpack-build-notifier');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const production = process.argv.indexOf('-p') !== -1;
const BundleAnalyzerPlugin = require('webpack-bundle-analyzer').BundleAnalyzerPlugin;
const VueLoaderPlugin = require('vue-loader').VueLoaderPlugin;
const ManifestPlugin = require('webpack-manifest-plugin');
const CleanWebpackPlugin = require('clean-webpack-plugin');

const outputPath = path.resolve(__dirname, './bundles');

var config = {
    entry: [
        './resources/js/index.js',
        './resources/css/scss/index.scss',
    ],
    output: {
        //   filename: 'js/[name].[hash].js', - different for DEV and PROD
        path: outputPath,
        publicPath: "/build/",
        chunkFilename: 'js/[id].js',
    },
    module: {
        rules: [
            {
                test: /\.(css|sass|scss)$/,
                exclude: /(node_modules)/,
                use: ExtractTextPlugin.extract({
                    fallback: 'style-loader',
                    //resolve-url-loader may be chained before sass-loader if necessary
                    use: ['css-loader', 'postcss-loader', 'sass-loader']
                })
            },
            {
                test: /\.vue$/,
                loader: 'vue-loader',
                options: {
                    loaders: {
                        js: {
                            loader: 'babel-loader',
                            options: {
                                presets: ['es2015', 'stage-2']
                            }
                        },
                    }
                }
            },

            {
                test: /\.js$/,
                use: [{
                    loader: 'babel-loader',
                    options: {
                        presets: ['es2015', 'stage-2'],
                        plugins: ['syntax-dynamic-import']
                    }
                }]
            }
        ],
        loaders: []
    },
    plugins: [
        new VueLoaderPlugin(),
//        new webpack.optimize.CommonsChunkPlugin({
//            name: 'commons',
//            filename: 'js/commons.js',
//            minChunks: 2
//        })
    ],
    resolve: {
        alias: {
            'vue$': 'vue/dist/vue.esm.js'
        }
    }
};
config.entry.babelpolyfill = 'babel-polyfill';

if (production) {
    config.output.filename = 'js/[name].js';
    config.plugins.push(new webpack.optimize.UglifyJsPlugin({
        compress: {
            warnings: false,
            // Drop console statements
            drop_console: true
        },
        output: {
            comments: false,
            "ascii_only": true
        }
    }));
    config.plugins.push(new ExtractTextPlugin({
        filename: 'css/index.css',
        allChunks: true
    }));

    //  config.plugins.push(new BundleAnalyzerPlugin());

} else {
    config.output.filename = 'js/[name].js';
    config.plugins.push(new WebpackBuildNotifierPlugin());
    config.plugins.push(new ExtractTextPlugin({
        filename: 'css/index.css',
        allChunks: true
    }));
    //   config.plugins.push(new BundleAnalyzerPlugin());
    config.devtool = 'source-map'; //'inline-eval-cheap-source-map';
}


module.exports = config;

