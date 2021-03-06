<?php
/** 
 * Change address format (of a specific country)
 * 
 * @version 1.0.0
 */
 
add_filter( 'woocommerce_localisation_address_formats', 'lpb_change_brazilian_address_format', 20 );
function lpb_change_brazilian_address_format ( $formats ) {
	$formats['BR'] = "{name}\n{address_1}, {number}\n{address_2}\n{neighborhood}\n{city}/{state_code}\n{postcode}";
	return $formats;
}

/* Outputs:

Luiz Paulo Bills
Rua Anita Guastini Eiras, 1234
Próximo ao posto ipiranga
Vila Mariana
São Paulo/SP
04105-070

*/
