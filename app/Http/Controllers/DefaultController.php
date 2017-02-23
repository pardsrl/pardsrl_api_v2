<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class DefaultController
 * @package App\Http\Controllers
 *
 * @resource _Default
 *
 * Métodos que brindan información general de la api.
 */
class DefaultController extends Controller
{
	public function ping( ) {
		return ['ack' => time()];
    }
}
