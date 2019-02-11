import SpritePlugins from './spritesmith.js';
import webpack from 'webpack';
import StyleLintPlugin from 'stylelint-webpack-plugin';
import BrowserSyncPlugin from 'browser-sync-webpack-plugin';
import MiniCssExtractPlugin from 'mini-css-extract-plugin';

const site = 'testproject.com';
// set plugins to an empty array
var plugins = [];

plugins.push(new webpack.DefinePlugin({
  LANG: JSON.stringify("en")
}))

// lint styles
plugins.push(new StyleLintPlugin({
  configFile: '.stylelintrc',
  context: 'src/scss',
  files: '**/*.scss',
  failOnError: false,
  quiet: true,
}));
// BrowserSyncPlugin
plugins.push(new BrowserSyncPlugin({
  files: ["**/**/*.*"],
  reloadOnRestart: true,
  proxy: "http://dev.staging." + site,
}));
// extract styles
plugins.push(new MiniCssExtractPlugin({
  // Options similar to the same options in webpackOptions.output
  // both options are optional
  filename: "css/[name].css",
  chunkFilename: "css/[id].css",
}));
// build SpritePlugins based on how many sprites directories are found
for(var i = 0, c = SpritePlugins.length;i<c;i++){
  plugins.push(SpritePlugins[i]);
}


module.exports = plugins;