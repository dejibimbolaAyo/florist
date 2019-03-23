<?php
/**
 * Generates a headless url, e.g. //demo.secapay.com
 * 
 * This helps maintain relative references to help ensure website works properly on http/https
 */
function headless_url($path)
{
    if(starts_with($path, '//'))
    {
        return $path;
    }
    if(starts_with($path, ['http', 'https']))
    {
        $url = $path;
    }
    else
    {
        $base = url('/');
        $url = substr($base, strpos($base, ':')+1) .'/'. $path;
    }
    if(substr($url, -2) == '//')
    {
        return substr($url, 0, -1);
    }
    return $url;
}