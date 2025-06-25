# Write a custom check to perform an arbitrary assertion

Because `wp doctor` checks are built on top of a foundational abstraction, it's relatively straightforward for you to write your own custom check. The basic requirement is that you create a class extending `runcommand\Doctor\Checks\Check` that implements a `run()` method. The `run()` must set a status and message based on whatever procedural logic As an example, here's an annotated custom check to assert Akismet is activated with a valid API key:

    <?php

    /**
     * Ensures Akismet is activated with the appropriate credentials.
     */
    class Akismet_Activated extends runcommand\Doctor\Checks\Check {

    	public function __construct( $options = array() ) {
    		parent::__construct( $options );
    		// Every check is to run on 'after_wp_load' by default.
    		// You could instead use 'before_wp_load' or 'after_wp_config_load'
    		$this->set_when( 'after_wp_load' );
    	}

    	public function run() {
    		// If the Akismet isn't activated, bail early.
    		if ( ! class_exists( 'Akismet' ) ) {
    			$this->set_status( 'error' );
    			$this->set_message( "Akismet doesn't appear to be activated." );
    			return;
    		}
    		// Verify that the API exists.
    		$api_key = Akismet::get_api_key();
    		if ( empty( $api_key ) ) {
    			$this->set_status( 'error' );
    			$this->set_message( 'API key is missing.' );
    			return;
    		}
    		// Verify that the API key is valid.
    		$verification = Akismet::verify_key( $api_key );
    		if ( 'failed' === $verification ) {
    			$this->set_status( 'error' );
    			$this->set_message( 'API key verification failed.' );
    			return;
    		}
    		// Everything looks good, so report a success.
    		$this->set_status( 'success' );
    		$this->set_message( 'Akismet is activated with a verified API key.' );
    	}

    }



If the class were placed in an `akismet-activated.php` file, you could register it with:

    plugin-akismet-activated:
      class: Akismet_Activated
      require: akismet-activated.php


Then, run the config file:

    $ wp doctor check plugin-akismet-activated --config=doctor.yml
    +--------------------------+--------+---------------------+
    | name                     | status | message             |
    +--------------------------+--------+---------------------+
    | plugin-akismet-activated | error  | API key is missing. |
    +--------------------------+--------+---------------------+
