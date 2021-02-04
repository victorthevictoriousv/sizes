const path                    = require('path');
const UglifyJSPlugin          = require('uglifyjs-webpack-plugin');
const MiniCssExtractPlugin    = require("mini-css-extract-plugin");
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");
const CleanWebpackPlugin      = require('clean-webpack-plugin');
const SVGSpritemapPlugin      = require('svg-spritemap-webpack-plugin')
const webpack                 = require('webpack');

module.exports = {

  // For multiple output of js-files use something like this instead:
  //  entry: {
  //    app: [‘./build/js/app.js’, ‘./build/scss/style.scss’],
  //    map: ‘./build/js/google-map.js’
  //  },
  //  output: {
  //    filename: ‘./dist/js/[name].js’,
  //    path: path.resolve(__dirname)
  //  },

  entry: ['./build/js/app.js', './build/scss/style.scss'],
  output: {
    filename: './dist/js/app.js',
    path: path.resolve(__dirname)
  },
  module: {
    rules: [
      // Make scss process images
      {
        test: /\.(png|jpg|svg)$/,
        loader: 'url-loader'
      },
      // Perform js babelization on all .js files
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: "babel-loader",
          options: {
            presets: ['babel-preset-env']
         }
        }
      },
      // Compile all .scss files to plain old css
      {
        test: /\.(sass|scss)$/,
        use: [
          MiniCssExtractPlugin.loader, 
          {
            loader: 'css-loader', 
            options: {
              sourceMap: true
            }
          }, 
          {
            loader: 'postcss-loader',
            options: {
              sourceMap: true
            }
          },
          {
            loader: 'sass-loader',
            options: {
              sourceMap: true
            }
          }
        ]
      }
    ]
  },
  plugins: [
    // Extract css into dedicated file
    new MiniCssExtractPlugin({
      filename: './dist/css/app.css'
    }),
    // SVG sprite
    new SVGSpritemapPlugin({
      src: './build/img/icons/*.svg',
      filename: './dist/img/icons.svg',
      prefix: ''
    }),
    // Clean old assets
    new CleanWebpackPlugin(['./dist/js/*','./dist/css/*']),
    new webpack.ProvidePlugin({
      $: 'jquery',
      jQuery: 'jquery',
      'window.jQuery': 'jquery'
    }),
  ],
  optimization: {
    minimizer: [
      // Enable the js minification plugin
      new UglifyJSPlugin({
        cache: true,
        parallel: true
      }),
      // Enable the css minification plugin
      new OptimizeCSSAssetsPlugin({})
    ]
  },
  // Enable sourcemaps
  devtool: 'source-map'
};