<?php

/**
  @version   v5.21.0-dev  ??-???-2016
  @copyright (c) 2000-2013 John Lim (jlim#natsoft.com). All rights reserved.
  @copyright (c) 2014      Damien Regad, Mark Newnham and the ADOdb community
  Released under both BSD license and Lesser GPL library license.
  Whenever there is any discrepancy between the two licenses,
  the BSD license will take precedence.

  Set tabs to 4 for best viewing.

*/

// security - hide paths
if (!defined('ADODB_DIR')) die();

class ADODB2_ibase extends ADODB_DataDict {

	var $databaseType = 'ibase';
	var $seqField = false;

	protected $actualTypes = array(
		ADODB_METATYPE_C=>'VARCHAR',
		ADODB_METATYPE_C2=>'VARCHAR',
		ADODB_METATYPE_B=>'BLOB',
		ADODB_METATYPE_D=>'DATE',
		ADODB_METATYPE_F=>'DOUBLE PRECISION',
		ADODB_METATYPE_L=>'SMALLINT',
		ADODB_METATYPE_I=>'INTEGER',
		ADODB_METATYPE_I1=>'SMALLINT',
		ADODB_METATYPE_I2=>'SMALLINT',
		ADODB_METATYPE_I4=>'INTEGER',
		ADODB_METATYPE_I8=>'INTEGER',
		ADODB_METATYPE_N=>'DECIMAL',
		ADODB_METATYPE_R=>'DOUBLE PRECISION',
		ADODB_METATYPE_T=>'TIMESTAMP',
		ADODB_METATYPE_XL=>'VARCHAR(4000)',
		ADODB_METATYPE_X=>'VARCHAR(4000)',
		ADODB_METATYPE_X2=>'VARCHAR(4000)',
		'TS'=>'TIMESTAMP',
		);
 	

	function AlterColumnSQL($tabname, $flds, $tableflds='', $tableoptions='')
	{
		if ($this->debug) ADOConnection::outp("AlterColumnSQL not supported");
		return array();
	}


	function DropColumnSQL($tabname, $flds, $tableflds='', $tableoptions='')
	{
		if ($this->debug) ADOConnection::outp("DropColumnSQL not supported");
		return array();
	}

}
