<?php
namespace Plenty\Modules\Basket\Events\BasketItem;

use Plenty\Modules\Basket\Models\BasketItem;

/**
 * The event is triggered before an item in the shopping cart is updated.
 */
abstract class BeforeBasketItemUpdate 
{

	public function getBasketItem(
	):BasketItem
	{
		return new BasketItem();
	}

}