const TerserPlugin = require('terser-webpack-plugin');
const CompressionPlugin = require('compression-webpack-plugin')
module.exports = {
    mode: "production",
    plugins: [ new CompressionPlugin ],
    // Enable sourcemaps for debugging webpack's output.
    devtool: "source-map",

    resolve: {
        // Add '.ts' and '.tsx' as resolvable extensions.
        extensions: [".ts", ".tsx"]
    },
    output: {
        filename: 'ui-bundle.js',	  
        path: __dirname + '/js-ui',
	libraryTarget: 'umd',
    	library: 'JS_UI'
    },
    optimization: {
     minimize: false,
    minimizer: [
    	new TerserPlugin({
	        terserOptions: {
	            keep_classnames: true,
	            keep_fnames: true
	        }
	      })
    	]    },
    module: {
        rules: [
            {
                test: /\.ts(x?)$/,
                exclude: /node_modules/,
                use: [
                    {
                        loader: "ts-loader"
                    }
                ]
            },
            // All output '.js' files will have any sourcemaps re-processed by 'source-map-loader'.
            {
                enforce: "pre",
                test: /\.js$/,
                loader: "source-map-loader"
            }
        ]
    },

    // When importing a module whose path matches one of the following, just
    // assume a corresponding global variable exists and use that instead.
    // This is important because it allows us to avoid bundling all of our
    // dependencies, which allows browsers to cache those libraries between builds.
    externals: {
        "react": "React",
        "react-dom": "ReactDOM",
	"react-router": "ReactRouter"
    }
};

