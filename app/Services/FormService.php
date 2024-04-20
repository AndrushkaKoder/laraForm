<?php

namespace App\Services;

use App\Services\Enums\FormTranslateEnum;
use Illuminate\Support\Str;

class FormService
{
	public static function getFields(): array
	{
		$keys = self::formFieldsNames();
		$values = self::formFieldsValues();

		return ($keys && $values) && (count($keys) === count($values))
			?
			array_combine($keys, $values)
			:
			[];
	}

	private static function formFieldsNames(): array
	{
		return config('frontend.form_fields') ?? [];
	}

	private static function formFieldsValues(): array
	{
		$fieldsLang = Str::upper(env('FORM_TRANSLATE'));
		if (!$fieldsLang) throw new \Exception('Check .env file!');
		return FormTranslateEnum::fields($fieldsLang);
	}
}
