<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Titles;

class TitleController extends Controller
{
	
	/*public function __construct()
    {
        $this->middleware('auth');
    }*/
	
	
	public function index(Request $request) {
		$titles = Titles::where('badge', '!=', '')->get();
		
		foreach ($titles as $title) {
			$title->content = mb_substr(strip_tags($title->content), 0, 100);
			//$title->url = "url('/book/" . $title->name . "')";
			$title->url = "/book/" . $title->name;
		}

		return view('book', ['titles' => $titles]);
	}
	
	public function getTitleContent($name) {
		$title = Titles::where('name', $name)
				       ->first();
				   
		//dd($title);
		
		return view('title', ['title' => $title]);
	}
	
    /*public function index(Request $request)
    {
		$lecturer_id = $request->session()->get('lecturer_id');
		//$classes = Classes::where('lecturer_id', $lecturer_id)->get();
		//$courses = Course::where('lecturer_id', $lecturer_id)->get();
		
		$classes = DB::table('classes')
					 ->join('courses', 'classes.course_id', '=', 'courses.id')
					 ->select('classes.*', 'courses.code')
					 ->where('classes.lecturer_id', $lecturer_id)
					 ->paginate(10);

		foreach ($classes as $class)
		{
			$class->url = url('class/' . $class->id);
		}

        return view('class', ['classes' => $classes, 'count' => 1]);
    }
	
	public function classDetails($id) 
	{
		$class = Classes::find($id);
		$class->date = Carbon::parse($class->date)->format('d/m/Y');		
		$time = new Carbon($class->time);
		$class->time = $time->format('g:iA');	
		
		$course_id = $class->course_id;
		
		$registered_students = DB::table('students')
								 ->join('student_courses', 'students.id', '=', 'student_courses.student_id')
								 ->where('student_courses.course_id', '=', $course_id)
								 ->get();
								 		
		$user_id = array();
		
		foreach ($registered_students as $student) {
			array_push($user_id, $student->user_id);
		}
		
		$student_names = User::select('id', 'name')
							 ->whereIn('id', $user_id)
							 ->get();
							 
		foreach ($registered_students as $student) {
			foreach ($student_names as $name) {
				if ($name->id == $student->user_id) {
					$student->name = $name->name;
				}
			}
		}

		$test = array();
		$attendance = Attendance::where('class_id', '=', $class->id)->get();
		$present = 0;
		$absent = 0;

		foreach ($registered_students as $student)
		{
			$student->attendance = null;

			if ($class->status == 0)
			{
				$student->attendance = 'N/A';
				$present = 'N/A';
				$absent = 'N/A';
			}
			else if (count($attendance) > 0)
			{
				foreach ($attendance as $list) 
				{
					if ($list->student_id == $student->student_id)
					{										
						if ($class->status == 1)
						{
							if ($list->signin != null)
								$student->attendance = 'Signed In';
							else
								$student->attendance = 'Not Signed In';
							
							$present = 'N/A';
							$absent = 'N/A';
						}
						else if ($class->status == 2)
						{
							
							if ($list->signin != null && $list->signout != null)
							{
								$student->attendance = 'Present';
								$present++;
								$absent--;
							}
							else
							{
								if ($student->attendance == null) {
									$student->attendance = 'Absent';
									$absent++;
								}
								
							}
							
						}
					}
					else
					{
						if ($student->attendance == null){
							$student->attendance = 'Absent';
							$absent++;
							array_push($test, $student->student_id);
							//continue;
						}
						
					//	$absent++;
					}
				}
			}
			else
			{
				$student->attendance = 'Absent';
				$absent++;
			}
			
		}
		
		//$absent = $absent / count($attendance);
		//dd($test);
		return view('class_details', ['class' => $class, 'students' => $registered_students, 'count' => 1, 'present' => $present, 'absent' => $absent]);
	}
	
	public function addClass(Request $request) 
	{
		$lecturer_id = $request->session()->get('lecturer_id');
		
		$courses = Course::where('lecturer_id', '=', $lecturer_id)->get();

		return view('add_class', ['courses' => $courses]);
	}
	
	public function updateClass(Request $request) 
	{
		$class_id = $request['class_id'];
		$lecturer_id = $request->session()->get('lecturer_id');
		
		$courses = Course::where('lecturer_id', '=', $lecturer_id)->get();
		
		return view('update_class', ['class_id' => $class_id, 'courses' => $courses]);
	}*/
}
