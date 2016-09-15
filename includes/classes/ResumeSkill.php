<?php

/**
 * Created by PhpStorm.
 * User: robinche
 * Date: 9/14/16
 * Time: 3:27 PM
 */
class ResumeSkill
{
  protected $name, $column;
  /** @var ResumeSkillRecord[]  */
  protected $data = [];

  public function __construct($name, $column, $element = 'rec')
  {
    $this->name = $name;
    $this->column = $column;
    $this->element = $element;
  }

  /**
   * @param ResumeSkillRecord $data
   * @param null $key
   * @return $this
   */
  public function withData(ResumeSkillRecord $data, $key = null)
  {
    if ($key) {
      $this->data[$key] = $data;
    } else {
      $this->data[] = $data;
    }

    return $this;
  }

  /**
   * @return string
   */
  public function render() {
    $output = '<span class="token tag"><span class="token punctuation"><</span>' . $this->name . '<span class="token punctuation">></span></span>'.PHP_EOL;
    foreach ($this->data as $element => $record) {
      $element_name = is_numeric($element) ? $this->element : $element;
      $output .= $record->render($element_name);
    }
    $output .= '<span class="token tag"><span class="token punctuation">&lt;/</span>' . $this->name . '<span class="token punctuation">></span></span>';

    return $output;
  }

  /**
   * @return mixed
   */
  public function getColumn()
  {
    return $this->column;
  }

}