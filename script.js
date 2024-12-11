// script.js

// Get the form and the table body
const form = document.getElementById("attendance-form");
const attendanceTableBody = document.getElementById("attendance-table").getElementsByTagName('tbody')[0];

// Function to handle form submission
form.addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form from submitting and page from refreshing

    // Get values from the form
    const batch = document.getElementById("batch").value;
    const subject = document.getElementById("subject").value;
    const regNo = document.getElementById("reg-no").value;
    const name = document.getElementById("name").value;
    const department = document.getElementById("department").value;
    const semester = document.getElementById("semester").value;
    const email = document.getElementById("email").value;
    const status = document.getElementById("status").value;

    // Create a new row in the table
    const newRow = attendanceTableBody.insertRow();

    // Insert cells for each data
    const cellBatch = newRow.insertCell(0);
    const cellSubject = newRow.insertCell(1);
    const cellRegNo = newRow.insertCell(2);
    const cellName = newRow.insertCell(3);
    const cellDepartment = newRow.insertCell(4);
    const cellSemester = newRow.insertCell(5);
    const cellEmail = newRow.insertCell(6);
    const cellStatus = newRow.insertCell(7);

    // Add the input values to the cells
    cellBatch.textContent = batch;
    cellSubject.textContent = subject;
    cellRegNo.textContent = regNo;
    cellName.textContent = name;
    cellDepartment.textContent = department;
    cellSemester.textContent = semester;
    cellEmail.textContent = email;
    cellStatus.textContent = status;

    // Clear the form fields after adding the attendance
    form.reset();
});
