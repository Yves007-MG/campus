<?php


namespace App\Services;


class TraitementData
{
    public function add(array $folders = [], string $root = '')
    {

        if($root === '') {

            $root = dirname(__DIR__, 2) . '/public/';

        }

        if(count($folders) === 0) {

            $folders = self::FOLDERS;
        }

        $this->createDirIfNotExists($root);

        foreach ($folders as $key => $folder) {

            if(is_array($folders[$key])) {

                $this->add($folders[$key], $root . $key . '/');

            } else {

                $this->createDirIfNotExists($root .  $folder);

            }

        }

        return null;

    }
}