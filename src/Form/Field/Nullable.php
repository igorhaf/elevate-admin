<?php

namespace Igorhaf\Admin\Form\Field;

use Igorhaf\Admin\Form\Field;

class Nullable extends Field
{
    public function __construct()
    {
    }

    public function __call($method, $parameters)
    {
        return $this;
    }
}
