<?php
/**
 * This file is part of FacturaScripts
 * Copyright (C) 2017-2018 Carlos Garcia Gomez <carlos@facturascripts.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */
namespace FacturaScripts\Core\Lib\ListFilter;

/**
 * Description of CheckboxFilter
 *
 * @author Carlos García Gómez <carlos@facturascripts.com>
 */
class CheckboxFilter extends BaseFilter
{

    /**
     *
     * @var mixed
     */
    public $matchValue;

    /**
     *
     * @var string
     */
    public $operation;

    public function __construct($key, $field = '', $label = '', $operation = '=', $matchValue = true)
    {
        parent::__construct($key, $field, $label);
        $this->operation = $operation;
        $this->matchValue = $matchValue;
    }

    public function getDataBaseWhere(array &$where)
    {
        return $where;
    }

    public function render()
    {
        $extra = is_null($this->value) ? '' : ' checked=""';
        return '<div class="col">'
            . '<div class="form-group">'
            . '<div class="form-check mb-2 mb-sm-0">'
            . '<label class="form-check-label">'
            . '<input class="form-check-input" type="checkbox" name="' . $this->key . '" value="TRUE" ' . $extra . 'onchange="this.form.submit()"/>'
            . static::$i18n->trans($this->label)
            . '</label>'
            . '</div>'
            . '</div>'
            . '</div>';
    }
}
