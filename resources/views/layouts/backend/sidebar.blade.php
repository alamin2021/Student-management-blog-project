  <!--sidebar start-->
  <aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
            <a class="{{(request()->segment(1)=='admin'? 'active':'')}}" href="{{url('admin')}}">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            {{-- --User ----}}
            <li class="sub-menu">
                <a href="{{url('user/')}}" class="{{(request()->segment(1)=='user'? 'active':'')}}"  >
                    <i class="fa fa-laptop"></i>
                    <span> user </span>
                </a>
                <ul class="sub">
                    
                    <li class="{{(request()->segment(2)=='add-user'? 'active':'')}}"> <a  href="{{url('user/add-user')}}"> <i class="fa fa-plus" aria-hidden="true"></i> Add user</a></li>
                    
                    <li class="{{(request()->segment(2)=='view-user'? 'active':'')}}"><a   href="{{url('user/view-user')}}"> <i class="fa fa-eye" aria-hidden="true"></i> View user Information </a></li>
                    
                    
                </ul>
            </li>

            {{--============ Student Managent ==========--}}
            <li class="sub-menu">
                <a href="javascript:;" class="{{(request()->segment(1)=='student'? 'active':'')}} {{(request()->segment(1)=='department'? 'active':'')}} {{(request()->segment(1)=='semister'? 'active':'')}} {{(request()->segment(1)=='year'? 'active':'')}} {{(request()->segment(1)=='shift'? 'active':'')}} {{(request()->segment(1)=='fee'? 'active':'')}} {{(request()->segment(1)=='subject'? 'active':'')}} {{(request()->segment(1)=='amount'? 'active':'')}} {{(request()->segment(1)=='result'? 'active':'')}} {{(request()->segment(1)=='assigns'? 'active':'')}} " >
                    <i class="fa fa-book"></i>
                    <span> Student Management </span>
                </a>
                <ul class="sub">
                    {{-- --Student ----}}
                <li class="sub-menu">
                    <a href="{{url('student/')}}" class="{{(request()->segment(1)=='student'? 'active':'')}}"  >
                        <i class="fa fa-laptop"></i>
                        <span> Student </span>
                    </a>
                    <ul class="sub">
                        
                        <li class="{{(request()->segment(2)=='add-student'? 'active':'')}}"> <a  href="{{url('student/add-student')}}"> <i class="fa fa-plus" aria-hidden="true"></i> Add student</a></li>
                        
                        <li class="{{(request()->segment(2)=='view-student'? 'active':'')}}"><a   href="{{url('student/view-student')}}"> <i class="fa fa-eye" aria-hidden="true"></i> View Student Information </a></li>
                        
                        
                    </ul>
                </li>
                
                    {{-- Department --}}
                <li class="sub-menu">
                    <a href="{{url('department/')}}" class="{{(request()->segment(1)=='department'? 'active':'')}}"  >
                        <i class="fa fa-laptop"></i>
                        <span> Department </span>
                    </a>
                    <ul class="sub">
                        
                        <li class="{{(request()->segment(2)=='add-department'? 'active':'')}}"> <a  href="{{url('department/add-department')}}"> <i class="fa fa-plus" aria-hidden="true"></i> Add Department</a></li>
                        
                        <li class="{{(request()->segment(2)=='department-view'? 'active':'')}}" > <a href="{{url('department/department-view')}}"><i class="fa fa-eye" aria-hidden="true"></i>  View Department Data </a> </li>
                    </ul>
                </li>
                
                {{--==== Add Semister ====--}}
                <li class="sub-menu">
                    <a href="{{url('semister/')}}" class="{{(request()->segment(1)=='semister'? 'active':'')}}"  >
                        <i class="fa fa-laptop"></i>
                        <span>Semister  </span>
                    </a>
                    <ul class="sub">
                        
                        <li class="{{(request()->segment(2)=='add-semister'? 'active':'')}}"> <a  href="{{url('semister/add-semister')}}" > <i class="fa fa-plus" aria-hidden="true"></i> Add semister </a></li>

                        <li class="{{(request()->segment(2)=='view-semister'? 'active':'')}}"><a   href="{{url('semister/view-semister')}}"><i class="fa fa-eye" aria-hidden="true"></i> View semister </a></li>
                        
                    </ul>
                </li>

                {{--==== Add year ====--}}
                <li class="sub-menu">
                    <a href="{{url('year/')}}" class="{{(request()->segment(1)=='year'? 'active':'')}}"  >
                        <i class="fa fa-laptop"></i>
                        <span>year  </span>
                    </a>
                    <ul class="sub">
                        
                        <li class="{{(request()->segment(2)=='add-year'? 'active':'')}}"> <a  href="{{url('year/add-year')}}"> <i class="fa fa-plus" aria-hidden="true"></i> Add year </a></li>

                        <li class="{{(request()->segment(2)=='view-year'? 'active':'')}}"><a   href="{{url('year/view-year')}}"> <i class="fa fa-eye" aria-hidden="true"></i> View year </a></li>
                        
                    </ul>
                </li>

                {{--==== Add shift ====--}}
                <li class="sub-menu">
                    <a href="{{url('shift/')}}" class="{{(request()->segment(1)=='shift'? 'active':'')}}"  >
                        <i class="fa fa-laptop"></i>
                        <span>shift  </span>
                    </a>
                    <ul class="sub">
                        
                        <li class="{{(request()->segment(2)=='add-shift'? 'active':'')}}"> <a  href="{{url('shift/add-shift')}}"> <i class="fa fa-plus" aria-hidden="true"></i> Add shift </a></li>

                        <li class="{{(request()->segment(2)=='view-shift'? 'active':'')}}"><a   href="{{url('shift/view-shift')}}"> <i class="fa fa-eye" aria-hidden="true"></i> View Shift </a></li>
                        
                    </ul>
                </li>

                {{--==== Add Fee Category  ====--}}
                <li class="sub-menu">
                    <a href="{{url('fee/')}}" class="{{(request()->segment(1)=='fee'? 'active':'')}}"  >
                        <i class="fa fa-laptop"></i>
                        <span> Fee Category </span>
                    </a>
                    <ul class="sub">
                        
                        <li class="{{(request()->segment(2)=='add-fee'? 'active':'')}}"> <a  href="{{url('fee/add-fee')}}"> <i class="fa fa-plus" aria-hidden="true"></i> Add fee </a></li>

                        <li class="{{(request()->segment(2)=='view-fee'? 'active':'')}}"><a   href="{{url('fee/view-fee')}}"> <i class="fa fa-eye" aria-hidden="true"></i> View fee </a></li>
                        
                    </ul>
                </li>

                {{--==== Add Subject  ====--}}
                <li class="sub-menu">
                    <a href="{{url('subject/')}}" class="{{(request()->segment(1)=='subject'? 'active':'')}}"  >
                        <i class="fa fa-laptop"></i>
                        <span> Subject  </span>
                    </a>
                    <ul class="sub">
                        
                        <li class="{{(request()->segment(2)=='add-subject'? 'active':'')}}"> <a  href="{{url('subject/add-subject')}}"> <i class="fa fa-plus" aria-hidden="true"></i> Add subject </a></li>

                        <li class="{{(request()->segment(2)=='view-subject'? 'active':'')}}"><a   href="{{url('subject/view-subject')}}"> <i class="fa fa-eye" aria-hidden="true"></i> View subject </a></li>
                        
                    </ul>
                </li>

                {{--==== Assign A Subject  ====--}}
                <li class="sub-menu">
                    <a href="{{url('assigns/')}}" class="{{(request()->segment(1)=='assigns'? 'active':'')}}"  >
                        <i class="fa fa-laptop"></i>
                        <span> Assigns A Subject  </span>
                    </a>
                    <ul class="sub">
                        
                        <li class="{{(request()->segment(2)=='add-subject_assign'? 'active':'')}}"> <a  href="{{url('assigns/add-subject_assign')}}"> <i class="fa fa-plus" aria-hidden="true"></i> Add Subject  </a></li>

                        <li class="{{(request()->segment(2)=='view-subject_assign'? 'active':'')}}"><a   href="{{url('assigns/view-subject_assign')}}"> <i class="fa fa-eye" aria-hidden="true"></i> View Assigned subject </a></li>
                        
                    </ul>
                </li>

                {{--==== Add Fee Amount  ====--}}
                <li class="sub-menu">
                    <a href="{{url('amount/')}}" class="{{(request()->segment(1)=='amount'? 'active':'')}}"  >
                        <i class="fa fa-laptop"></i>
                        <span> Fee Amount  </span>
                    </a>
                    <ul class="sub">
                        
                        <li class="{{(request()->segment(2)=='add-amount'? 'active':'')}}"> <a  href="{{url('amount/add-amount')}}"> <i class="fa fa-plus" aria-hidden="true"></i> Add Amount </a></li>

                        <li class="{{(request()->segment(2)=='view-amount'? 'active':'')}}"><a   href="{{url('amount/view-amount')}}"> <i class="fa fa-eye" aria-hidden="true"></i> View Amount </a></li>
                        
                    </ul>
                </li>

                {{--==== Student Result   ====--}}
                <li class="sub-menu">
                    <a href="{{url('result/')}}" class="{{(request()->segment(1)=='result'? 'active':'')}}"  >
                        <i class="fa fa-laptop"></i>
                        <span> Student result  </span>
                    </a>
                    <ul class="sub">
                        
                        <li class="{{(request()->segment(2)=='add-result'? 'active':'')}}"> <a  href="{{url('result/add-result')}}"> <i class="fa fa-plus" aria-hidden="true"></i> Add result </a></li>

                        <li class="{{(request()->segment(2)=='view-result'? 'active':'')}}"><a   href="{{url('result/view-result')}}"> <i class="fa fa-eye" aria-hidden="true"></i> View result </a></li>
                        
                    </ul>
                </li>

                </ul>
            </li>

            {{--============ Course Managent ==========--}}
            <li class="sub-menu">
                <a href="javascript:;" class="{{(request()->segment(1)=='course'? 'active':'')}} {{(request()->segment(1)=='assign'? 'active':'')}} {{(request()->segment(1)=='enroll'? 'active':'')}} " >
                    <i class="fa fa-book"></i>
                    <span> Course Management </span>
                </a>
                <ul class="sub">
                {{--=== Course === --}}
                <li class="sub-menu">
                    <a href="{{url('course/')}}" class="{{(request()->segment(1)=='course'? 'active':'')}}"  >
                        <i class="fa fa-laptop"></i>
                        <span>Course Info </span>
                    </a>
                    <ul class="sub">
                        
                        <li class="{{(request()->segment(2)=='course-add'? 'active':'')}}"> <a  href="{{url('course/course-add')}}"> <i class="fa fa-plus" aria-hidden="true"></i> Course add </a></li>

                        <li class="{{(request()->segment(2)=='view-course'? 'active':'')}}"><a   href="{{url('course/view-course')}}"> <i class="fa fa-eye" aria-hidden="true"></i> View Course Data</a></li>
                        
                    </ul>
                </li>
                {{--==== Asign A Course  ====--}}
                <li class="sub-menu">
                    <a href="{{url('assign/')}}" class="{{(request()->segment(1)=='assign'? 'active':'')}}"  >
                        <i class="fa fa-laptop"></i>
                        <span>Course Assign  </span>
                    </a>
                    <ul class="sub">
                        
                        <li class="{{(request()->segment(2)=='add-courseAssign'? 'active':'')}}"> <a  href="{{url('assign/add-courseAssign')}}"><i class="fa fa-plus" aria-hidden="true"></i> Assign A New Course  </a></li>

                        <li class="{{(request()->segment(2)=='view-courseAssign'? 'active':'')}}"><a   href="{{url('assign/view-courseAssign')}}"> <i class="fa fa-eye" aria-hidden="true"></i> View Assigned Course  </a></li>
                        
                    </ul>
                </li>
                
                {{--==== Enroll Course  ====--}}
                <li class="sub-menu">
                    <a href="{{url('enroll/')}}" class="{{(request()->segment(1)=='enroll'? 'active':'')}}"  >
                        <i class="fa fa-laptop"></i>
                        <span>Enroll Course   </span>
                    </a>
                    <ul class="sub">
                        
                        <li class="{{(request()->segment(2)=='add-enrollCourse'? 'active':'')}}"> <a  href="{{url('enroll/add-enrollCourse')}}"> <i class="fa fa-plus" aria-hidden="true"></i>Enroll Now  </a></li>

                        {{-- <li class="{{(request()->segment(2)=='view-enrollCourse'? 'active':'')}}"> <a  href="{{url('enroll/view-enrollCourse')}}"> <i class="fa fa-plus" aria-hidden="true"></i> View Enrolled Course   </a></li> --}}

                        <li class="{{(request()->segment(2)=='view-enrollCourse'? 'active':'')}}"><a   href="{{url('enroll/view-enrollCourse')}}"> <i class="fa fa-eye" aria-hidden="true"></i> Enrolled Course  </a></li>
                        
                    </ul>
                </li>
    
                </ul>
            </li>

            
            {{--==== Add Teacher ====--}}
            <li class="sub-menu">
                <a href="{{url('teacher/')}}" class="{{(request()->segment(1)=='teacher'? 'active':'')}}"  >
                    <i class="fa fa-laptop"></i>
                    <span>Teacher Info </span>
                </a>
                <ul class="sub">
                    
                    <li class="{{(request()->segment(2)=='teacherinfo'? 'active':'')}}"> <a  href="{{url('teacher/teacherinfo')}}"> <i class="fa fa-plus" aria-hidden="true"></i> Add Teacher</a></li>

                    <li class="{{(request()->segment(2)=='view-teacher'? 'active':'')}}"><a   href="{{url('teacher/view-teacher')}}"><i class="fa fa-eye" aria-hidden="true"></i> View Teacher Info</a></li>
                    
                </ul>
            </li>
            


            

            

            {{-- ========== Llibrary ======== --}}
            <li class="sub-menu">
                <a href="javascript:;" class="{{(request()->segment(1)=='library'? 'active':'')}} {{(request()->segment(1)=='book'? 'active':'')}} {{(request()->segment(1)=='book'? 'active':'')}}" >
                    <i class="fa fa-book"></i>
                    <span> Library  </span>
                </a>
                <ul class="sub">
                    {{-- Book --}}
                    <li class="sub-menu ">
                        <a href="" class="{{(request()->segment(2)=='book'? 'active':'')}}{{(request()->segment(1)=='book'? 'active':'')}}"><i class="fa fa-book"></i> Book</a>
                        <ul class="sub">
                            <li class="{{(request()->segment(3)=='add-book'? 'active':'')}}">
                                <a href="{{url('library/book/add-book')}}">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                    <span> Add book</span>  
                                </a>
                            </li>

                            <li class="{{(request()->segment(3)=='book-view'? 'active':'')}}{{(request()->segment(3)=='book-edit'? 'active':'')}}">
                                <a href="{{url('library/book/book-view')}}">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    <span>View book</span>  
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    {{-- Find --}}
                    <li class="sub-menu ">
                        <a href="" class="{{(request()->segment(2)=='find'? 'active':'')}}{{(request()->segment(1)=='book'? 'active':'')}}"><i class="fa fa-search" aria-hidden="true"></i> Find</a>
                        <ul class="sub">
                            <li class="{{(request()->segment(3)=='find-book'? 'active':'')}}">
                                <a href="{{url('library/find/find-book')}}">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    <span> Find book</span>  
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-- Assign A Book --}}
                    <li class="sub-menu ">
                        <a href="" class="{{(request()->segment(2)=='book'? 'active':'')}}{{(request()->segment(1)=='book'? 'active':'')}}"><i class="fa fa-book"></i>Assign A Book</a>
                        <ul class="sub">
                            <li class="{{(request()->segment(3)=='add-book'? 'active':'')}}">
                                <a href="{{url('library/book/add-book')}}">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                    <span> Assign book</span>  
                                </a>
                            </li>

                            <li class="{{(request()->segment(3)=='book-view'? 'active':'')}}{{(request()->segment(3)=='book-edit'? 'active':'')}}">
                                <a href="{{url('library/book/book-view')}}">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    <span> View book</span>  
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                </ul>
            </li>

            {{-- ========== Address ======== --}}
            <li class="sub-menu">
                <a href="javascript:;" class="{{(request()->segment(1)=='address'? 'active':'')}} {{(request()->segment(1)=='division'? 'active':'')}} {{(request()->segment(1)=='districts'? 'active':'')}}" >
                    <i class="fa fa-user-md"></i>
                    <span> Address  </span>
                </a>
                <ul class="sub">
                    {{-- Divition --}}
                    <li class="sub-menu ">
                        <a href="" class="{{(request()->segment(2)=='division'? 'active':'')}}{{(request()->segment(1)=='division'? 'active':'')}}">Division </a>
                        <ul class="sub">
                            <li class="{{(request()->segment(3)=='add-division'? 'active':'')}}"><a href="{{url('address/division/add-division')}}">Add division</a></li>

                            <li class="{{(request()->segment(3)=='division-view'? 'active':'')}}{{(request()->segment(3)=='division-edit'? 'active':'')}}"><a href="{{url('address/division/division-view')}}">View division </a></li>
                            
                        </ul>
                    </li>
                    {{-- District --}}
                    <li class="sub-menu ">
                        <a href="" class="{{(request()->segment(2)=='districts'? 'active':'')}} {{(request()->segment(1)=='districts'? 'active':'')}}">District </a>
                        <ul class="sub">
                            <li class="{{(request()->segment(3)=='add-districts'? 'active':'')}}"><a href="{{url('address/districts/add-districts')}}">Add District</a></li>

                            <li class="{{(request()->segment(3)=='districts-view'? 'active':'')}}{{(request()->segment(3)=='districts-edit'? 'active':'')}}"><a href="{{url('address/districts/districts-view')}}">View District </a></li>
                            
                        </ul>
                    </li>
                    
                    {{-- Upazilla --}}
                    <li class="sub-menu ">
                        <a href="" class="{{(request()->segment(2)=='upazilla'? 'active':'')}} {{(request()->segment(1)=='upazilla'? 'active':'')}}">Upazilla </a>
                        <ul class="sub">
                            <li class="{{(request()->segment(3)=='add-upazilla'? 'active':'')}}"><a href="{{url('address/upazilla/add-upazilla')}}">Add Upazilla</a></li>

                            <li class="{{(request()->segment(3)=='upazilla-view'? 'active':'')}}{{(request()->segment(3)=='upazilla-edit'? 'active':'')}}"><a href="{{url('address/upazilla/upazilla-view')}}">View Upazilla </a></li>
                            
                        </ul>
                    </li>

                </ul>
            </li>

                {{-- ============== Post Page =========== --}}
            <li class="sub-menu">
                <a href="javascript:;" class="{{(request()->segment(1)=='post'? 'active':'')}}" >
                    <i class="fa fa-book"></i>
                    <span>Post</span>
                </a>
                <ul class="sub">
                    <li class="{{(request()->segment(2)=='add-category'? 'active':'')}}"><a href="{{url('post/add-category')}}">Add Category </a></li>

                    <li class="{{(request()->segment(2)=='add-post'? 'active':'')}}"><a href="{{url('post/add-post')}}">Add Post </a></li>
                </ul>
            </li>
        {{-- ============ End Post Page ================ --}}

            {{-- ============= About Page ================ --}}
            <li class="sub-menu">
                <a href="javascript:;" class="{{(request()->segment(1)=='abouts'? 'active':'')}} {{(request()->segment(1)=='skilldetails'? 'active':'')}}" >
                    <i class="fa fa-book"></i>
                    <span> About </span>
                </a>
                <ul class="sub">
                    <li class="{{(request()->segment(2)=='about-details'? 'active':'')}}"><a href="{{url('abouts/about-details')}}">About Slider  </a></li>
                    <li class="{{(request()->segment(2)=='about-view'? 'active':'')}}"> <a href="{{url('abouts/about-view')}}">View Slider Details </a></li>
                    <li class="sub-menu ">
                        <a href="" class="{{(request()->segment(2)=='project'? 'active':'')}}">Project</a>
                        <ul class="sub">
                            <li class="{{(request()->segment(3)=='add-project'? 'active':'')}}"><a href="{{url('abouts/project/add-project')}}">Add Project </a></li>

                            <li class="{{(request()->segment(3)=='project-view'? 'active':'')}}"><a href="{{url('abouts/project/project-view')}}">Project Data View </a></li>
                            
                        </ul>
                    </li>

                    <li class="sub-menu ">
                        <a href="" class="{{(request()->segment(2)=='skill'? 'active':'')}} {{(request()->segment(1)=='skilldetails'? 'active':'')}} ">Skill</a>
                        <ul class="sub">
                            <li class="{{(request()->segment(3)=='add-skill'? 'active':'')}}"><a href="{{url('abouts/skill/add-skill')}}">Add skill </a></li>

                            <li class="{{(request()->segment(3)=='skill-view'? 'active':'')}}"><a href="{{url('abouts/skill/skill-view')}}">Skill View </a></li>
                            
                            <li class="{{(request()->segment(3)=='add-skilldetails'? 'active':'')}}"><a href="{{url('abouts/skill/add-skilldetails')}}">Add Skill Details </a></li>
                            
                            <li class="{{(request()->segment(3)=='view-skilldetails'? 'active':'')}} {{(request()->segment(1)=='skilldetails'? 'active':'')}}"><a href="{{url('abouts/skill/view-skilldetails')}}">view Skill Details </a></li>

                        </ul>
                    </li>

                    <li class="sub-menu ">
                        <a href="" class="{{(request()->segment(2)=='team'? 'active':'')}} {{(request()->segment(1)=='memberdetails'? 'active':'')}} ">Team Slide </a>
                        <ul class="sub">
                            <li class="{{(request()->segment(3)=='add-teamdetails'? 'active':'')}}"><a href="{{url('abouts/team/add-teamdetails')}}">Add Team Detailes </a></li>
                            
                            <li class="{{(request()->segment(3)=='view-teamdetails'? 'active':'')}} {{(request()->segment(1)=='teamdetails'? 'active':'')}}"><a href="{{url('abouts/team/view-teamdetails')}}">View Team Details </a></li>

                            <li class="{{(request()->segment(3)=='add-member'? 'active':'')}}"><a href="{{url('abouts/team/add-member')}}">Add member </a></li>

                            <li class="{{(request()->segment(3)=='member-view'? 'active':'')}}"><a href="{{url('abouts/team/member-view')}}">Member View </a></li>
                            
                            

                        </ul>
                    </li>

                    <li class="sub-menu ">
                        <a href="" class="{{(request()->segment(2)=='job'? 'active':'')}} {{(request()->segment(2)=='imgslide'? 'active':'')}} ">About Content </a>
                        <ul class="sub">
                            <li class="{{(request()->segment(3)=='add-jobdetails'? 'active':'')}}"><a href="{{url('abouts/job/add-jobdetails')}}"> Add About Content </a></li>
                            
                            <li class="{{(request()->segment(3)=='view-jobdetails'? 'active':'')}} {{(request()->segment(1)=='jobdetails'? 'active':'')}}"><a href="{{url('abouts/job/view-jobdetails')}}">View Content Details </a></li>

                            <li class="{{(request()->segment(3)=='add-imgslide'? 'active':'')}}"><a href="{{url('abouts/imgslide/add-imgslide')}}">Image Slider </a></li>

                            <li class="{{(request()->segment(3)=='imgslide-view'? 'active':'')}}"><a href="{{url('abouts/imgslide/imgslide-view')}}"> View Image Slider </a></li>
                            
                            

                        </ul>
                    </li>
                    
                
                </ul>
            </li>
        {{-- ============= End About Page ============= --}}

            <li class="sub-menu">
                <a href="javascript:;" class="{{(request()->segment(1)=='view'? 'active':'')}}" >
                    <i class="fa fa-cogs"></i>
                    <span>View And Update</span>
                </a>
                <ul class="sub">
                    

                    <li class="{{(request()->segment(2)=='student-view'? 'active':'')}}"> <a href="{{url('view/student-view')}}">View Student Data </a></li>

                    <li class="{{(request()->segment(2)=='category-view'? 'active':'')}}"> <a href="{{url('view/category-view')}}">View Category Data </a></li>

                    <li class="{{(request()->segment(2)=='post-view'? 'active':'')}}"> <a href="{{url('view/post-view')}}">View Post Data </a></li>

                    
                </ul>
            </li>
            <!--multi level menu start-->
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-sitemap"></i>
                    <span>Multi level Menu</span>
                </a>
                <ul class="sub">
                    <li><a  href="javascript:;">Menu Item 1</a></li>
                    <li class="sub-menu">
                        <a  href="boxed_page.html">Menu Item 2</a>
                        <ul class="sub">
                            <li><a  href="javascript:;">Menu Item 2.1</a></li>
                            <li class="sub-menu">
                                <a  href="javascript:;">Menu Item 3</a>
                                <ul class="sub">
                                    <li><a  href="javascript:;">Menu Item 3.1</a></li>
                                    <li><a  href="javascript:;">Menu Item 3.2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!--multi level menu end-->

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->