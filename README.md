# Tag Manager For Elementor

This is a simple 16 line implementation for Google Tag Manager in Elementor

## Get the tag manager code example from the PHP file

The simplest way to implement this script is trough FTP but you can also do it with every

## Getting Started

The simplest way to implement this script is trough FTP but you can also do it with every

### First Get the tools

Sign in the [Google Tag Manager](https://tagmanager.google.com/#/home)

get you container ID from [Here is a guide](https://www.analyticsmania.com/post/google-tag-manager-id/)



### Installing

A step by step series of examples that tell you how to get a development env running

Say what the step will be

```
add_action( 'wp_body_open',function(){
	echo '<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id={THE_TAG_MANAGER_ID}"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->';
} );

add_action( 'wp_head',function(){
	echo "<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','{THE_TAG_MANAGER_ID}');</script>
		<!-- End Google Tag Manager -->";
} );
```

And replace

```
{THE_TAG_MANAGER_ID}
```

With the actuale Google Tag Manager ID

End with an example of getting some data out of the system or using it for a little demo

## Running the tests

You can test the script using Tag [Asistant for Google Chrome](https://chrome.google.com/webstore/detail/tag-assistant-by-google/kejbdjndbnbjgmefkgdddjlbokphdefk)

## Authors

* **Eyal Avitan** - *Initial work* - [eyal CC](http://eyal.cc)

