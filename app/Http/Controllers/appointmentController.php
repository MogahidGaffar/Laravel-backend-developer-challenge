<?php

namespace App\Http\Controllers;

use app\Models\appointment;
use Illuminate\Http\Request;
use App\Repositories\Appointments\AppointmentRepository;

class appointmentController extends Controller
{
   
public AppointmentRepository $appointmentRepository;
    
    public function  __construct(AppointmentRepository $appointmentRepository){
        $this->appointmentRepository=$appointmentRepository;
    }

    public function getAll()
    {
        $appointments=$this->appointmentRepository->getall();
return response()->json(['appointments'=>$appointments]);
    }

  
    public function create()
    {
        //
    }

   
    public function createOne(Request $request)
    {
        $appointment=$this->appointmentRepository->create($request->all());
        return response()->json(['appointment'=>$appointment]);
    }

   
    public function getOne($appointmentId)
    {
        $appointment=$this->appointmentRepository->getById($appointmentId);
        return response()->json(['appointments'=>$appointment]);
    }

    public function edit(appointment $appointment)
    {
        //
    }

    
    public function UpdateOne($appointmentId,Request $request)
    {
        $appointment=$this->appointmentRepository->update($appointmentId,$request->all());
        return response()->json(['appointment'=>$appointment]);
    }

    public function delete($appointmentId)
    {
    return $this->appointmentRepository->delete($appointmentId);


    }
}
