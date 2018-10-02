<?php

namespace App\Http\Middleware;

use Closure;

class StoreReferralCode
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // Check that there is not already a cookie set and that we have 'ref' in the url
        if (! $request->hasCookie('ref') && $request->query('ref') ) {
            // Add a cookie to the response that lasts 5 years (in minutes)
            $response->cookie( 'ref', encrypt( $request->query('ref') ), 500 );
        }
        // if ref exist already in the cookie then show error page
        else {
            if ( $request->query('ref') ) {
                return redirect('/error');
            }
            return $response;

        }

        return $response;
    }
}
