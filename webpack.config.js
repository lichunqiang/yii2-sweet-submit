var webpack = require ('webpack');
var del = require('del');
var path = require('path');
var DIST_DIR = path.join(__dirname, 'dist');

del(DIST_DIR);

module.exports = {
  entry: {
    'yii.enhance': './src/yii.enhance.js',
  },

  output: {
    filename: '[name].js',
    path: DIST_DIR
  },

  module: {
    loaders: [
      {test: /\.css$/, loader: 'style-loader!css-loader'}
    ],
    noParse: [/sweetalert.min.js/]
  },

  plugins: [
    new webpack.optimize.UglifyJsPlugin({compress: {warnings: false}})
  ]
};