<?php

namespace App\Services;

use App\Services\Contracts\BetService as BetServiceInterface;

class BetService implements BetServiceInterface
{
    private string $url = 'https://genfeeds.hollandcasino.nl/odds_feed?key=get_match_markets_for_type&lang=nl&channel=HCWEB&mkt_sort=MRES&sb_type_id=454902';

    /**
     * @return array
     */
    public function get(): array
    {
        $dataXML = simplexml_load_string(file_get_contents($this->url));

        $dataJson = json_encode($dataXML);
        $returnData = json_decode($dataJson,TRUE);

        return $returnData;
    }
}
