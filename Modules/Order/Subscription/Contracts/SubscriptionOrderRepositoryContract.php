<?php
namespace Plenty\Modules\Order\Subscription\Contracts;


/**
 * The SubscriptionOrderRepositoryContract allows you to find subscriptions, that due either today or on any given date, so that corresponding orders are created for them.
 */
interface SubscriptionOrderRepositoryContract 
{

	/**
	 * Finds all subscriptions that are due today and creates corresponding orders for them.
	 */
	public function runToday(
	):bool;

	/**
	 * Finds all subscriptions that are due on the given date and creates corresponding orders for them.
	 */
	public function runAnyDate(
		string $date
	):bool;

}