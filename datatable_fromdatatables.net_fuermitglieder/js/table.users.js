
/*
 * Editor client script for DB table users
 * Created by http://editor.datatables.net/generator
 */

(function($){

$(document).ready(function() {
	var editor = new $.fn.dataTable.Editor( {
		ajax: 'php/table.users.php',
		table: '#users',
		fields: [
			{
				"label": "Username:",
				"name": "username"
			},
			{
				"label": "Steamid64:",
				"name": "steamid64"
			},
			{
				"label": "AUID:",
				"name": "auid"
			},
			{
				"label": "Geburtsdatum:",
				"name": "gebdat",
				"type": "datetime",
				"format": "ddd, DD MMM YYYY"
			},
			{
				"label": "Aktuelles Alter:",
				"name": "alt_aktl"
			},
			{
				"label": "E-mail:",
				"name": "email"
			},
			{
				"label": "Reg_IP:",
				"name": "register_ip"
			},
			{
				"label": "Reg_Date:",
				"name": "reg_date"
			},
			{
				"label": "Passwort Hash:",
				"name": "passwort"
			}
		]
	} );

	var table = $('#users').DataTable( {
		dom: 'Bfrtip',
		ajax: 'php/table.users.php',
		columns: [
			{
				"data": "username"
			},
			{
				"data": "steamid64"
			},
			{
				"data": "auid"
			},
			{
				"data": "gebdat"
			},
			{
				"data": "alt_aktl"
			},
			{
				"data": "email"
			},
			{
				"data": "register_ip"
			},
			{
				"data": "reg_date"
			},
			{
				"data": "passwort"
			}
		],
		select: true,
		lengthChange: false,
		buttons: [
			{ extend: 'create', editor: editor },
			{ extend: 'edit',   editor: editor },
			{ extend: 'remove', editor: editor }
		]
	} );
} );

}(jQuery));

