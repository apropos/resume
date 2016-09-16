<?php

/**
 * Created by PhpStorm.
 * User: robinche
 * Date: 9/14/16
 * Time: 9:30 PM
 */
class ResumeSkillRecord
{
  protected $tab = '   ', $attributes = [];
  protected $content;

  public function __construct(array $attributes, $contents = null)
  {
    $this->attributes = $attributes;
    $this->content = $contents;
  }

  /**
   * @return array
   */
  public function getAttributes()
  {
    return $this->attributes;
  }

  /**
   * @param array $attributes
   */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }

  /**
   * @return mixed
   */
  public function getContent()
  {
    return $this->content;
  }

  /**
   * @param mixed $content
   */
  public function setContent($content)
  {
    $this->content = $content;
  }

  public function render($name)
  {
    $output = '';
    $attributes_output = '';
    foreach ($this->attributes as $attribute => $desc) {
      $attributes_output .= ' <span class="token attr-name">'. $attribute . '</span><span class="token attr-value"><span class="token punctuation">="</span>' .$desc. '"</span>';
    }
    if ($this->content) {
      $output .= sprintf($this->tab.'<span class="token tag"><span class="token punctuation"><</span>%s%s<span class="token punctuation">></span></span>'.PHP_EOL.$this->tab.$this->tab.'%s'.$this->tab.'<span class="token tag"><span class="token punctuation">&lt;/</span>%s<span class="token punctuation">></span></span>'.PHP_EOL
        , $name
        , $attributes_output
        , preg_replace('/[\n\r]+/', PHP_EOL.$this->tab.$this->tab, $this->content).PHP_EOL
        , $name
      );
    } else {
      $output .= sprintf($this->tab.'<span class="token tag"><span class="token punctuation"><</span>%s%s<span class="token punctuation">/></span></span>'.PHP_EOL, $name, $attributes_output);
    }

    return $output;
  }

  /**
   * @param mixed $tab
   */
  public function setTab($tab)
  {
    $this->tab = $tab;
  }

}
