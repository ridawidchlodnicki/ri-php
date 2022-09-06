<?php

namespace App\Services;

class Service1
{
    /**
     * @param array $params
     * @return Car|null
     */
    public function create(array $params): ?Car
    {
        $model = new Car();
        $model->name = $params['name'];
        $model->price = $params['price'];

        if ($model->save()) {
            return $model;
        }

        return null;
    }

    /**
     * @param array $params
     * @param string $id
     * @return Car|null
     */
    public function update(array $params, string $id): ?Car
    {
        /** @var Car $model */
        $model = Car::query()->where(['id' => $id])->get();

        if (!$model instanceof Car) {
            return null;
        }

        $model->name = $params['name'];
        $model->price = $params['price'];

        if ($model->save()) {
            return $model;
        }

        return null;
    }
}