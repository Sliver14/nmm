<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DomainRedirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $host = $request->getHost();
        $primaryDomain = 'networkformedicalmissions.org';
        $redirectDomains = [
            'medicalmissionsnetwork.org',
            'christforthehurting.org'
        ];

        // If the current host matches any of the old domains, permanently redirect to the primary domain
        if (in_array($host, $redirectDomains)) {
            $url = 'https://www.' . $primaryDomain . $request->getRequestUri();
            return redirect($url, 301); // 301 Permanent Redirect
        }

        return $next($request);
    }
}
