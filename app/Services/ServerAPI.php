<?php

namespace App\Services;
use App\Models\ProjectModel;
use GuzzleHttp\Client;

class ServerAPI
{
    /** @var Client */
    protected $client;

    public function __construct()
    {
        $this->client = new Client(['base_uri' => 'http://103.98.152.37:5010/api/']);
    }

    public function get($uri, $options = [])
    {
        $res = $this->client->request('GET', $uri, $options);

        return json_decode($res->getBody()->getContents(), true);
    }

    public function listProjects()
    {
        $data = $this->get('data/projects');
        return collect($data)->map(function ($item) {
            return new ProjectModel($item);
        });
    }

    public function detailProduct($id)
    {
        $data = $this->get("data/project/detail&$id&1");
        return new ProjectModel($data);
    }
}