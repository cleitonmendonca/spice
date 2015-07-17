<?php
/*
 * The MIT License
 *
 * Copyright 17/07/2015 10:19:00 Cleiton da Silva Mendonça.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
namespace Spice\Models\Repositories;

use Spice\Models\Repositories\Exceptions;
/**
 * Description of AbstractRepository
 * @copyright (c) 17/07/2015 10:19:00, Cleiton da Silva Mendonça
 * @author Cleiton da Silva Mendonça <cleiton.mendonca@gmail.com>
 * @link http://gitlab.com/csmendonca Gitlab of Cleiton da Silva Mendonça
 * @link http://github.com/csmendonca Github of Cleiton da Silva Mendonça
 */
abstract class AbstractRepository {

    protected $entity;

    public static function getRepository($name) {
        $className = "\\Spice\\Models\\Repositories\\Repository\\{$name}";

        if (!class_exists($className)) {
            throw new Exceptions\InvalidRepositoryException("Repository {$className} doesn't exists.");
        }

        return new $className();
    }

    public function find($id) {
        return $this->entity->find($id);
    }

    public function findAll() {
        return $this->entity->find();
    }

    public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null) {
        $params = "";
        if (count($criteria) == 1) {
            foreach ($criteria as $key => $value) {
                //$params = "$key = '$value'";
                $params = "$key  = '$value'";
            }
        } elseif (count($criteria) > 1) {
            foreach ($criteria as $key => $value) {
                $params = $params . "$key = '$value' and ";
            }
            $params = substr($params, 0, -5);
        }
        $conditions = array("conditions" => $params);
        if (count($orderBy)) {
            $conditions = array_merge($conditions, array('order' => $orderBy));
        }
        if (count($limit)) {
            $conditions = array_merge($conditions, array('limit' => (int) $limit));
        }
        if (count($offset)) {
            $conditions = array_merge($conditions, array('offset' => (int) $offset));
        }
        return $this->entity->find($conditions);
    }

    public function findOneBy(array $criteria) {

        $params = "";
        if (count($criteria) == 1) {
            foreach ($criteria as $key => $value) {
                //$params = "$key = '$value'";
                $params = "$key  = '$value'";
            }
        } elseif (count($criteria) > 1) {
            foreach ($criteria as $key => $value) {
                $params = $params . "$key = '$value' and ";
            }
            $params = substr($params, 0, -5);
        }
        $conditions = array("conditions" => $params);

        return $this->entity->findFirst($conditions);
    }

    public function __call($method, $arguments) {
        if (substr($method, 0, 6) == 'findBy') {
            $by = substr($method, 6, strlen($method));
            $method = 'findBy';
        } else {
            if (substr($method, 0, 9) == 'findOneBy') {
                $by = substr($method, 9, strlen($method));
                $method = 'findOneBy';
            } else {
                throw new \Exception("Undefined method '$method'. The "
                . "method name must start with either findBy or findOneBy!");
            }
        }
        if (!isset($arguments[0])) {
            throw new \Exception('You must have one argument');
        }
        $fieldName = lcfirst($by);
        return $this->$method(array(
            $fieldName => $arguments[1]
        ));
    }
}
