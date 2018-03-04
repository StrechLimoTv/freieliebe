<?php

/*
 * Editor server script for DB table users
 * Created by http://editor.datatables.net/generator
 */

// DataTables PHP library and database connection
include( "lib/DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Mjoin,
	DataTables\Editor\Options,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate,
	DataTables\Editor\ValidateOptions;

// The following statement can be removed after the first run (i.e. the database
// table has been created). It is a good idea to do this to help improve
// performance.
$db->sql( "CREATE TABLE IF NOT EXISTS `users` (
	`id` int(10) NOT NULL auto_increment,
	`username` varchar(255),
	`steamid64` varchar(255),
	`auid` varchar(255),
	`gebdat` date,
	`alt_aktl` numeric(9,2),
	`email` varchar(255),
	`register_ip` varchar(255),
	`reg_date` varchar(255),
	`passwort` varchar(255),
	PRIMARY KEY( `id` )
);" );

// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'users', 'id' )
	->fields(
		Field::inst( 'username' ),
		Field::inst( 'steamid64' ),
		Field::inst( 'auid' ),
		Field::inst( 'gebdat' )
			->validator( Validate::dateFormat( 'D, j M Y' ) )
			->getFormatter( Format::dateSqlToFormat( 'D, j M Y' ) )
			->setFormatter( Format::dateFormatToSql( 'D, j M Y' ) ),
		Field::inst( 'alt_aktl' ),
		Field::inst( 'email' ),
		Field::inst( 'register_ip' ),
		Field::inst( 'reg_date' ),
		Field::inst( 'passwort' )
	)
	->process( $_POST )
	->json();
