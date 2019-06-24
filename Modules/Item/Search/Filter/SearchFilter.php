<?php
namespace Plenty\Modules\Item\Search\Filter;

use Plenty\Modules\Cloud\ElasticSearch\Lib\ElasticSearch;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\BoostedTermFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\MatchAutoCompleteFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\MatchExactFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolShouldFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;
use Plenty\Modules\Facet\Facet\Contracts\FacetSearchDefinitionServiceContract;
use Plenty\Modules\Item\Search\Index\Settings;
use Plenty\Modules\Item\Search\Query\SearchQuery;

/**
 * foo
 */
abstract class SearchFilter implements TypeInterface

{

	abstract public function setNamesString(
		string $string, 
		string $lang
	);

	abstract public function setSearchString(
		string $value, 
		string $lang, 
		string $precision = \Plenty\Modules\Cloud\ElasticSearch\Lib\ElasticSearch::SEARCH_TYPE_EXACT, 
		string $operator = \Plenty\Modules\Cloud\ElasticSearch\Lib\ElasticSearch::OR_OPERATOR
	);

	abstract public function setVariationNumber(
		string $value
	);

	abstract public function toArray(
	):array;

	abstract public function addStatement(
		StatementInterface $statement
	);

}