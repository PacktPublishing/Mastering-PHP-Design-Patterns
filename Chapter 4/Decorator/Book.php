<?php

/**
 * User: Junade Ali
 * Date: 26/03/2016
 * Time: 19:19
 */
interface Book
{
    public function __construct(string $title, string $author, string $contents);

    public function getTitle(): string;

    public function getAuthor(): string;

    public function getContents(): string;
}