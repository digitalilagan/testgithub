<?php

namespace App\Repositories;

use App\Models\ProfileJQ;
use App\Repositories\BaseRepository;

/**
 * Class ProfileJQRepository
 * @package App\Repositories
 * @version June 12, 2021, 6:11 pm UTC
*/

class ProfileJQRepository extends BaseRepository
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
        return ProfileJQ::class;
    }
}
