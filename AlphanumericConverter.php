<?php
namespace miguelhatrick\YiiToolbox;

class AlphanumericConverter
{
    public $length;

    protected $replace = array(
        '0' => 'Y',
        'O' => 'Z'
    );

    public function __construct($length = null)
    {
        $this->length = $length;
    }

    /*
     * Base 34 encoding used for creating user readable codes 
     */
    public function encode($number)
    {
        $encoded = base_convert($number, 10, 34);
        $encoded = strtoupper($encoded);
        $encoded = strtr($encoded, $this->replace);
        if ($this->length)
            $encoded = str_pad($encoded, $this->length, '0', STR_PAD_LEFT);
        return $encoded;
    }

    public function decode($encoded)
    {
        $encoded = strtoupper($encoded);
        $encoded = strtr($encoded, array_flip($this->replace));
        $decoded = base_convert($encoded, 34, 10);
        $decoded = intval($decoded);
        return $decoded;
    }
}

