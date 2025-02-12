<?php

use PHPUnit\Framework\TestCase;
use Collect\Collect;

class CollectTest extends TestCase
{
    public function testPush(): void
    {
        $data = new Collect(['a' => 1, 'b' => 2]);
        $data->push(3);

        $this->assertEquals(['a' => 1, 'b' => 2, 3], $data->toArray());
    }

    public function testUnshift(): void
    {
        $data = new Collect(['a' => 1, 'b' => 2]);
        $data->unshift(0);

        $this->assertEquals([0, 'a' => 1, 'b' => 2], $data->toArray());
    }

    public function testShift(): void
    {
        $data = new Collect([0, 'a' => 1, 'b' => 2]); // Убедитесь, что массив не пустой
        $removed = $data->shift();

        $this->assertEquals(0, $removed); // Ожидаем, что удаленный элемент будет 0

        $this->assertEquals(['a' => 1, 'b' => 2], $data->toArray()); // Проверяем оставшиеся элементы
    }

    public function testCount(): void
    {
        $data = new Collect(['a' => 1, 'b' => 2, 'c' => 3]);
        $count = $data->count();

        $this->assertEquals(3, $count);
    }
}
