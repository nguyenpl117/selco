<?php

namespace App\Services;

use App\Models\AffilicatedUnit;
use App\Models\CategoryStakeHolder;
use App\Models\NewModel;
use App\Models\Operation;
use App\Models\Partner;
use App\Models\ProjectModel;
use App\Models\Recruitment;
use App\Models\StakeHolder;
use GuzzleHttp\Client;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class ServerAPI
{
    /** @var Client */
    protected $client;

    public function __construct()
    {
        $this->client = new Client(['base_uri' => env('API_URL', 'http://103.98.152.37:5010/api/')]);
    }

    public function get($uri, $options = [])
    {
        $res = $this->client->request('GET', $uri, $options);

        return json_decode($res->getBody()->getContents(), true);
    }

    /**
     * @param $items
     * @param $total
     * @param $perPage
     * @param $currentPage
     * @param $options
     * @return LengthAwarePaginator|null
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function paginator($items, $total, $perPage, $currentPage, $options)
    {
        return app()->makeWith(LengthAwarePaginator::class, compact(
            'items', 'total', 'perPage', 'currentPage', 'options'
        ));
    }

    public function listProjects($pageSize = 12, $page = null, $pageName = 'page')
    {
        $page = $page ?: Paginator::resolveCurrentPage($pageName);
        $langId = langId();

        $data = $this->get("data/projects?lang=$langId&page=$page&pageSize=$pageSize");

        return $this->paginator(
            collect($data['projects'])->map(function ($item) {
                return new ProjectModel($item);
            }),
            $data['totalItems'],
            $data['pageSize'],
            $page,
            [
                'path' => Paginator::resolveCurrentPath(),
                'pageName' => $pageName,
            ]
        );
    }

    public function detailProject($id)
    {
        $langId = langId();
        $data = $this->get("data/project/detail?id=$id&lang_id=$langId");
        return new ProjectModel($data);
    }

    public function listNews($pageSize = 12, $page = null, $pageName = 'page')
    {
        $page = $page ?: Paginator::resolveCurrentPage($pageName);
        $langId = langId();
        $data = $this->get("data/news/?lang=$langId&page=$page&pageSize=$pageSize");
        return $this->paginator(
            collect($data['projects'])->map(function ($item) {
                return new NewModel($item);
            }),
            $data['totalItems'],
            $data['pageSize'],
            $page,
            [
                'path' => Paginator::resolveCurrentPath(),
                'pageName' => $pageName,
            ]
        );
    }

    public function detailNew($id)
    {
        $langId = langId();
        $data = $this->get("data/news/detail?id=$id&lang_id=$langId");
        return new NewModel($data);
    }

    public function listRecruitments($pageSize = 12, $page = null, $pageName = 'page')
    {
        $page = $page ?: Paginator::resolveCurrentPage($pageName);
        $langId = langId();
        $data = $this->get("data/recruitments?lang=$langId&page=$page&pageSize=$pageSize");
        return $this->paginator(
            collect($data['projects'])->map(function ($item) {
                return new Recruitment($item);
            }),
            $data['totalItems'],
            $data['pageSize'],
            $page,
            [
                'path' => Paginator::resolveCurrentPath(),
                'pageName' => $pageName,
            ]
        );
    }

    public function detailRecruitment($id)
    {
        $langId = langId();
        $data = $this->get("data/recruitments/detail?id=$id&lang_id=$langId");
        return new Recruitment($data);
    }

    public function listStakeHolders($code = null, $pageSize = 12, $page = null, $pageName = 'page')
    {
        if (!$code) {
            $lists = serverAPI()->categoryStakeHolder();
            $code = $lists->first()?->categoryCode;
        }
        $page = $page ?: Paginator::resolveCurrentPage($pageName);
        $langId = langId();
        $data = $this->get("data/stakeholders?categoryCode=$code&lang=$langId&page=$page&pageSize=$pageSize");
        return $this->paginator(
            collect($data['projects'])->map(function ($item) {
                return new StakeHolder($item);
            }),
            $data['totalItems'],
            $data['pageSize'],
            $page,
            [
                'path' => Paginator::resolveCurrentPath(),
                'pageName' => $pageName,
            ]
        );
    }

    public function detailStakeHolder($id)
    {
        $langId = langId();
        $data = $this->get("data/stakeholders/detail?id=$id&lang_id=$langId");
        return new StakeHolder($data);
    }

    public function listPartners($pageSize = 12, $page = null, $pageName = 'page')
    {
        $page = $page ?: Paginator::resolveCurrentPage($pageName);
        $langId = langId();
        $data = $this->get("data/partners?lang=$langId&page=$page&pageSize=$pageSize");

        return collect($data)->map(function ($item) {
            return new Partner($item);
        });
    }

    public function categoryStakeHolder()
    {
        $data = $this->get("data/StakeholderCategories");

        return collect($data)->map(function ($item) {
            return new CategoryStakeHolder($item);
        });
    }

    public function affiliatedUnits()
    {
        $langId = langId();
        $data = $this->get("data/affiliatedUnits/?lang=$langId");
        return collect($data)->map(function ($item) {
            return new AffilicatedUnit($item);
        });
    }

    public function listOperations($pageSize = 12, $page = null, $pageName = 'page')
    {
        $page = $page ?: Paginator::resolveCurrentPage($pageName);
        $langId = langId();
        $data = $this->get("data/operations/?lang=$langId&page=$page&pageSize=$pageSize");
        return $this->paginator(
            collect($data['projects'])->map(function ($item) {
                return new Operation($item);
            }),
            $data['totalItems'],
            $data['pageSize'],
            $page,
            [
                'path' => Paginator::resolveCurrentPath(),
                'pageName' => $pageName,
            ]
        );
    }

    public function detailOperation($id)
    {
        $langId = langId();
        $data = $this->get("data/operations/detail?id=$id&lang_id=$langId");
        return new Operation($data);
    }
}