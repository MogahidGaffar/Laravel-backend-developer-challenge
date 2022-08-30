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

//===================  Api Functions =============================

    public function ApigetAll()
    {
        $appointments=$this->appointmentRepository->getall();
return response()->json(['appointments'=>$appointments]);
    }

  
    public function ApicreateOne(Request $request)
    {
        $appointment=$this->appointmentRepository->create($request->all());
        return response()->json(['appointment'=>$appointment]);
    }

    public function ApiUpdateOne($appointmentId,Request $request)
    {
        $appointment=$this->appointmentRepository->update($appointmentId,$request->all());
        return response()->json(['appointment'=>$appointment]);
    }

    public function Apidelete($appointmentId)
    {
    return $this->appointmentRepository->delete($appointmentId);
 }

   
 public function ApigetOne($appointmentId)
 {
     $appointment=$this->appointmentRepository->getById($appointmentId);
     return response()->json(['appointments'=>$appointment]);
 }


//===================  Web Functions =============================


public function getAllPage()
{
    $appointments=$this->appointmentRepository->getall();
return view('appointments.getAll',['appointments'=>$appointments]);
}

public function getCreatepage ()
{
return view('appointments.create');
}

    public function createOne(Request $request)
    {
       $this->appointmentRepository->create($request->all());
return redirect()->route('appointments.getAllpage');
    }

 
  

    public function getEditPage(string $appointmentId){
        $appointment=$this->appointmentRepository->getById($appointmentId);
        return view('appointments.Edit',['appointment'=>$appointment]);
      }

      public function UpdateOne($appointmentId,Request $request)
    {
        $appointment=$this->appointmentRepository->update($appointmentId,$request->all());
        return redirect()->route('appointments.getAllpage');
    }

    public function delete($appointmentId)
    {
     $this->appointmentRepository->delete($appointmentId);
    return redirect()->route('appointments.getAllpage');

 }
   
}
