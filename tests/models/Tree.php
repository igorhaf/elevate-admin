<?php

namespace Tests\Models;

use Igorhaf\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{
    use ModelTree;

    /**
     * Create a new Eloquent model instance.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        $connection = config('admin.database.connection') ?: config('database.default');

        $this->setConnection($connection);

        $this->setTable(config('admin.database.menu_table'));

        parent::__construct($attributes);
    }
}
