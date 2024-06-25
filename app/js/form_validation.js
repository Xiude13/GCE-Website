// function serializeForm(form) {
//     const formData = new FormData(form);
//     const serialized = {};

//     for (const [name, value] of formData) {
//         serialized[name] = value;
//     }

//     return serialized;
// }

// document.addEventListener("DOMContentLoaded", function() {
//     const form = document.getElementById("form");
//     const submitButton = document.getElementById("submit-btn");

//     form.addEventListener("submit", function(event) {
//         event.preventDefault();
//         var endpoint = '<?php echo admin_url("admin-ajax.php"); ?>';
//         var formData = serializeForm(form);
//         // Add your custom form validation logic here
//         // For example, you can check if required fields are filled
        
//         // Log the serialized form data to the console
//         console.log("Serialized Form Data:", formData);
        
//         // Simulate successful submission for demonstration
//         setTimeout(function() {
//             form.reset();
//             alert("🟢 Form submitted successfully! We'll be in touch with you.");
//         }, 1000);
//     });
// });
