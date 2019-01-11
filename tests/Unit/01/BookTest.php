<?php

use PHPUnit\Framework\TestCase;

final class BookTest extends TestCase
{

    public function testGetTitle(): void
    {
        $book = new Book();
        static::assertSame('A Great Book',$book->getTitle());
    }

    public function testGetAuthor(): void
    {
        $book = new Book();
        static::assertSame('John Doe', $book->getAuthor());
    }
}