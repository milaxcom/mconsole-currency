<?php

namespace Milax\Mconsole\Currency\Models;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $table = 'mconsole_currencies';
    protected $fillable = ['name', 'prefix', 'suffix', 'basic', 'decimals', 'delimiter', 'names'];
    protected $casts = [
        'names' => 'array',
    ];
    
    /**
     * Format price
     * 
     * @param  int $amount
     * @param  bool $withName [Get price with currency name]
     * 
     * @return string
     */
    public function format($amount, $withName = false)
    {
        $amount = str_replace(',', '.', $amount / $this->basic);
        $amount = number_format($amount, $this->decimals, $this->delimiter, ' ');
        
        if (isset($_SERVER['HTTP_USER_AGENT'])) {
            $browers = array_unique([
                strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') !== -1,
                strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 6.0') !== -1,
            ]);
            
            if (in_array(false, $browers))  {
                $amount = str_replace(' ', $this->delimiter, $amount);
            }
        }
        
        $amount = explode('.', $amount);
        if (count($amount) > 1 && $amount[1] != str_repeat('0', $this->decimals)) {
            $amount = sprintf('%s%s%s', $amount[0], $this->delimiter, $amount[1]);
        } else {
            $amount = $amount[0];
        }
        
        if ($withName) {
            return sprintf('%s%s%s', $this->prefix, $amount, $this->suffix);
        }
        
        return $amount;
    }
    
    // @todo method for printing price as string
    // public function toString();
}
