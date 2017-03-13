<?php

namespace App\Traits;

use Carbon\Carbon;

trait DateSerializable
{
	protected function serializeDate(\DateTimeInterface $date)
	{
		$locale         = config('app.locale');

		$fallbackLocale = config('app.fallback_locale');

		//dd($locale);

		switch ($locale){
			case 'es':
				$format = 'd/m/Y H:i:s';
				break;
			default:
				$format = 'Y-m-d H:i:s';
				break;
		}

		return $date->format($format);
	}
}