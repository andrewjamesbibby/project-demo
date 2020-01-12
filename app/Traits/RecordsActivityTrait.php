<?php

namespace App\Traits;

use App\Audit;

trait RecordsActivity
{
    /**
     * If the model event exists on the model or in the
     * default events, record the activity in the
     * audit log.
     */
    protected static function bootRecordsActivity()
    {
        foreach (static::getModelEvents() as $event) {
            static::$event(function ($model) use ($event) {
                $model->recordActivity($event);
            });
        }
    }

    /**
     * Record Activity
     *
     * Record the activity in the audit log by adding a
     * new Audit row into the database.
     *
     * @param $event
     * @throws \ReflectionException
     */
    public function recordActivity($event)
    {
        Audit::create([
            'subject_id'   => $this->id,
            'subject_type' => get_class($this),
            'name'         => $this->getActivityName($this, $event),
            'message'      => $this->getMessage($this, $event),
        ]);
    }

    /**
     * Get Activity Name
     *
     * Determine the activity name for storing in the database.
     *
     * @param $model
     * @param $action
     * @return string
     * @throws \ReflectionException
     */
    protected function getActivityName($model, $action): string
    {
        $name = strtolower((new \ReflectionClass($model))->getShortName());

        return "{$action}_{$name}";
    }

    /**
     * Get Message
     *
     * Determine the log message based on model event type
     * Extra case statements can be added to cater for any
     * newer models the trait is extended to.
     *
     * @param $model
     * @param $action
     * @return string
     * @throws \ReflectionException
     */
    protected function getMessage($model, $event): string
    {
        $name = strtolower((new \ReflectionClass($model))->getShortName());

        switch ($name) {
            case 'company':
                return $event . ' company ' . $model->name;
                break;

            case 'employee':
                return $event . ' employee ' . $model->name;
                break;

            default:
                return '';
                break;
        }
    }

    /**
     * Get Model Events
     *
     * If model events are specified on the model itself,
     * use them. Otherwise, use the default events.
     *
     * @return array
     */
    protected static function getModelEvents(): array
    {
        if (isset(static::$recordEvents)) {
            return static::$recordEvents;
        }

        return ['created', 'deleted', 'updated'];
    }
}
