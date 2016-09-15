<?php

/**
 * Created by PhpStorm.
 * User: robinche
 * Date: 9/14/16
 * Time: 9:30 PM
 */
class ResumeSkillRecord
{
  protected $attributes = [];
  protected $contents;

  public function __construct(array $attributes, $contents = null)
  {
    $this->attributes = $attributes;
    $this->contents = $contents;
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
  public function getContents()
  {
    return $this->contents;
  }

  /**
   * @param mixed $contents
   */
  public function setContents($contents)
  {
    $this->contents = $contents;
  }

  public function render($name)
  {
    $output = '';
    $attributes_output = '';
    foreach ($this->attributes as $attribute => $desc) {
      $attributes_output .= ' <span class="token attr-name">'. $attribute . '</span><span class="token attr-value"><span class="token punctuation">="</span>' .$desc. '"</span>';
    }
    if ($this->contents) {
      $output .= sprintf('  <span class="token tag"><span class="token punctuation"><</span>%s%s<span class="token punctuation">></span></span>'.PHP_EOL.'    %s'.PHP_EOL.'  <span class="token tag"><span class="token punctuation">&lt;/</span>%s<span class="token punctuation">></span></span>'.PHP_EOL
        , $name
        , $attributes_output
        , preg_replace('/[\n\r]+/', PHP_EOL.'    ', $this->contents)
        , $name
      );
    } else {
      $output .= sprintf('  <span class="token tag"><span class="token punctuation"><</span>%s%s<span class="token punctuation">/></span></span>'.PHP_EOL, $name, $attributes_output);
    }

    return $output;
  }

}