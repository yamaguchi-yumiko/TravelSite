<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Routing\Exceptions\InvalidSignatureException;

class VerifyEmailToken
{
    /**
     * The URIs that should be excluded from Email verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $relative
     * @return \Illuminate\Http\Response
     *
     * @throws \Illuminate\Routing\Exceptions\InvalidSignatureException
     */
    public function handle($request, Closure $next, $relative = null)
    {
        if ($this->hasValidSignature($request)) {
            return $next($request);
        }

        throw new InvalidSignatureException;
    }

    private function hasValidSignature($request)
    {
        $expires = $request->get('expires');

        $original = $request->get('id') . $expires;

        $signature = hash_hmac('sha256', $original, env('APP_KEY'));

        return  hash_equals($signature, (string) $request->get('signature', '')) &&
               ! ($expires && now()->getTimestamp() > $expires);
    }
}
