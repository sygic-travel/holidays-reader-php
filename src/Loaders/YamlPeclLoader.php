<?php

namespace SygicTravel\HolidaysCalculator\Loaders;

use SygicTravel\HolidaysCalculator\Loaders\Utils\YamlParser;


class YamlPeclLoader implements ILoader
{
	/** @var YamlParser */
	private $parser;


	public function load(string $fileName): array
	{
		$definitions = yaml_parse_file($fileName)['months'];
		if ($this->parser === null) {
			$this->parser = new YamlParser();
		}
		return $this->parser->parse($definitions);
	}
}
