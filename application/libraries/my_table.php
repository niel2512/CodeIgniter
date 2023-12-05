<?php
defined('BASEPATH') OR exit('No direct script acces allowed');
class my_table extends CI_Table {
	protected function _default_template()
	{
		return array(
			'table_open'			=> '<table border="1" cellpadding="4" cellspacing="0">',

			'thead_open'			=> '<thead>',
			'thead_close'			=> '</thead>',

			'heading_row_start' 	=> '<tr bgcolor="#ff9900" align="center">',
			'heading_row_end' 		=> '</tr>',
			'heading_cell_start'	=> '<th>',
			'heading_cell_end' 		=> '</th>',

			'tbody_open' 			=> '<tbody>',
			'tbody_close' 			=> '</tbody>',

			'row_start' 			=> '<tr bgcolor="32CD32">',
			'row_end' 				=> '</tr>',
			'cell_start'			=> '<td>',
			'cell_end'				=> '</td>',

			'row_alt_start'			=> '<tr bgcolor="#ff1493">',
			'row_alt_end'			=> '</tr>',
			'cell_alt_start' 		=> '<td><font color="ffffff">',
			'cell_alt_end' 			=> '</font></td>',

			'table_close'			=> '</table>'
		);
	}
}