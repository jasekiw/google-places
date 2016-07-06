<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 7/1/2016
 * Time: 10:20 PM
 */

namespace GooglePlaces;

class Review
{
    /**
     * @var Rating[] $spects
     */
    public $spects;
    /**
     * @var string
     */
    public $author_name;
    /**
     * @var string
     */
    public $author_url;
      /**
       * @var string
       */
    public $language;
      /**
       * @var string
       */
    public $profile_photo_url;
      /**
       * @var double
       */
    public $rating;
      /**
       * @var string
       */
    public $text;
         /**
          * @var double
          */
    public $time;
}