<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SupabaseService
{
    protected $url;
    protected $key;

    public function __construct()
    {
        $this->url = config('services.supabase.url');
        $this->key = config('services.supabase.key');
    }

    public function getTableData($table, $filters = [])
    {
        $response = Http::withHeaders([
            'apikey' => $this->key,
            'Authorization' => 'Bearer ' . $this->key,
        ])->get("{$this->url}/rest/v1/{$table}", $filters);

        return $response->json();
    }

    public function insertData($table, $data)
    {
        $response = Http::withHeaders([
            'apikey' => $this->key,
            'Authorization' => 'Bearer ' . $this->key,
            'Content-Type' => 'application/json',
        ])->post("{$this->url}/rest/v1/{$table}", $data);

        return $response->json();
    }
}
