# Tag Manager For Elementor

This is a simple 16 line implementation for Google Tag Manager in Elementor

## Getting Started

The simplest way to implement this script is trough FTP but you can also do it with every

### First Get the tools

first get you container ID from [Google Tag Manager](https://tagmanager.google.com/#/home)


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

Explain how to run the automated tests for this system

### Break down into end to end tests

Explain what these tests test and why

```
Give an example
```

### And coding style tests

Explain what these tests test and why

```
Give an example
```

## Deployment

Add additional notes about how to deploy this on a live system

## Built With

* [Dropwizard](http://www.dropwizard.io/1.0.2/docs/) - The web framework used
* [Maven](https://maven.apache.org/) - Dependency Management
* [ROME](https://rometools.github.io/rome/) - Used to generate RSS Feeds

## Contributing

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags). 

## Authors

* **Eyal Avitan** - *Initial work* - [eyal CC](http://eyal.cc)

## Acknowledgments

* Hat tip to anyone whose code was used
* Inspiration
* etc

