<?php

namespace App\Jobs\View\Homepage;

use App\Models\Server\Server;
use App\Models\User\User;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class Servers
{
    use Queueable;

    public function __construct()
    {
        //
    }

    public function handle(): void
    {
        $servers = Server::all();

        User::query()->update(['user_online' => false]);

        $responses = Http::pool(function ($pool) use ($servers) {
            foreach ($servers as $server) {
                $pool->get("https://getserve.rs/server/{$server['server_ip']}/{$server['server_port']}/json");
            }
        });

        foreach ($responses as $index => $response) {
            if ($response instanceof Response && $response->successful()) {
                $data = $response->json();

                Server::updateOrCreate(
                    ['server_port' => $data['port']],
                    [
                        'server_players_count' => $data['realClients'] ?? 0,
                        'server_players_max' => $data['maxplayers'] ?? 0,
                        'server_round' => $data['round'] ?? 0
                    ]
                );

                if (!empty($data['players'])) {
                    foreach ($data['players'] as $playerData) {
                        User::updateOrCreate(
                            ['id' => $playerData['id']],
                            [
                                'name' => $playerData['username'],
                                'user_online' => true
                            ]
                        );
                    }
                }
            } else {
                \Log::warning('Server request failed', ['response' => $response]);
            }
        }
    }
}
