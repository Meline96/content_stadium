<?php

namespace App\Http\Controllers;

use App\Services\Contracts\BetService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected BetService $betData;

    /**
     * @param BetService $betData
     */
    public function __construct(BetService $betData)
    {
        $this->betData = $betData;
    }

    public function getData()
    {
        dd($this->betData->get());
    }
}
