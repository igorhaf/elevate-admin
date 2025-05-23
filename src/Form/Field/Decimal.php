<?php

namespace Igorhaf\Admin\Form\Field;

class Decimal extends Text
{
    protected static $js = [
        '/vendor/elevate-admin/AdminLTE/plugins/input-mask/jquery.inputmask.bundle.min.js',
    ];

    /**
     * @see https://github.com/RobinHerbots/Inputmask#options
     *
     * @var array
     */
    protected $options = [
        'alias'      => 'decimal',
        'rightAlign' => true,
    ];

    public function render()
    {
        $this->inputmask($this->options);

        $this->prepend('<i class="fa '.$this->icon.' fa-fw"></i>')
            ->defaultAttribute('style', 'width: 130px');

        return parent::render();
    }
}
