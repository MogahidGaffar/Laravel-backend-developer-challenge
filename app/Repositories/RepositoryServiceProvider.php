<?php

namespace app\Repositories;
use App\Repositories\Appointments\AppointmentRepository;
use App\Repositories\Appointments\EloquentAppointment;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
   
    public function boot()
    {
        $this->app->bind(AppointmentRepository::class,EloquentAppointment::class);

    }

}