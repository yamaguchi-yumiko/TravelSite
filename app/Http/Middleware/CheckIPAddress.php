<?php declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\IpUtils;

final class CheckIPAddress
{
    private const ALLOWED_IPS = [
        '127.0.0.1', // 例) ローカルからのアクセスは許可
        '172.17.0.1/16', // 例) サブネットマスクで範囲指定も可能(docker networkのIP range)
    ];
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (config('app.env') === 'local' || $this->isAllowedIp($request->ip())) {
            return $next($request);
        }

        throw new AuthorizationException(sprintf('Access denied from %s', $request->ip()));
    }
    /**
     * @param string $ip
     * @return bool
     */
    private function isAllowedIp(string $ip): bool
    {
        return IpUtils::checkIp($ip, self::ALLOWED_IPS);
    }
}