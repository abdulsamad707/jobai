@extends('backend_app.admin.layouts.resume_template')
<style>
    .hidden{
        display: none;
    }
    .active{
        background: #073724;
        color:white;
        border-radius: 35px!important;
    }
    .tab{
        cursor: pointer;
    }
    label{
        font-size: 12px;
    }
    .btn-primary{
        background: #073724!important;
        border:0px!important;
    }
    .image-container {
            position: relative;
            display: inline-block;
        }

        .image-radio {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }

        .selected {
            border: 5px solid green;
        }

</style>
@php
    $user=Auth::user();
@endphp
@section('content')
<section class="content border-0" style="margin: 0px 0px 0px 80px!important">
<div class="resume_data">
<div class="container-fluid ">
    <div class="row">
        <div class="col-12">

    <ul class="list-unstyled list-inline" style="font-size: 12px;">
        <li class="list-inline-item px-3 tab mx-2 py-2  text-white fw-bold text-capitalize" style="border-radius: 35px!important;background:#B7BDBB;">{{$user->name}}</li>
        <li class="list-inline-item px-3 tab mx-2 active py-2" id="contact">Contact</li>
        <li class="list-inline-item px-3 tab mx-2 py-2"  id="experince">Experince</li>
        <li class="list-inline-item px-3 tab mx-2 py-2" id="project">Project</li>
        <li class="list-inline-item px-3 tab mx-2 py-2" id="education">Education</li>
        <li class="list-inline-item px-3 tab mx-2 py-2" id="certificate">Certificates</li>
        <li class="list-inline-item px-3 tab mx-2 py-2" id="coursework">Coursework</li>

        <li class="list-inline-item px-3 tab mx-2 py-2" id="skills">Skills</li>
        <li class="list-inline-item px-3 tab mx-2 py-2" id="summary" >Finish Up</li>
      </ul>

</div>
</div>
</div>
<form action="{{route('store-resume')}}" method="POST">
    @csrf
<div class="container-fluid py-5 w-75 m-auto  tab-content" id="contact-content">
    <div class="row">
        <div class="col-6">
            <label for="">Full Name</label>
            <input type="text" name="full_name" class="form-control bg-white py-2">
        </div>
        <div class="col-6">
            <label for="">Email Address</label>
            <input type="text" name="email_address" class="form-control bg-white py-2">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-6">
            <label for="">Phone Number</label>
            <input type="text" name="phone_no" class="form-control bg-white py-2">
        </div>
        <div class="col-6">
            <label for="">Linkdien</label>
            <input type="text" name="linkdien" class="form-control bg-white py-2">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-6">
            <label for="">Personal Website</label>
            <input type="text" name="personal_website" class="form-control bg-white py-2">
        </div>
        <div class="col-6">
            <label for="">Designation</label>
            <input type="text" name="designation" class="form-control bg-white py-2">
        </div>
        <div class="col-6">
            <label for="">Country</label>
            <input type="text" name="country" class="form-control bg-white py-2">
        </div>
        <div class="col-6">
            <label for="">Full Address</label>
            <input type="text" name="city" class="form-control bg-white py-2">
        </div>
    </div>

</div>
<div class="container-fluid py-5 hidden  w-75 m-auto  tab-content" id="experince-content">
  <div class="row">
    <div class="col-4"><img src="https://images.unsplash.com/opengraph/1x1.png?blend=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1474452926969-af7bfdb9ca39%3Fblend%3D000000%26blend-alpha%3D10%26blend-mode%3Dnormal%26crop%3Dfaces%252Cedges%26h%3D630%26mark%3Dhttps%253A%252F%252Fimages.unsplash.com%252Fopengraph%252Fsearch-input.png%253Fh%253D84%2526txt%253Dexperience%2526txt-align%253Dmiddle%25252Cleft%2526txt-clip%253Dellipsis%2526txt-color%253D000000%2526txt-pad%253D80%2526txt-size%253D40%2526txt-width%253D660%2526w%253D750%2526auto%253Dformat%2526fit%253Dcrop%2526q%253D60%26mark-align%3Dmiddle%252Ccenter%26mark-w%3D750%26w%3D1200%26auto%3Dformat%26fit%3Dcrop%26q%3D60%26ixid%3DM3wxMjA3fDB8MXxzZWFyY2h8NHx8ZXhwZXJpZW5jZXxlbnwwfHx8fDE3MDMzMjg3MjN8MA%26ixlib%3Drb-4.0.3&blend-w=1&h=630&mark=https%3A%2F%2Fimages.unsplash.com%2Fopengraph%2Flogo.png&mark-align=top%2Cleft&mark-pad=50&mark-w=64&w=1200&auto=format&fit=crop&q=60" class="w-100" style="border-radius: 15px;" alt="">

    <div class="border bg-white p-4 mt-4 rounded-3">
        <h6 class="border-bottom pb-4 text-dark fw-bold">Your Experinces </h6>
        <ul class="list-unstyled" id="experiencesList">



        </ul>
    </div>

    </div>
    <div class="col-8">
        <label for="" class="mt-3">WHAT WAS YOUR ROLE AT THE COMPANY?</label>
        <input type="text" class="form-control py-2" id="role">
        <label for="" class="mt-3">FOR WHICH COMPANY DID YOU WORK?
            *</label>
        <input type="text" class="form-control py-2" id="work">
       <div class="row">
        <div class="col-8"> <label for="" class="mt-3 d-block">HOW LONG WERE YOU WITH THE COMPANY?</label>
            <input type="date" class=" py-2 rounded-1 border"  id="date_from">

                <input type="date" class=" py-2 rounded-1  border" id="date_to">
            </div>
                <div class="col-4"> <label for="" class="mt-3">WHERE WAS THE COMPANY LOCATED?</label>
                    <input type="text" class="form-control py-2" id="country" placeholder="New York"></div>
       </div>
       <div class="row mt-3">
        <div class="col-12">
            <label for="" class="d-block ">WHAT DID YOU DO AT THE COMPANY?</label>
             <textarea name="" class="form-control border rounded-3" id="message" cols="30" rows="5"></textarea>
        </div>
       </div>
       <div class="row">
        <div class="col-12">
            <button id="submit" type="button" onclick="saveExperience()"   class="btn btn-primary text-white w-100 mt-3">Save To Experince List</button>
        </div>
       </div>
    </div>

  </div>
</div>
<div class="container-fluid py-5 hidden  w-75 m-auto  tab-content" id="project-content">
    <div class="row">
      <div class="col-4"><img src="https://www.liquidplanner.com/wp-content/uploads/2019/04/HiRes-17.jpg" class="w-100" style="border-radius: 15px;" alt="">

      <div class="border bg-white p-4 mt-4 rounded-3">
          <h6 class="border-bottom pb-4 text-dark fw-bold">Your Projects List </h6>
          <ul class="list-unstyled" id="projects-lists">



          </ul>
      </div>

      </div>
      <div class="col-8">
          <label for="" class="mt-3">GIVE YOUR PROJECT A TITLE
            *</label>
          <input type="text" class="form-control py-2" id="project_title">
          <label for="" class="mt-3">IN WHICH ORGANIZATION DID YOU DO YOUR PROJECT?
              *</label>
          <input type="text" class="form-control py-2"  id="project_work">
         <div class="row">
          <div class="col-8"> <label for="" class="mt-3 d-block">WHEN DID YOU DO YOUR PROJECT?</label>
              <input type="date" class=" py-2 rounded-1 border"  id="project_date_from" >

                  <input type="date" class=" py-2 rounded-1  border" id="project_date_to">
              </div>
                  <div class="col-4"> <label for="" class="mt-3" id="project_url">
                    PROJECT URL
                    </label>
                      <input type="text" class="form-control py-2"  id="project_url" placeholder="New York"></div>
         </div>
         <div class="row mt-3">
          <div class="col-12">
              <label for="" class="d-block ">NOW DESCRIBE WHAT YOU DID
                AI WRITER NOT READY
                </label>
               <textarea class="form-control border rounded-3"  id="project_msg" cols="30" rows="5"></textarea>
          </div>
         </div>
         <div class="row">
          <div class="col-12">
              <button class="btn btn-primary text-white w-100 mt-3" type="button" onclick="saveProjects()">Save To Projects List</button>
          </div>
         </div>
      </div>

    </div>
  </div>

  <div class="container-fluid py-5 hidden  w-75 m-auto  tab-content" id="education-content">
    <div class="row">
      <div class="col-4"><img src="https://st.depositphotos.com/1144687/1902/i/450/depositphotos_19024147-stock-photo-drawing-city-over-book.jpg" class="w-100" style="border-radius: 15px;" alt="">

      <div class="border bg-white p-4 mt-4 rounded-3">
          <h6 class="border-bottom pb-4 text-dark fw-bold">Your Education </h6>

         <ul class="list-unstyled" id="education_lists">


         </ul>
      </div>

      </div>
      <div class="col-8">
          <label for="" class="mt-3">WHAT IS YOUR DEGREE OR OTHER QUALIFICATION AND MAJOR?
            *
            </label>
          <input type="text" class="form-control py-2" id="major_degree">
          <label for="" class="mt-3">WHERE DID YOU EARN YOUR DEGREE/QUALIFICATION?
              *</label>
          <input type="text" class="form-control py-2" id="earn_qualificaiton">


        <label for="" class="mt-3">WHEN DID YOU EARN YOUR DEGREE/QUALIFICATION?</label>
        <input type="date" class="form-control py-2" id="date_qualification">

        <label for="" class="mt-3">GPA (IF APPLICABLE)</label>
        <input type="text" class="form-control py-2" id="gpa">

         <div class="row">
          <div class="col-12">
              <button class="btn btn-primary text-white w-100 mt-3" type="button" onclick="saveEducation()">Save To Education List</button>
          </div>
         </div>
      </div>

    </div>
  </div>


  <div class="container-fluid py-5 hidden  w-75 m-auto  tab-content" id="certificate-content">
    <div class="row">
      <div class="col-4"><img src="https://sertifier.com/blog/wp-content/uploads/2020/10/certificate-text-samples.jpg" class="w-100" style="border-radius: 15px;" alt="">

      <div class="border bg-white p-4 mt-4 rounded-3">
          <h6 class="border-bottom pb-4 text-dark fw-bold">Your Certificates </h6>

         <ul class="list-unstyled" id="certificates_list">


         </ul>
      </div>

      </div>
      <div class="col-8">
          <label for="" class="mt-3">WHAT WAS THE CERTIFICATE NAME?*
            </label>
          <input type="text" class="form-control py-2" id="certificate_name">
          <label for="" class="mt-3">WHERE DID YOU GET THE CERTIFICATE?</label>
          <input type="text" class="form-control py-2" id="certificate_place">
          <label for="" class="mt-3">WHEN DID YOU GET THE CERTIFICATE?</label>
        <input type="date" class="form-control py-2" id="certificate_date">

        <label for="" class="mt-3">HOW IS THE CERTIFICATE RELEVANT?</label>
        <input type="text" class="form-control py-2" id="certificate_relavent">

         <div class="row">
          <div class="col-12">
              <button class="btn btn-primary text-white w-100 mt-3" type="button" onclick="saveCertificate()">Save To Certificates List</button>
          </div>
         </div>
      </div>

    </div>
  </div>

  <div class="container-fluid py-5 hidden  w-75 m-auto  tab-content" id="coursework-content">
    <div class="row">
      <div class="col-4"><img src="https://sertifier.com/blog/wp-content/uploads/2020/10/certificate-text-samples.jpg" class="w-100" style="border-radius: 15px;" alt="">

      <div class="border bg-white p-4 mt-4 rounded-3">
          <h6 class="border-bottom pb-4 text-dark fw-bold">Your Courseworks </h6>
          <ul class="list-unstyled" id="courseworks_list">

          </ul>
      </div>

      </div>
      <div class="col-8">
          <label for="" class="mt-3">WHAT WAS THE COURSE NAME? *</label>
        <input type="text" class="form-control py-2" id="course_name">
        <label for="" class="mt-3">WHERE DID YOU TAKE THE COURSE?</label>
        <input type="text" class="form-control py-2" id="course_take">
        <label for="" class="mt-3">WHEN DID YOU TAKE THE COURSE?</label>
        <input type="text" class="form-control py-2" id="course_take_date">
        <label for="" class="mt-3">WHAT SKILL DID YOU USE?</label>
        <input type="text" class="form-control py-2" id="skill">
        <label for="" class="mt-3">HOW WAS THAT SKILL APPLIED?</label>
        <input type="text" class="form-control py-2" id="skill_applied">
         <div class="row">
          <div class="col-12">
              <button class="btn btn-primary text-white w-100 mt-3" type="button" onclick="savecoursework()">Save To Courework list</button>
          </div>
         </div>
      </div>

    </div>
  </div>




  <div class="container-fluid py-5 hidden  w-75 m-auto  tab-content" id="skills-content">
    <div class="row">
      <div class="col-4"><img src="https://t4.ftcdn.net/jpg/01/31/96/99/360_F_131969925_4npM7jqii8Dlo76mRROdD0r285Oojc8d.jpg" class="w-100" style="border-radius: 15px;" alt="">

      <div class="border bg-white p-4 mt-4 rounded-3">
          <h6 class="border-bottom pb-4 text-dark fw-bold" id="skills_list">Your Skills </h6>

      </div>

      </div>
      <div class="col-8">

         <div class="row mt-3">
          <div class="col-12">
              <label for="" class="d-block ">ENTER THE SKILLS YOU POSSESS</label>
               <input id="skills_posses" class="form-control border rounded-3 px-3" placeholder="Frontend:HTML CSS, Javascript" id="" cols="30" rows="5">
          </div>
         </div>
         <div class="row">
          <div class="col-12">
              <button class="btn btn-primary text-white w-100 mt-3" type="button" onclick="saveskills()">Save To Skills List</button>
          </div>
         </div>
      </div>

    </div>
  </div>

  <div class="container-fluid py-5 hidden  w-75 m-auto  tab-content" id="summary-content">
    <div class="row">
      <div class="col-12">
         <div class="row mt-3">
          <div class="col-12">
              <label for="" class="d-block ">Generate Proffesional Summary using keywords</label>
               <textarea name="description"  class="form-control border rounded-3 px-3" id="" cols="30" rows="5"></textarea>
          </div>
         </div>
         <div class="row">
          <div class="col-12">
              <button class="btn btn-primary text-white w-100 mt-3" id="save_summary" type="button">Save Summary Info</button>
          </div>
         </div>
      </div>

    </div>
  </div>
</section>
</div>
<div class="template_select container py-5" style="display:none;">
    <div class="row py-5">
        <div class="col-12">
            <h2 class="display-4 text-center fw-bold">Please Select Template Of the Resumse</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="image-container">
                <img src="https://marketplace.canva.com/EAFRuCp3DcY/1/0/1131w/canva-black-white-minimalist-cv-resume-f5JNR-K5jjw.jpg" class="w-50 d-block m-auto" alt="">
                <input type="radio" name="type" class="image-radio" value="type1" onclick="handleRadio(this)">
            </div>
        </div>
        <div class="col-6">
            <div class="image-container">
                <img src="https://marketplace.canva.com/EAE8mhdnw_g/2/0/1131w/canva-grey-clean-cv-resume-photo-pIsBixsev8I.jpg" class="w-50 d-block m-auto" alt="">
                <input type="radio" name="type" class="image-radio" value="type2" onclick="handleRadio(this)">
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary text-white mt-4 fs-4 w-50 d-block m-auto" type="submit">Submit</button>
        </div>
    </div>


</div>
<div class="toast  mt-2" id="success" style="position:fixed;top:0px;
right: 20px;
z-index: 9999;
top: 15px;" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
        <i class="fa-solid fa-circle-check text-success fs-5" style="margin-right:5px;"></i>
      <strong class="me-auto">Success</strong>
      <small class="mx-3">1 sec ago</small>

    </div>
    <div class="toast-body" id="toaster-body">

    </div>
  </div>
</form>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
     function handleRadio(radio) {
        const imageContainer = radio.parentNode;
        const images = document.querySelectorAll('.image-container img');

        images.forEach(image => {
            image.classList.remove('selected');
        });

        const selectedImage = imageContainer.querySelector('img');
        selectedImage.classList.add('selected');
    }

    $(document).ready(function() {

      displayExperiences();
      displayProjects();
      displayEducations();
      displaycertificates();
      displaycourseworks();
      displayskills();

      $("#save_summary").click(()=>{
        $('.template_select').show(500);
        $('.resume_data').hide();
      });

      $('.tab').click(function() {
        // Remove 'active' class from all tabs
        $('.tab').removeClass('active');

        // Add 'active' class to the clicked tab
        $(this).addClass('active');

        // Get the ID of the clicked tab
        var tabId = $(this).attr('id');

        // Hide all tab content
        $('.tab-content').addClass('hidden');

        // Show the corresponding tab content based on the clicked tab's ID
        $('#' + tabId + '-content').removeClass('hidden');
      });
    });

    function toastershow(value) {
  var successDiv = document.getElementById('success');
  $('#toaster-body').text(value) // Set the value for the success message

  successDiv.classList.add('show'); // Add the 'show' class to display the message

  setTimeout(function() {
    successDiv.classList.remove('show'); // Remove the 'show' class after 3 seconds
  }, 3000);
}


    function saveExperience() {
    // Get input values
    const role = document.getElementById('role').value;
    const work = document.getElementById('work').value;
    const dateFrom = document.getElementById('date_from').value;
    const dateTo = document.getElementById('date_to').value;
    const country = document.getElementById('country').value;
    const message = document.getElementById('message').value;

    // Create an object to represent the experience
    const experience = {
      role: role,
      work: work,
      dateFrom: dateFrom,
      dateTo: dateTo,
      country: country,
      message: message
    };
    let experiences = JSON.parse(sessionStorage.getItem('experiences')) || [];

// Add the new experience to the array
experiences.push(experience);

// Save the updated experiences array back to session storage
sessionStorage.setItem('experiences', JSON.stringify(experiences));

// Display the saved experiences in the list
displayExperiences();
toastershow('Experince has been added successfully')
}

function displayExperiences() {
  const experiencesList = document.getElementById('experiencesList');
  experiencesList.innerHTML = '';

  // Retrieve experiences from session storage
  let experiences = JSON.parse(sessionStorage.getItem('experiences')) || [];

  // Iterate through each experience and display it in the list
  experiences.forEach((experience, index) => {
    const listItem = document.createElement('li');
    listItem.textContent = `Experience ${index + 1}: ${experience.role} at ${experience.work} From ${experience.dateFrom} To ${experience.dateTo} Locate in ${experience.country}`;
    listItem.innerHTML += `<input name="experiences[]" type="hidden" value="${experience.role},${experience.work},${experience.dateFrom},${experience.dateTo},${experience.country},${experience.message}" />`;
    listItem.classList.add('text-dark', 'border-bottom', 'py-2'); // Adding classes to the created list item

    const deleteButton = document.createElement('button');


    deleteButton.classList.add('btn', 'btn-danger', 'ms-2');
    const icon = document.createElement('i');
    icon.classList.add('fas', 'fa-trash', 'text-white', 'fs-6');

    deleteButton.appendChild(icon);
    deleteButton.addEventListener('click', () => {
      // Remove the experience from the array
      experiences.splice(index, 1);
      toastershow('Experince has been deleted successfully')
      // Update session storage with the modified experiences array
      sessionStorage.setItem('experiences', JSON.stringify(experiences));
      // Redisplay the experiences list
      displayExperiences();
    });

    listItem.appendChild(deleteButton);
    experiencesList.appendChild(listItem);
  });
}

function saveProjects() {
    // Get input values
    const projectTitle = document.getElementById('project_title').value;
    const work = document.getElementById('project_work').value;
    const dateFrom = document.getElementById('project_date_from').value;
    const dateTo = document.getElementById('project_date_to').value;
    const projectUrl = document.getElementById('project_url').value;
    const message = document.getElementById('project_msg').value;

    // Create an object to represent the experience
    const project = {
      project_title: projectTitle,
      work: work,
      date_from: dateFrom,
      date_to: dateTo,
      project_url: projectUrl,
      message: message
    };
    let projects = JSON.parse(sessionStorage.getItem('projects')) || [];

// Add the new experience to the array
projects.push(project);

// Save the updated experiences array back to session storage
sessionStorage.setItem('projects', JSON.stringify(projects));

// Display the saved experiences in the list
displayProjects();
toastershow('Project has been added successfully')
}

      function displayProjects() {
  const project_data = document.getElementById('projects-lists');
  project_data.innerHTML = '';

  // Retrieve experiences from session storage
  let projects = JSON.parse(sessionStorage.getItem('projects')) || [];

  // Iterate through each experience and display it in the list
  projects.forEach((experience, index) => {
    const listItem = document.createElement('li');
    listItem.textContent = `Experience ${index + 1}: ${experience.project_title} at ${experience.work} From ${experience.date_from} To ${experience.date_to} ` ;
    listItem.classList.add('text-dark', 'border-bottom', 'py-2'); // Adding classes to the created list item
    listItem.innerHTML += `<input name="projects[]" type="hidden" value="${experience.project_title},${experience.work},${experience.date_from},${experience.date_to},${experience.message}" />`;
    const deleteButton = document.createElement('button');


    deleteButton.classList.add('btn', 'btn-danger', 'ms-2');
    const icon = document.createElement('i');
    icon.classList.add('fas', 'fa-trash', 'text-white', 'fs-6');

    deleteButton.appendChild(icon);
    deleteButton.addEventListener('click', () => {
      // Remove the experience from the array
      projects.splice(index, 1);
      toastershow('Project has been deleted successfully')

      // Update session storage with the modified experiences array
      sessionStorage.setItem('projects', JSON.stringify(projects));
      // Redisplay the experiences list
      displayProjects();
    });

    listItem.appendChild(deleteButton);
    project_data.appendChild(listItem);
  });
}


function saveEducation() {
    // Get input values
    const majorDegree = document.getElementById('major_degree').value;
    const dateOfQualification = document.getElementById('date_qualification').value;
    const earnQualificaiton = document.getElementById('earn_qualificaiton').value;
    const gpa = document.getElementById('gpa').value;


    // Create an object to represent the experience
    const education = {
      major_degree: majorDegree,
      date_of_qualification: dateOfQualification,
      earn_qualificaiton: earnQualificaiton,
      gpa: gpa,
    };
    let educations = JSON.parse(sessionStorage.getItem('educations')) || [];

// Add the new experience to the array
educations.push(education);

// Save the updated experiences array back to session storage
sessionStorage.setItem('educations', JSON.stringify(educations));
// Display the saved experiences in the list
displayEducations();
toastershow('Education has been added successfully')

}

function displayEducations(){
  const education_data = document.getElementById('education_lists');
  education_data.innerHTML = '';

  // Retrieve experiences from session storage
  let educations = JSON.parse(sessionStorage.getItem('educations')) || [];

  // Iterate through each experience and display it in the list
  educations.forEach((experience, index) => {
    const listItem = document.createElement('li');
    listItem.textContent = `Education ${index + 1}: ${experience.major_degree} ,Institute ${experience.earn_qualificaiton} in ${experience.earn_qualificaiton} GPA ${experience.gpa} ` ;
    listItem.innerHTML += `<input name="educations[]" type="hidden" value="${experience.major_degree},${experience.earn_qualificaiton},${experience.gpa}" />`;
    listItem.classList.add('text-dark', 'border-bottom', 'py-2'); // Adding classes to the created list item

    const deleteButton = document.createElement('button');


    deleteButton.classList.add('btn', 'btn-danger', 'ms-2');
    const icon = document.createElement('i');
    icon.classList.add('fas', 'fa-trash', 'text-white', 'fs-6');

    deleteButton.appendChild(icon);
    deleteButton.addEventListener('click', () => {
      // Remove the experience from the array
      educations.splice(index, 1);
      toastershow('Education has been deleted successfully')

      // Update session storage with the modified experiences array
      sessionStorage.setItem('educations', JSON.stringify(educations));
      // Redisplay the experiences list
      displayEducations();
    });

    listItem.appendChild(deleteButton);
    education_data.appendChild(listItem);
  });

}


function saveCertificate() {
    // Get input values
    const certificate_name = document.getElementById('certificate_name').value;
    const certificate_date = document.getElementById('certificate_date').value;
    const certificate_place = document.getElementById('certificate_place').value;
    const certificate_relavent = document.getElementById('certificate_relavent').value;

    // Create an object to represent the experience
    const certificate = {
     certificate_name: certificate_name,
     certificate_date: certificate_date,
     certificate_place: certificate_place,
     certificate_relavent: certificate_relavent,
    };


let certificates = JSON.parse(sessionStorage.getItem('certificates')) || [];

certificates.push(certificate);

sessionStorage.setItem('certificates', JSON.stringify(certificates));

displaycertificates();
toastershow('Certificate has been added successfully')

}

function displaycertificates(){
  const certificates_data = document.getElementById('certificates_list');
  certificates_data.innerHTML = '';

  // Retrieve experiences from session storage
  let certificates = JSON.parse(sessionStorage.getItem('certificates')) || [];

  // Iterate through each experience and display it in the list
  certificates.forEach((experience, index) => {
    const listItem = document.createElement('li');
    listItem.textContent = `Certificate No: ${index + 1}: Certificate Name: ${experience.certificate_name} ,Apply Date : ${experience.certificate_date}, From: ${experience.certificate_place} .Relevant: ${experience.certificate_relavent}` ;
    listItem.innerHTML += `<input name="projects[]" type="hidden" value="${experience.certificate_name},${experience.certificate_date},${experience.certificate_place},${experience.certificate_relavent}" />`;
    listItem.classList.add('text-dark', 'border-bottom', 'py-2'); // Adding classes to the created list item
    const deleteButton = document.createElement('button');

    deleteButton.classList.add('btn', 'btn-danger', 'ms-2');
    const icon = document.createElement('i');
    icon.classList.add('fas', 'fa-trash', 'text-white', 'fs-6');

    deleteButton.appendChild(icon);
    deleteButton.addEventListener('click', () => {
      // Remove the experience from the array
      certificates.splice(index, 1);
      toastershow('Certificates has been deleted successfully')

      // Update session storage with the modified experiences array
      sessionStorage.setItem('certificates', JSON.stringify(certificates));
      // Redisplay the experiences list
      displaycertificates();
    });

    listItem.appendChild(deleteButton);
    certificates_data.appendChild(listItem);
  });

}



function savecoursework() {

    const course_name = document.getElementById('course_name').value;
    const course_take = document.getElementById('course_take').value;
    const course_take_date = document.getElementById('course_take_date').value;
    const skill = document.getElementById('skill').value;
    const skill_applied = document.getElementById('skill_applied').value;


    const coursework = {
        course_name: course_name,
        course_take: course_take,
        course_take_date: course_take_date,
        skill: skill,
        skill_applied: skill_applied,
    };


let courseworks = JSON.parse(sessionStorage.getItem('courseworks')) || [];

courseworks.push(coursework);

sessionStorage.setItem('courseworks', JSON.stringify(courseworks));

displaycourseworks();
toastershow('courseworks has been added successfully')

}

function displaycourseworks(){
  const courseworks_data = document.getElementById('courseworks_list');
  courseworks_data.innerHTML = '';

  // Retrieve experiences from session storage
  let courseworks = JSON.parse(sessionStorage.getItem('courseworks')) || [];

  // Iterate through each experience and display it in the list
  courseworks.forEach((experience, index) => {
    const listItem = document.createElement('li');
    listItem.textContent = `Course No: ${index + 1}: Certificate Name: ${experience.course_name} , Take Course From : ${experience.course_take}, Date: ${experience.course_take_date} .Experince Skill: ${experience.skill} . skill applied ${experience.skill_applied}` ;
    listItem.innerHTML += `<input name="courses[]" type="hidden" value="${experience.course_name},${experience.course_take},${experience.course_take_date},${experience.skill}" />`;
    listItem.classList.add('text-dark', 'border-bottom', 'py-2'); // Adding classes to the created list item
    const deleteButton = document.createElement('button');
    deleteButton.classList.add('btn', 'btn-danger', 'ms-2');
    const icon = document.createElement('i');
    icon.classList.add('fas', 'fa-trash', 'text-white', 'fs-6');

    deleteButton.appendChild(icon);
    deleteButton.addEventListener('click', () => {
      // Remove the experience from the array
      courseworks.splice(index, 1);
      toastershow('courseworks has been deleted successfully')

      // Update session storage with the modified experiences array
      sessionStorage.setItem('courseworks', JSON.stringify(courseworks));
      // Redisplay the experiences list
      displaycoursework();
    });

    listItem.appendChild(deleteButton);
    courseworks_data.appendChild(listItem);
  });

}


// skills


function saveskills() {

const skill_name = document.getElementById('skills_posses').value;

const skill = {
    skill: skill_name,
};


let skills = JSON.parse(sessionStorage.getItem('skills')) || [];

skills.push(skill);

sessionStorage.setItem('skills', JSON.stringify(skills));

displayskills();
toastershow('Skill has been added successfully')

}

function displayskills(){
const skills_data = document.getElementById('skills_list');
skills_data.innerHTML = '';

// Retrieve experiences from session storage
let skills = JSON.parse(sessionStorage.getItem('skills')) || [];

// Iterate through each experience and display it in the list
skills.forEach((experience, index) => {
const listItem = document.createElement('li');
listItem.textContent = `${experience.skill}` ;
listItem.innerHTML += `<input name="skills[]" type="hidden" value="${experience.skill}" />`;
listItem.classList.add('text-dark', 'border-bottom', 'py-2'); // Adding classes to the created list item
const deleteButton = document.createElement('button');
deleteButton.classList.add('btn', 'btn-danger', 'ms-2');
const icon = document.createElement('i');
icon.classList.add('fas', 'fa-trash', 'text-white', 'fs-6');

deleteButton.appendChild(icon);
deleteButton.addEventListener('click', () => {
  // Remove the experience from the array
  skills.splice(index, 1);
  toastershow('skill has been deleted successfully')

  // Update session storage with the modified experiences array
  sessionStorage.setItem('skills', JSON.stringify(skills));
  // Redisplay the experiences list
  displayskills();
});

listItem.appendChild(deleteButton);
skills_data.appendChild(listItem);
});

}
  </script>
@endsection
