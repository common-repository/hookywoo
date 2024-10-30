<?php
//This class generates all of the hooks from hw-single-product and hw-shop
class Hooky_Loop_Class{

    public function __construct( $strings ){
        $this->strings = $strings;
        foreach( $this->strings as $string ) {
            add_action( $string[ 'wooHook' ], array( $this, 'echo_strings' ), $string['priority'] );
        }
    } // End function __construct()

    public function echo_strings() {
        $hook = current_filter();
        foreach ( $this->strings as $string ) {
            if ( $string['wooHook'] == $hook ) {
                echo $string['elem_start'] .  ' class="' . $string['elem_class'] . '">' . $string['hooky_content'] . $string['elem_end'];
            }
		}
    } // End function echo_strings()
} // End class Hooky_Loop_Class