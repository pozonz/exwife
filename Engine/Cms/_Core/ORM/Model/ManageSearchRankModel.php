<?php

namespace ExWife\Engine\Cms\_Core\ORM\Model;

use Doctrine\DBAL\Connection;
use ExWife\Engine\Cms\_Core\Model\Model;

class ManageSearchRankModel extends Model
{
    public $id = '206794d1-b6c8-40e3-96b5-a2e4970164a5';
   
    public $_uniqid = 'e40ff310-1ab6-429e-b4d9-19c6693ae3f9';
   
    public $_slug = 'manage-search-rank';
   
    public $_status = '1';
   
    public $_closed = '0';
   
    public $_rank = '0';
   
    public $_added = '2021-10-20 14:11:03';
   
    public $_modified = '2021-10-20 14:11:06';
   
    public $_publishFrom = null;
   
    public $_publishTo = null;
   
    public $_userId = '1';
   
    public $_versionUuid = '';
   
    public $_versionOrmId = null;
   
    public $_isDraft = null;
   
    public $_draftName = '';
   
    public $_isBootstrapData = null;
   
    public $_isArchived = null;
   
    public $_displayAdded = '0';
   
    public $_displayModified = '0';
   
    public $_displayUser = '0';
   
    public $title = 'Manage search rank';
   
    public $className = 'ManageSearchRank';
   
    public $modelCategory = '2';
   
    public $listingType = '1';
   
    public $pageSize = '200';
   
    public $defaultSortBy = 'id';
   
    public $defaultOrderBy = 'DESC';
   
    public $accesses = '["3"]';
   
    public $frontendUrl = null;
   
    public $searchableInCms = '0';
   
    public $searchableInFrontend = '0';
   
    public $enableVersioning = '0';
   
    public $columnsJson = '[{"id":"title","label":"Title:","field":"title","widget":"Choice","required":1,"unique":1,"sqlQuery":"FROM _Model","listing":1,"listingWidth":null,"listingTitle":null,"displayFunc":null,"queryable":1,"chosen":false,"selected":false}]';
   

    public function __construct(Connection $connection)
    {
        $this->_connection = $connection;
    }
}