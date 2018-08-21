<?php
/**
 * Created by PhpStorm.
 * User: janhenkes
 * Date: 20/08/2018
 * Time: 14:27
 */

namespace Teamleader\Entities;

use Teamleader\Actions\Storable;
use Teamleader\Model;

class Deal extends Model {
    use Storable;

    protected $fillable = [
        'id',
        'lead', // { "customer": { "type": "contact", "id" : "" }, "contact_person_id" : "" }
        'title',
        'source_id',
        'department_id',
        'responsible_user_id',
        'phase_id',
        'estimated_value',
        'estimated_probability',
        'estimated_closing_date',
        'custom_fields',
    ];

    /**
     * @var string
     */
    protected $endpoint = 'contacts';
}