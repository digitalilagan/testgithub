<?php

namespace App\Repositories;

use App\Models\setting;
use App\Repositories\BaseRepository;

/**
 * Class settingRepository
 * @package App\Repositories
 * @version June 12, 2021, 6:25 pm UTC
*/

class settingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return setting::class;
    }
}
