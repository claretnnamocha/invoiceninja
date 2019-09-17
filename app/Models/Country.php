<?php
/**
 * Invoice Ninja (https://invoiceninja.com)
 *
 * @link https://github.com/invoiceninja/invoiceninja source repository
 *
 * @copyright Copyright (c) 2019. Invoice Ninja LLC (https://invoiceninja.com)
 *
 * @license https://opensource.org/licenses/AAL
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends StaticModel
{
    public $timestamps = false;

    protected $casts = [
        'eea' => 'boolean',
        'swap_postal_code' => 'boolean',
        'swap_currency_symbol' => 'boolean',
    ];
    
    /**
     * Localizes the country name for the clients language.
     * 	
     * @return string The translated country name
     */
    public function getName() :string
    {
        return trans('texts.country_' . $this->name);
    }


}

