<?php
/**
 * Export/Import a database using SQL
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2006-2008 Greg Roach, all rights reserved
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License or,
 * at your discretion, any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 */

define('PGV_SCRIPT_NAME', 'pgv_export.php');
require './config.php';

if (!PGV_USER_GEDCOM_ADMIN) {
	header("Location: login.php?url=pgv_export.php");
	exit;
}

echo '<h1>DB export / conversion / import utility</h1>';
echo '<p><b>Usage:</b> drop script into PGV 4.2 home directory.  Visit script.';
echo '<br />* Export (all) tables to individual SQL files';
echo '<br />* Convert (all) tables to UTF8';
echo '<br />* <font color="red">IMPORTANT:</font> edit config.php to change $DB_UTF8_COLLATION to <b>true</b>';
echo '<br />* Import (all) tables from SQL files back into the database';
echo '<br />* Visit your installation to verify everything appears the same';
echo '<br />* For each GEDCOM, Export the GEDCOM in the manage GEDCOM page';
echo '<br />';
echo '<br />This tool was created mainly as a way to fix a bug in PhpGedView that did not properly setup the database and PHP code to handle UTF-8 everywhere. It can also be used to export and re-import individual SQL tables of the database.  Requires you be logged in as the administrator to operate.  Make sure to export your database as a backup before operating.';
echo '</p>';

echo '<table border="1"><tr><th>Table</th><th>Rows</th><th colspan="2">Backup file</th><th colspan="3">Action</th><th>Result</th></tr>';

echo '<tr><td colspan="4"><font color="red">IMPORTANT:</font> after all export and conversion, but before the first import, change config.php $DB_UTF8_COLLATION setting to <b>true</b>.</td>';
echo '<td><form method="get" action="pgv_export.php"><input type="hidden" name="export" value="all"><input type="submit" value="export all"></form></td>';
echo '<td><form method="get" action="pgv_export.php"><input type="hidden" name="utf8" value="all"><input type="submit" value="convert all to utf8"></form></td>';
echo '<td><form method="get" action="pgv_export.php"><input type="hidden" name="import" value="all"><input type="submit" value="import all"></form></td>';
echo '<td>&nbsp;</td></tr>';

$tables=PGV_DB::all_tables();
foreach ($tables as $table) {
	$cols=PGV_DB::all_columns($table);
	$rows=PGV_DB::prepare("SELECT COUNT(*) FROM {$table}")->fetchOne();
	$filename=$table.'.sql';
	$file=$INDEX_DIRECTORY.$filename;
	if (file_exists($file)) {
		if (is_readable($file)) {
			$stat=stat($file);
			$status='mtime: '.date('Y-m-d/H:i:s', $stat['mtime']).'<br/>'.count(file($file)).' lines, '.$stat['size'].' bytes';
			$ok=true;
		} else {
			$status='cannot read file';
			$ok=false;
		}
	} else {
		$status='not present';
		$ok=false;
	}
	echo '<tr><td>', $table, '</td><td>', $rows, '</td><td>', $file, '</td><td>', $status, '</td><td><form method="get" action="pgv_export.php"><input type="hidden" name="export" value="', $table, '"><input type="submit" value="export"></form></td>';
	echo '<td><form method="get" action="pgv_export.php"><input type="hidden" name="utf8" value="', $table, '"><input type="submit" value="convert to UTF8"></form></td>';
	if ($ok) {
		echo '<td><form method="get" action="pgv_export.php"><input type="hidden" name="import" value="', $table, '"><input type="submit" value="import"></form></td>';
	}	else {
		echo '<td>&nbsp;</td>';
	}
	echo '</td><td>';
	if (safe_GET('export')=='all' || safe_GET('export')==$table) {
		$file=$INDEX_DIRECTORY.$table.'.sql';
		$h=fopen($file, 'w');
		fprintf($h, "delete from {$table} where 1=1;\n");
		$col_names=implode(',', $cols);
		foreach (PGV_DB::prepare("SELECT {$col_names} FROM {$table}")->fetchAll(PDO::FETCH_ASSOC) as $row) {
			$col_values=array();
			foreach ($row as $data) {
				if (is_null($data)) {
					$col_values[]="NULL";
				} else {
					$col_values[]=PGV_DB::quote($data);
				}
			}
			$col_values=implode(',', $col_values);
			fprintf($h, "%s", "insert into {$table} ({$col_names}) values ($col_values);\n");
		}
		fclose($h);
		echo 'Exported table ', $table, ' to file ', $file;
	} elseif (safe_GET('utf8')=='all' || safe_GET('utf8')==$table) {
		$sqls=array();
		$sqls[]="alter database collate utf8_unicode_ci;";
		$sqls[]="alter table {$table} collate utf8_unicode_ci;";
		foreach (PGV_DB::prepare("DESC {$table}")->fetchAll(PDO::FETCH_NUM) as $row) {
			list($type)=explode('(', $row[1]);
			$null=$row[2]=='YES' ? 'NULL' : 'NOT NULL';
			switch ($type) {
			case 'char':
			case 'varchar':
			case 'tinytext':
			case 'text':
			case 'mediumtext':
			case 'longtext':
				$sqls[]="alter table {$table} change {$row[0]} {$row[0]} {$row[1]} collate ascii_bin {$null};";
				$sqls[]="alter table {$table} change {$row[0]} {$row[0]} {$row[1]} collate utf8_unicode_ci {$null};";
				break;
			}
		}
		foreach ($sqls as $sql) {
			echo $sql, '<br/>';
			PGV_DB::exec($sql);
		}
		echo '<br/>Converted table ', $table, ' to UTF8';
	} elseif (safe_GET('import')=='all' || safe_GET('import')==$table) {
		$file=$INDEX_DIRECTORY.$table.'.sql';
		foreach (file($file) as $sql) {
			PGV_DB::exec($sql);
		}
		echo 'Imported file ', $file, ' to table ', $table;
	} else {
		echo '&nbsp;';
	}
	
	echo '</td></tr>';
	flush();
}
echo '<tr><td colspan="4">&nbsp;</td>';
echo '<td><form method="get" action="pgv_export.php"><input type="hidden" name="export" value="all"><input type="submit" value="export all"></form></td>';
echo '<td><form method="get" action="pgv_export.php"><input type="hidden" name="utf8" value="all"><input type="submit" value="convert all to utf8"></form></td>';
echo '<td><form method="get" action="pgv_export.php"><input type="hidden" name="import" value="all"><input type="submit" value="import all"></form></td>';
echo '<td>&nbsp;</td></tr></table>';

 	  	 
