<?php

    namespace WOK\Collection;

    /**
     * The Collection class provides an interface
     * to manage data collections, as extension,
     * or even standalone.
    **/
    class Collection implements \Iterator, \Countable {

        /**
         * @var     array       $data       Data collection
        **/
        protected $data = array();


        /**
         * Instanciate collection bag
         * @param   array   $data       Data collection
        **/
        public function __construct(array $data = array()) {

            $this->add($data);

        }


        /**
         * Get the entire data collection
         * @return  array           Returns the data collection
        **/
        public function all() {
            return $this->data;
        }


        /**
         * Check if a data defined by a key exists
         * @param   string|integer    $key          Data key
         * @return  boolean           Returns true if the data exists, false otherwise
        **/
        public function has($key) {
            return array_key_exists($key, $this->data);
        }

        /**
         * Get a data value form it's key
         * @param   string|integer      $key        Data key
         * @param   mixed               $default    Alternative value
         * @return  mixed               Returns the data value or the alternative one
        **/
        public function get($key, $default = null) {
            return array_key_exists($key, $this->data) ? $this->data[$key] : $default;
        }


        /**
         * Define a data with it's associated key
         * @param   string|integer      $key        Data key
         * @param   mixed               $value      Data value
        **/
        public function set($key, $value) {
            $this->data[$key] = $value;
        }


        /**
         * Add data to the current collection
         * @param   array       $data       A new data collection set
        **/
        public function add(array $data = array()) {
            $this->data = array_replace($this->data, $data);
        }


        /**
         * Remove a defined data associated to a key
         * @param   string|integer      $key        Data key
        **/
        public function remove($key) {

            if($this->has($key)) {
                unset($this->data[$key]);
            }

        }


        /**
         * Reset files iteration cursor
         * @note This method is part of the Iterator interface
        **/
        public function rewind() {
            reset($this->data);
        }


        /**
         * Advance iterator cursor by one
         * @note This method is part of the Iterator interface
        **/
        public function next() {
            next($this->data);
        }


        /**
         * Check if the current cursor position is valid
         * @note This method is part of the Iterator interface
         * @return  boolean         Return whether the position is valid or not
        **/
        public function valid() {
            return $this->has($this->key());
        }


        /**
         * Get the iterator cursor pointed header name
         * @note This method is part of the Iterator interface
        **/
        public function key() {
            return key($this->data);
        }


        /**
         * Get the iterator cursor pointed header value
         * @note This method is part of the Iterator interface
        **/
        public function current() {
            return current($this->data);
        }


        /**
         * Get the number or entries of this collection
         * @returns     integer         Returns the collection entries count
        **/
        public function count() {
            return count($this->data);
        }

    }
