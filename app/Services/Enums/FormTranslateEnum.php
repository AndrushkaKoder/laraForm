<?php

namespace App\Services\Enums;

enum FormTranslateEnum: string
{
	case RU = 'RU';
	case EN = 'EN';
	case RU2 = 'RU2';

	public static function fields($param): array
	{
		return match ($param) {
			self::RU->value => [
				'Имя',
				'Фамилия',
				'Описание'
			],
			self::EN->value => [
				'Name',
				'Surname',
				'Your short text'
			],
			self::RU2->value => [
				'Как звать',
				'Чей будешь',
				'Расскажи еще чего-то'
			],
			default => []
		};
	}
}
