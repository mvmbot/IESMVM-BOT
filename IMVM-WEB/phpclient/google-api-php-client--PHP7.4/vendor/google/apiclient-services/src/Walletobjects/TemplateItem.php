<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Walletobjects;

class TemplateItem extends \Google\Model
{
  /**
   * @var FieldSelector
   */
  public $firstValue;
  protected $firstValueType = FieldSelector::class;
  protected $firstValueDataType = '';
  /**
   * @var string
   */
  public $predefinedItem;
  /**
   * @var FieldSelector
   */
  public $secondValue;
  protected $secondValueType = FieldSelector::class;
  protected $secondValueDataType = '';

  /**
   * @param FieldSelector
   */
  public function setFirstValue(FieldSelector $firstValue)
  {
    $this->firstValue = $firstValue;
  }
  /**
   * @return FieldSelector
   */
  public function getFirstValue()
  {
    return $this->firstValue;
  }
  /**
   * @param string
   */
  public function setPredefinedItem($predefinedItem)
  {
    $this->predefinedItem = $predefinedItem;
  }
  /**
   * @return string
   */
  public function getPredefinedItem()
  {
    return $this->predefinedItem;
  }
  /**
   * @param FieldSelector
   */
  public function setSecondValue(FieldSelector $secondValue)
  {
    $this->secondValue = $secondValue;
  }
  /**
   * @return FieldSelector
   */
  public function getSecondValue()
  {
    return $this->secondValue;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TemplateItem::class, 'Google_Service_Walletobjects_TemplateItem');
