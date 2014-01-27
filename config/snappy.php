<?php

return array(

	'defaults' => array(
		'binary' => '/usr/local/bin/wkhtmltopdf', //path to binary
		'pdf' => array(
			'ignore-load-errors'           => null, // old v0.9
			'lowquality'                   => true,
			'collate'                      => null,
			'no-collate'                   => null,
			'cookie-jar'                   => null,
			'copies'                       => null,
			'dpi'                          => null,
			'extended-help'                => null,
			'grayscale'                    => null,
			'help'                         => null,
			'htmldoc'                      => null,
			'image-dpi'                    => null,
			'image-quality'                => null,
			'manpage'                      => null,
			'margin-bottom'                => null,
			'margin-left'                  => null,
			'margin-right'                 => null,
			'margin-top'                   => null,
			'orientation'                  => null,
			'output-format'                => null,
			'page-height'                  => null,
			'page-size'                    => null,
			'page-width'                   => null,
			'no-pdf-compression'           => null,
			'quiet'                        => null,
			'read-args-from-stdin'         => null,
			'title'                        => null,
			'use-xserver'                  => null,
			'version'                      => null,
			'dump-default-toc-xsl'         => null,
			'dump-outline'                 => null,
			'outline'                      => null,
			'no-outline'                   => null,
			'outline-depth'                => null,
			'allow'                        => null,
			'background'                   => null,
			'no-background'                => null,
			'checkbox-checked-svg'         => null,
			'checkbox-svg'                 => null,
			'cookie'                       => null,
			'custom-header'                => null,
			'custom-header-propagation'    => null,
			'no-custom-header-propagation' => null,
			'debug-javascript'             => null,
			'no-debug-javascript'          => null,
			'default-header'               => null,
			'encoding'                     => null,
			'disable-external-links'       => null,
			'enable-external-links'        => null,
			'disable-forms'                => null,
			'enable-forms'                 => null,
			'images'                       => null,
			'no-images'                    => null,
			'disable-internal-links'       => null,
			'enable-internal-links'        => null,
			'disable-javascript'           => null,
			'enable-javascript'            => null,
			'javascript-delay'             => null,
			'load-error-handling'          => null,
			'disable-local-file-access'    => null,
			'enable-local-file-access'     => null,
			'minimum-font-size'            => null,
			'exclude-from-outline'         => null,
			'include-in-outline'           => null,
			'page-offset'                  => null,
			'password'                     => null,
			'disable-plugins'              => null,
			'enable-plugins'               => null,
			'post'                         => null,
			'post-file'                    => null,
			'print-media-type'             => null,
			'no-print-media-type'          => null,
			'proxy'                        => null,
			'radiobutton-checked-svg'      => null,
			'radiobutton-svg'              => null,
			'run-script'                   => null,
			'disable-smart-shrinking'      => null,
			'enable-smart-shrinking'       => null,
			'stop-slow-scripts'            => null,
			'no-stop-slow-scripts'         => null,
			'disable-toc-back-links'       => null,
			'enable-toc-back-links'        => null,
			'user-style-sheet'             => null,
			'username'                     => null,
			'window-status'                => null,
			'zoom'                         => null,
			'footer-center'                => null,
			'footer-font-name'             => null,
			'footer-font-size'             => null,
			'footer-html'                  => null,
			'footer-left'                  => null,
			'footer-line'                  => null,
			'no-footer-line'               => null,
			'footer-right'                 => null,
			'footer-spacing'               => null,
			'header-center'                => null,
			'header-font-name'             => null,
			'header-font-size'             => null,
			'header-html'                  => null,
			'header-left'                  => null,
			'header-line'                  => null,
			'no-header-line'               => null,
			'header-right'                 => null,
			'header-spacing'               => null,
			'replace'                      => null,
			'disable-dotted-lines'         => null,
			'toc-header-text'              => null,
			'toc-level-indentation'        => null,
			'disable-toc-links'            => null,
			'toc-text-size-shrink'         => null,
			'xsl-style-sheet'              => null,
		),

		'image' => array(
			'allow'                        => null,    // Allow the file or files from the specified folder to be loaded (repeatable)
			'checkbox-checked-svg'         => null,    // Use this SVG file when rendering checked checkboxes
			'checked-svg'                  => null,    // Use this SVG file when rendering unchecked checkboxes
			'cookie'                       => array(), // Set an additional cookie (repeatable)
			'cookie-jar'                   => null,    // Read and write cookies from and to the supplied cookie jar file
			'crop-h'                       => null,    // Set height for croping
			'crop-w'                       => null,    // Set width for croping
			'crop-x'                       => null,    // Set x coordinate for croping (default 0)
			'crop-y'                       => null,    // Set y coordinate for croping (default 0)
			'custom-header'                => array(), // Set an additional HTTP header (repeatable)
			'custom-header-propagation'    => null,    // Add HTTP headers specified by --custom-header for each resource request.
			'no-custom-header-propagation' => null,    // Do not add HTTP headers specified by --custom-header for each resource request.
			'debug-javascript'             => null,    // Show javascript debugging output
			'no-debug-javascript'          => null,    // Do not show javascript debugging output (default)
			'encoding'                     => null,    // Set the default text encoding, for input
			'height'                       => null,    // Set screen height (default is calculated from page content) (default 0)
			'images'                       => null,    // Do load or print images (default)
			'no-images'                    => null,    // Do not load or print images
			'disable-javascript'           => null,    // Do not allow web pages to run javascript
			'enable-javascript'            => null,    // Do allow web pages to run javascript (default)
			'javascript-delay'             => null,    // Wait some milliseconds for javascript finish (default 200)
			'load-error-handling'          => null,    // Specify how to handle pages that fail to load: abort, ignore or skip (default abort)
			'disable-local-file-access'    => null,    // Do not allowed conversion of a local file to read in other local files, unless explecitily allowed with allow
			'enable-local-file-access'     => null,    // Allowed conversion of a local file to read in other local files. (default)
			'minimum-font-size'            => null,    // Minimum font size
			'password'                     => null,    // HTTP Authentication password
			'disable-plugins'              => null,    // Disable installed plugins (default)
			'enable-plugins'               => null,    // Enable installed plugins (plugins will likely not work)
			'post'                         => array(), // Add an additional post field
			'post-file'                    => array(), // Post an additional file
			'proxy'                        => null,    // Use a proxy
			'quality'                      => null,    // Output image quality (between 0 and 100) (default 94)
			'radiobutton-checked-svg'      => null,    // Use this SVG file when rendering checked radiobuttons
			'radiobutton-svg'              => null,    // Use this SVG file when rendering unchecked radiobuttons
			'run-script'                   => null,    // Run this additional javascript after the page is done loading (repeatable)
			'disable-smart-width'          => null,    // Use the specified width even if it is not large enough for the content
			'stop-slow-scripts'            => null,    // Stop slow running javascripts
			'no-stop-slow-scripts'         => null,    // Do not stop slow running javascripts (default)
			'transparent'                  => null,    // Make the background transparrent in pngs *
			'user-style-sheet'             => null,    // Specify a user style sheet, to load with every page
			'username'                     => null,    // HTTP Authentication username
			'width'                        => null,    // Set screen width (default is 1024)
			'window-status'                => null,    // Wait until window.status is equal to this string before rendering page
			'zoom'                         => null,    // Use this zoom factor (default 1)
		)

	),

);
