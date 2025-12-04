<?php

namespace App\Jobs\Server;

use App\Models\Server\Server;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Http;

class Servers
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $servers = Server::all();

        $responses = Http::pool(function ($pool) use ($servers) {
            foreach ($servers as $server) {
                $pool->get("https://getserve.rs/server/{$server['server_ip']}/{$server['server_port']}/json");
            }
        });

        foreach ($responses as $index => $response) {
            if ($response->successful()) {
                $data = $response->json();

                Server::updateOrCreate(
                    ['server_port' => $data['port']],
                    [
                        'server_ip' => $data['ip'],
                        'server_port' => $data['port'],
                        'server_players_count' => $data['realClients'],
                        'server_players_max' => $data['maxplayers'],
                        'server_round' => $data['round']
                    ]
                );
            }
        }
    }
}
