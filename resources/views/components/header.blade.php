 <nav class="navbar navbar-expand-lg  shadow ">
     <div class="container-fluid">
         <a class="navbar-brand fw-bolder  " href="#">
             <img src="{{ asset('../img/logo leaves.png') }}" alt="Logo" height="50px">
         </a>
           <a class="navbar-brand nav-hover" href="#">Home</a>  

         <div class="dropdown borderless-btn nav-hover ">
             <a class="btn   dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                 aria-expanded="false">
                 Farmer
             </a>
             <ul class="dropdown-menu">
                 <li><a class="dropdown-item" href="#">Add Farmer</a></li>
                 <li><a class="dropdown-item" href="#">All Farmer</a></li>
             </ul>
         </div>
         <div class="dropdown borderless-btn nav-hover ">
            <a class="btn   dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Lahan
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Add Lahan</a></li>
                <li><a class="dropdown-item" href="#">All Lahan</a></li>
            </ul>
        </div>
          
         <a class="btn  dropdown-toggle nav-hover" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Monitor Device Lahan
         </a>
        
     </div>
 </nav>

 {{-- 
<div class="user-profile">
    <img  class=" " src="{{ asset('') }}" alt="">
    <h6>Profile</h6></div> --}}
