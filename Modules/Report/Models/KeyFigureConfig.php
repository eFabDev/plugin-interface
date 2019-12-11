<?php
namespace Plenty\Modules\Report\Models;


/**
 * The key figure config model represents the configuration of a key figure.
 */
abstract class KeyFigureConfig 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$plentyIdHash;
	public		$keyFigure;
	public		$keyFigureName;
	public		$filter;
	public		$calculationTimeIntervals;
	public		$calculatedAt;
	public		$updatedAt;
	public		$createdAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}