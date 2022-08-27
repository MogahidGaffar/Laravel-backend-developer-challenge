<?php 

namespace App\Repositories\Appointments;
use App\Models\appointment;

class EloquentAppointment implements AppointmentRepository {


public appointment $appointment;


    public function  __construct(appointment $appointment){
        $this->appointment=$appointment;
    }


public function getall(){
return $this->appointment->all();
}

public function getById($id){
    return $this->appointment->find($id);

  
}

public function create(array $attributes){
    return $this->appointment->create($attributes);

}

public function update($id , array $attributes){
    return $this->appointment->update($attributes);

}

public function delete($id ){
  $appointment=  $this->appointment->find($id);
return $appointment->delete($id);
}


}