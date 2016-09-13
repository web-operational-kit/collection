<?php

    use PHPUnit\Framework\TestCase;

    use WOK\Collection\Collection;

    class CollectionTest extends TestCase {


        protected static $data = array(
            'a' => 'b',
            'c' => 'd',
            'e' => 'f'
        );


        public function testCollection() {

            $collection = new Collection(self::$data);

            $this->assertEquals(self::$data['a'], $collection->get('a'));
            $this->assertEquals(self::$data['c'], $collection->get('c'));
            $this->assertEquals(self::$data['e'], $collection->get('e'));

            $this->assertEquals(self::$data, $collection->all());

        }


        public function testIterator() {

            $collection = new Collection(self::$data);

            foreach($collection as $key => $value) {
                $this->assertEquals(self::$data[$key], $value);
            }

        }


        public function testCountable() {

            $collection = new Collection(self::$data);

            $this->assertEquals(count(self::$data), $collection->count());

        }

    }
