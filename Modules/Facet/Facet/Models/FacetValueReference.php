<?php
namespace Plenty\Modules\Facet\Facet\Models;


/**
 * The facet value reference model
 */
abstract class FacetValueReference 
{

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$facetId;
	public		$facetValueId;
	public		$type;
	public		$groupId;
	public		$valueId;
	public		$createdAt;
	public		$facet;
	public		$value;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}