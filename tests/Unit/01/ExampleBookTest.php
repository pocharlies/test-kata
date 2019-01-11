<?php

use PHPUnit\Framework\TestCase;

final class ExampleBookTest extends TestCase
{

    public function testGetTitle(): void
    {
        $book = new Book();
        static::assertSame('A Great Book', $book->getTitle());
    }

    public function testGetAuthor(): void
    {
        $book = new Book();
        static::assertSame('John Doe', $book->getAuthor());
    }

    public function testTurnPage(): void
    {
        $book = new Book();
        static::assertEmpty($book->turnPage());
    }

    public function testGetCurrentPage(): void
    {
        $book = new Book();
        static::assertSame('current page content', $book->getCurrentPage());
    }
}