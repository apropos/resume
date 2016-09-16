<?php

/**
 * Created by PhpStorm.
 * User: robinche
 * Date: 9/14/16
 * Time: 4:09 PM
 */
class Resume
{
  /** @var ResumeSkill[] */
  protected $data = [];

  public function __construct(array $data = [])
  {
    $this->data = $data;
  }

  /**
   * @param ResumeSkill $data
   * @return $this
   */
  public function withData($data)
  {
    $this->data[] = $data;

    return $this;
  }

  /**
   * @return string
   */
  public function render()
  {
    $output = '';
    $cols = [];
    $col = floor(12 / $this->getCols());
    foreach ($this->data as $skill) {
      $cols[$skill->getColumn()] .= '<pre class="language-html"><code class="language-html">'.$skill->render().'</code></pre>';
    }
    foreach ($cols as $column) {
      $output .= sprintf('<div style="page-break-inside:avoid;" class="col-md-%d">%s</div>' . PHP_EOL, $col, $column);
    }

    return '<div class="row">' . $output . '</div>';
  }

  /**
   * @return int
   */
  private function getCols()
  {
    $cols = [];
    foreach ($this->data as $skill) {
      $cols[$skill->getColumn()] = 1;
    }

    return count($cols);
  }

}
