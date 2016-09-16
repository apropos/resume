<?php

/**
 * Created by PhpStorm.
 * User: robinche
 * Date: 9/14/16
 * Time: 3:27 PM
 */
class ResumeSkill
{
  protected $name, $content, $column, $tab = '   ';
  protected $attributes = [];
  /** @var ResumeSkillRecord[]  */
  protected $data = [];

  public function __construct($name, $column, array $attributes = [], $element = 'rec')
  {
    $this->name = $name;
    $this->column = $column;
    $this->attributes = $attributes;
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
    $attributes = '';
    foreach ($this->attributes as $attr => $val) {
      $attributes .= ' <span class="token attr-name">' .$attr. '</span><span class="token punctuation">="</span>' .$val. '<span class="token punctuation">"</span>';
    }
    $output = '<span class="token tag"><span class="token punctuation"><</span>' . $this->name . $attributes . '<span class="token punctuation">></span></span>'.PHP_EOL;
    foreach ($this->data as $element => $record) {
      $element_name = is_numeric($element) ? $this->element : $element;
      $output .= $record->render($element_name);
    }
    if ($this->content) {
      $output .= $this->tab.preg_replace('/[\n\r]+/', PHP_EOL.$this->tab, $this->content).PHP_EOL;
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

  /**
   * @param mixed $content
   */
  public function setContent($content)
  {
    $this->content = $content;
  }

  /**
   * @param array $attributes
   */
  public function setAttributes(array $attributes)
  {
    $this->attributes = $attributes;
  }

  /**
   * @return string
   */
  public function getTab()
  {
    return $this->tab;
  }

  /**
   * @param string $tab
   */
  public function setTab($tab)
  {
    $this->tab = $tab;
  }

}
