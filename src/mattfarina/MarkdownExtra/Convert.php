<?php

/**
 * Convert markdown to html.
 */

namespace mattfarina\MarkdownExtra;

/* use dflydev\markdown\MarkdownExtraParser; */
use \Michelf\MarkdownExtra;

/**
 * Convert markdown to html.
 */
class Convert extends \Fortissimo\Command\Base {

  public function expects() {
    return $this
      ->description('Converts markdown to html.')
      ->usesParam('markdown', 'Text to go through markdown to html conversion')
        ->whichIsRequired()
      ->andReturns('HTML.')
      ;
  }

  public function doCommand() {

    $markdown = $this->param('markdown');

    $markdownParser = new MarkdownExtra();

    return $markdownParser->transform($markdown);
  }
}
