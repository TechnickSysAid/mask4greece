<?php
/* Copyright (C) 2014	Nikos Drosis Technicks ICT <info@technicks.eu>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * 	\defgroup	mymodule	MyModule module
 * 	\brief		MyModule module descriptor.
 * 	\file		core/modules/modMyModule.class.php
 * 	\ingroup	mymodule
 * 	\brief		Description and activation file for module MyModule
 */
include_once DOL_DOCUMENT_ROOT . "/core/modules/DolibarrModules.class.php";

/**
 * Description and activation class for module Facturepoids
 */
class modInvoiceGr extends DolibarrModules
{

	/**
	 * 	Constructor. Define names, constants, directories, boxes, permissions
	 *
	 * 	@param	DoliDB		$db	Database handler
	 */
	function modInvoiceGr($db)
	{
		global $langs, $conf;

		$this->db = $db;

		$this->numero = 13001;
		$this->rights_class = 'invoicegr';

		$this->family = "financial";

		$this->name = preg_replace('/^mod/i', '', get_class($this));

		$this->description = "Enable Invoice model for Greece standard";

		$this->version = '1.8.5 Beta';

		$this->const_name = 'MAIN_MODULE_' . strtoupper($this->name);

		$this->special = 0;

		$this->picto = 'invoicegr@invoicegr'; // mypicto@mymodule

		$this->module_parts = array(
			'models' => 1,
		);


		$this->dirs = array();


		$this->config_page_url = array("admin_invoicegr.php@invoicegr");
		$this->depends = array('modSociete');
		$this->requiredby = array();
		$this->phpmin = array(5, 2);
		$this->need_dolibarr_version = array(3, 2);
		$this->langfiles = array("invoicegr@invoicegr"); // langfiles@mymodule

		$this->const = array();

		$this->tabs = array();

		if ( ! isset($conf->mymodule->enabled)) $conf->mymodule->enabled = 0;
		$this->dictionnaries = array();
	

		// Boxes
		// Add here list of php file(s) stored in core/boxes that contains class to show a box.
		$this->boxes = array(); // Boxes list
		$r = 0;
		
		// Permissions
		$this->rights = array(); // Permission array used by this module
		$r = 0;

		// Main menu entries
		$this->menus = array(); // List of menus to add
		$r = 0;
	}

	/**
	 * Function called when module is enabled.
	 * The init function add constants, boxes, permissions and menus
	 * (defined in constructor) into Dolibarr database.
	 * It also creates data directories
	 *
	 * 	@param		string	$options	Options when enabling module ('', 'noboxes')
	 * 	@return		int					1 if OK, 0 if KO
	 */
	function init($options = '')
	{
		$sql = array("INSERT INTO llx_document_model (nom ,entity ,type ,libelle) VALUES ('moon_invoicegr', '1', 'invoice', 'ΤΙΜΟΛΟΓΙΟ-ΔΕΛΤΙΟ ΑΠΟΣΤΟΛΗΣ');");
		$sql = array("INSERT INTO llx_document_model (nom ,entity ,type ,libelle) VALUES ('moon_invoicegr1', '1', 'invoice', 'ΤΙΜΟΛΟΓΙΟ-ΠΑΡΟΧΗΣ ΥΠΗΡΕΣΙΩΝ');");
		$sql = array("INSERT INTO llx_document_model (nom ,entity ,type ,libelle) VALUES ('moon_invoicegr2', '1', 'invoice', 'ΠΙΣΤΩΤΙΚΟ ΤΙΜΟΛΟΓΙΟ');");
		$sql = array("INSERT INTO llx_document_model (nom ,entity ,type ,libelle) VALUES ('moon_invoicegr3', '1', 'invoice', 'ΔΕΛΤΙΟ ΠΑΡΑΛΑΒΗΣ');");
		$sql = array("INSERT INTO llx_document_model (nom ,entity ,type ,libelle) VALUES ('moon_invoicegr4', '1', 'invoice', 'ΔΕΛΤΙΟ ΑΠΟΣΤΟΛΗΣ');");
		$sql = array("INSERT INTO llx_document_model (nom ,entity ,type ,libelle) VALUES ('moon_invoicegr5', '1', 'invoice', 'ΑΠΟΔΕΙΞΗ ΛΙΑΝΙΚΗΣ ΠΩΛΗΣΗΣ');");
		return $this->_init($sql, $options);
	}

	/**
	 * Function called when module is disabled.
	 * Remove from database constants, boxes and permissions from Dolibarr database.
	 * Data directories are not deleted
	 *
	 * 	@param		string	$options	Options when enabling module ('', 'noboxes')
	 * 	@return		int					1 if OK, 0 if KO
	 */
	function remove($options = '')
	{
		$sql = array("DELETE FROM ".MAIN_DB_PREFIX."document_model WHERE nom like 'moon_%';");
		return $this->_remove($sql);
//$sql = array("DELETE FROM llx_document_model  WHERE nom='moon_%'");

		return $this->_remove($sql, $options);
	}
}

?>
