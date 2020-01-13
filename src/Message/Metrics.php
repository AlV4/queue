<?php
/**
 * Created by IntelliJ IDEA.
 * User: alex
 * Date: 13.01.20
 * Time: 22:14
 */

namespace App\Message;


class Metrics
{
    /**
     * @var string
     */
    private $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

}