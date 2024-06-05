// ****************The patient chooses the doctor********

// let chooseDoctor = [];
// let meetDoctor = document.getElementById('meetDoctor');
// async function doctorList() {
//        const response = await fetch("http://3.15.233.117:8000/api/doctors");
//        const data = await response.json();
//        chooseDoctor = data;
//        console.log(chooseDoctor); 
//        chooseDoctors()
// }
// doctorList();

// function chooseDoctors(){

//    let doctorList=""
//    for(let i = 0; i < chooseDoctor.length; i++){
//     doctorList +=`
//     <div class="col-lg-4 col-sm-6 ">
//     <div class="choose__doctor">
//         <div class="choose__doctor__img">
//             <!-- <div class=" choose__doctor__overlay">
//             <a href="#"><button class="doctor__text__btn--btn">Get Appointment</button></a>  
//             </div> -->
//             <a href="doctor'spage.html"><img src="images/2.jpg" alt=""></a>

//         </div> <!-- choose__doctor__img -->
//         <div class="choose__doctor__text">
//         <h2><a href="doctor'spage.html">Dr. ${chooseDoctor[i].FirstName } ${chooseDoctor[i].MiddleName }</a></h2>

//             <p> ${chooseDoctor[i].Speciality}</p>
//         </div>
    
//     </div> <!-- choose__doctor -->
//                 </div> <!-- col-lg-4 col-sm-6  -->
    
//        `

//    }
//    meetDoctor.innerHTML=doctorList;
// }
// ************************************************************
// ************************************************************


// document.querySelector('.btn__app').addEventListener('click', async function(event) {
//     event.preventDefault(); // Prevent the default form submission

//     // Collect input field values
//     const name = document.getElementById('nameapp').value;
//     const email = document.getElementById('emailapp').value;
//     const phone = document.getElementById('textph').value;
//     const category = document.getElementById('control').value;
//     const doctor = document.getElementById('doctorapp').value;
//     const age = document.getElementById('ageapp').value;
//     const day = document.getElementById('control').value; // Assuming this select element has id 'control'

//     // Construct the JSON data object
//     const jsonData = {
//         Appointment_date: day, // Assuming 'day' represents the appointment date
//         Purpose: "اشعة مقطعية", // Assuming the purpose is always "اشعة مقطعية"
//         Doctor_id: doctor, // Assuming 'doctor' represents the selected doctor's ID
//         Patient_id: 2, // Assuming the patient ID is always 2
//         created_at: new Date().toISOString(), // Current date and time
//         updated_at: new Date().toISOString() // Current date and time
//     };

//     try {
//         // Send JSON data to the server using fetch
//         const response = await fetch('http://3.15.233.117:8000/api/appointments', {
//             method: 'POST',
//             headers: {
//                 'Content-Type': 'application/json'
//             },
//             body: JSON.stringify(jsonData)
//         });

//         if (response.ok) {
//             // Handle success response
//             console.log('Form data submitted successfully');
//             // Print a message to the console
//             console.log('Submit button clicked!');
//             console.log(jsonData);
//             history.pushState({}, '', 'http://3.15.233.117:8000/api/appointments'); 
//         } else {
//             // Handle error response
//             console.error('Form data submission failed:', response.status);
//         }
//     } catch (error) {
//         console.error('Error submitting form data:', error);
//     }
// });
// *********************** The patient creates a new account**********

// document.querySelector('#signUP').addEventListener('click', async function(event) {
//     event.preventDefault(); // Prevent the default form submission

//     // Collect input field values
//     const firstName = document.getElementById('firstNameUp').value;
//     const lastName = document.getElementById('lastNameUp').value;
//     const phoneNumber = document.getElementById('phoneNumberUP').value;
//     const email = document.getElementById('emailUP').value;
//     const password = document.getElementById('passwordSingup').value;


//     // Construct the JSON data object
//     const jsonData = {
//         Patient_id: 7, // Assuming 'Patient_id' is always 7 for registration
//         FirstName: firstName,
//         MiddleName: null, // Assuming there's no middle name in the registration form
//         LastName: lastName,
//         Phone: phoneNumber,
//         Email: email,
//         Password: password, 
//         Gender: "M", // Assuming the gender is always "M" for male
//         Country: "USA", // Assuming the country is always "USA" for registration
//         City: "New York", // Assuming the city is always "New York" for registration
//         Street: "123 Main St", // Assuming the street address is always "123 Main St" for registration
//         created_at: new Date().toISOString(), // Current date and time
//         updated_at: new Date().toISOString() // Current date and time
//     };

//     try {
//         // Send JSON data to the server using fetch
//         const response = await fetch('http://3.15.233.117:8000/api/patients', {
//             method: 'POST',
//             headers: {
//                 'Content-Type': 'application/json'
//             },
//             body: JSON.stringify(jsonData)
//         });

//         if (response.ok) {
//             // Handle success response
//             console.log('User registered successfully');
//             console.log(jsonData);
//             // Redirect to login page or show a success message
//         } else {
//             // Handle error response
//             console.error('User registration failed:', response.status);
//             // Show an error message to the user
//         }
//     } catch (error) {
//         console.error('Error registering user:', error);
//     }
// });
// // **********************************************************************
// document.querySelector('#btnLogin').addEventListener('click', async function(event) {
//     event.preventDefaulst(); // Prevent the default form submission

//     // Collect input field values
//     const emailLogin = document.getElementById('emailLogin').value;
//     const passwordLogin = document.getElementById('passwordLogin').value;

//     // Construct the JSON data object
//     const jsonData2 = {
//         email: emailLogin,
//         password: passwordLogin
//     };

//     try {
//         // Send login data to the server using fetch
//         const response = await fetch('http://3.15.233.117:8000/api/patients', {
//             method: 'POST',
//             headers: {
//                 'Content-Type': 'application/json'
//             },
//             body: JSON.stringify(jsonData2)
         
//         });

//         if (response.ok) {
//             // Handle successful login
//             console.log('Login successful');
//             console.log(jsonData2);
//             // Redirect to a specific page
//             // window.location.href = 'http://127.0.0.1:5500/index.html'; // Replace 'specific_page_url' with the URL of the specific page
//         } else {
//             // Handle failed login
//             console.error('Login failed:', response.status);
//             // Show error message to the user
//         }
//     } catch (error) {
//         console.error('Error logging in:', error);
//     }
// });
