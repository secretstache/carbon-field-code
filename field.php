<?php
use Carbon_Fields\Carbon_Fields;
use Carbon_Field_Code\Code_Field;

define( 'Carbon_Field_Code\\DIR', __DIR__ );

Carbon_Fields::extend( Code_Field::class, function( $container ) {
	return new Code_Field( $container['arguments']['type'], $container['arguments']['name'], $container['arguments']['label'] );
} );