-- Copyright (C) 2021      Nikos Drosis  SysAid.gr     <info@sysaid.gr>
--
-- This program is free software: you can redistribute it and/or modify
-- it under the terms of the GNU General Public License as published by
-- the Free Software Foundation, either version 3 of the License, or
-- (at your option) any later version.
--
-- This program is distributed in the hope that it will be useful,
-- but WITHOUT ANY WARRANTY; without even the implied warranty of
-- MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
-- GNU General Public License for more details.
--
-- You should have received a copy of the GNU General Public License
-- along with this program.  If not, see <http://www.gnu.org/licenses/>.

CREATE TABLE llx_mask4greece_det
(
	rowid 					integer AUTO_INCREMENT PRIMARY KEY,
	fk_m4g 				    integer NOT NULL,
	m4g_1		 			varchar(30),
	m4g_2 					varchar(30),
	m4g_3 					varchar(30),
	m4g_4 					varchar(30)
	
)ENGINE=innodb;
