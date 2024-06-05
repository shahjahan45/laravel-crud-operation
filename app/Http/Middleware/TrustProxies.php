<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustProxies as Middleware;
use Symfony\Component\HttpFoundation\Request;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array|string|null
     */
    protected $proxies;

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
    protected $headers = 0b00000010; // Use bitwise OR for multiple headers

    /**
     * The headers that should be used to detect proxies if using AWS load balancers.
     *
     * @var int
     */
    // protected $headers = Request::HEADER_X_FORWARDED_ALL;

    /**
     * Determine if the given request has a trusted IP address.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    public function trusts($request)
    {
        return true; // You may need to customize this logic based on your environment
    }
}
