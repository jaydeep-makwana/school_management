<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Carbon\Carbon;
use App\Models\Fees;

class DashboardController extends Controller
{

   public function index()
   {
      $students = Student::all();
      $courses = Course::all();
      $totalFees = Student::pluck('net_fees')->sum();
      $paidFees = Fees::pluck('amount')->sum();
      $dueFees = $totalFees - $paidFees;
      
      return view('dashboard.dashboard', compact('students', 'courses', 'totalFees', 'paidFees', 'dueFees'));
   }
}
