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
 * 	\file		admin/about.php
 * 	\ingroup	invoicegr
 * 	\brief		about page
 */

// Dolibarr environment
$res = @include("../../main.inc.php"); // From htdocs directory
if (!$res) $res = @include("../../../main.inc.php"); // From "custom" directory


// Libraries
require '../lib/invoicegr.lib.php';
require '../lib/PHP_Markdown/markdown.php';


//require_once "../class/myclass.class.php";
// Translations
$langs->load("invoicegr@invoicegr");

// Access control
if (!$user->admin)
	accessforbidden();

/*
 * View
 */
$page_name = $langs->trans("About");
llxHeader('', $page_name);

// Subheader
$linkback = '<a href="' . DOL_URL_ROOT . '/admin/modules.php">'	. $langs->trans("BackToModuleList") . '</a>';
print_fiche_titre($page_name, $linkback);

// Configuration header
$head = invoicegradmin_prepare_head();
dol_fiche_head($head, 'about', $langs->trans("Module13099Name"), 0, "invoicegr@invoicegr");

// About page goes here
echo $langs->trans("AboutPage");

print '<br>';

$buffer = file_get_contents(dol_buildpath('/invoicegr/README.md',0));
print Markdown($buffer);

print '<br>';

print '<a href="'.dol_buildpath('/invoicegr/COPYING',1).'">';
print '<img src="'.dol_buildpath('/invoicegr/img/gplv3.png',1).'"/>';
print '</a>';

llxFooter();
$db->close();
?>
