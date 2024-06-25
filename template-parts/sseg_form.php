<?php
/* 
Template Name: SSEG Form
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php echo bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- displays site properly based on user's device -->
    <meta name="description" content="South Africa Solar Panels">
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="/images/favicon-32x32.png"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400&display=swap"
      rel="stylesheet"
    />
    <title><?php echo bloginfo('title'); ?></title>
    <?php wp_head(); ?>
  </head>

  <body>
    <h1>SSEG Application Form</h1>

    <form id="enquiry" method="POST" enctype="multipart/form-data">
			<!-- Title -->
			<div class="form-control">
			<label for="role" id="label-role">
				Title
			</label>
			<select name="Title" id="role">
            <option value="" disabled selected>Select Title</option>
            <option value="Mr">Mr</option>
            <option value="Sir">Sir</option>
            <option value="Mrs">Mrs</option>
            <option value="Ms">Ms</option>
            <option value="Miss">Miss</option>
            <option value="Dr">Dr</option>
            <option value="Prof">Prof</option>
            <option value="Rev">Rev</option>
            <option value="Hon">Hon</option>
            <option value="Lady">Lady</option>
            <option value="Capt">Capt</option>
            <option value="Major">Major</option>
            <option value="Lt. Col">Lt. Col</option>
            <option value="Col">Col</option>
            <option value="Cmdr">Cmdr</option>
            <option value="Chief">Chief</option>
            <option value="Justice">Justice</option>
            <option value="other">Other</option>
        </select>
		</div>

        <div class="form-control">
            <label for="name" id="label-name">
                Name
            </label>
            <input type="text" name="First Name" id="name" placeholder="Enter your First Name" />
        </div>

        <div class="form-control">
            <label for="surname" id="surname-label"> 
                Surname
            </label>
            <input type="text" name="Last_Name" id="surname" placeholder="Enter your Surname" /> 
        </div>

        <div class="form-control">
            <label for="email" id="label-email">
                Email
            </label>
            <input type="email" name="Email" id="email" placeholder="Enter your Email"  />
			
        </div>

		<!-- Cell Phone Contact-->
		<div class="form-control">
			<label for="cell" id="label-cell">
				Cell Phone Number
			</label>

			<!-- Input Type Phone-->
			<input type="text"
				name="Phone"
				id="cell"
				placeholder="Enter your Cell Phone Number" />
		</div>

		<!-- Work Phone Contact-->
		<div class="form-control">
			<label for="work" id="label-work">
				Work Contact Number
			</label>

			<!-- Input Type Work Phone-->
			<input type="text"
				name="Work_Phone"
				id="phone"
				placeholder="Enter your Work Contact Number" />
		</div>

		<div class="form-control">
			<label for="Partner No" id="label-Partner No">
				Business Partner No
			</label>

			<!-- Input Type Text -->
			<input type="text"
				name="Partner_No"
				id="Partner No"
				placeholder="Enter Your Business Partner No" />
		</div>
		<div class="form-control">
			<label for="Rates Account Number" id="label-Rates Account Number">
				Municipal Rates Account Number
			</label>

			<!-- Input Type Text -->
			<input type="text"
				name="Rates Account Number"
				id="Rates Account Number"
				placeholder="Municipal Rates Account Number"  />
		</div>

		<div class="form-control">
			<label for="Service Location" id="label-Service Location">
				Service Location* 
			</label>

			<!-- Input Type Text -->
			<input type="text" id="address" name="ERF Number" placeholder="ERF Number" style="margin-bottom: 10px;" />
			<input type="text" id="address" name="Physical Address" placeholder="Physical Address" style="margin-bottom: 10px;" />
			<input type="text" id="suburb" name="Suburb" placeholder="Suburb" style="margin-bottom: 10px;" /> 
			<input type="text" id="suburb" name="Postal Code" placeholder="Postal Code" />
		</div>

		<div class="form-control">
			<label for="Equipment" id="label-Equipment">
				Equipment (For Installer Use Only) 
			</label>

			<input type="text" id="address" name="Make Of Inverter" placeholder="Make Of Inverter" style="margin-bottom: 10px;" />
			<input type="text" id="address" name="Model Of Inverter" placeholder="Model Of Inverter" style="margin-bottom: 10px;" />
			<input type="text" id="suburb" name="Serial Number Of Inverter" placeholder="Serial Number Of Inverter" style="margin-bottom: 10px;" /> 
			<input type="text" id="suburb" name="Battery Make/Model And Qty" placeholder="Battery Make/Model And Qty" style="margin-bottom: 10px;" /> 
			<input type="text" id="suburb" name="Battery Capacity (Kwh)" placeholder="Battery Capacity (Kwh)" style="margin-bottom: 10px;" /> 
			<input type="text" id="suburb" name="Panel Rating (W) And Qty" placeholder="Panel Rating (W) And Qty"  />
		</div>

		<div class="form-control">
			<label for="Supply" id="label-Supply">
				Electricity Supply
			</label>

			<!-- Input Dropdown -->
			<div class="form-control">
				<label for="Number Of Phases" id="label-Number Of Phases">
					Main Cb Rating
				</label>
				<select name="Main Cb Rating" id="Phases">
				<option value="" disabled selected>Select Main Cb Rating</option>
				<option value="40">40</option>
				<option value="50">50</option>
				<option value="80a">80a</option>
				<option value="other">Other</option>
			</select>
			</div>

			

			<!-- Input Dropdown -->
			<div class="form-control">
				<label for="Number Of Phases" id="label-Number Of Phases">
				Number Of Phases
				</label>
				<select name="Number_Of_Phases" id="Phases">
				<option value="" disabled selected>Select Phase</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="other">Other</option>
			</select>
			</div>

			<input name="Meter Serial Number" type="text" id="suburb" placeholder="Meter Serial Number" style="margin-bottom: 10px;" /> 
			
		</div>

		<div class="form-control">
			<label for="comment">
				Comments Or Suggestions
			</label>

			<!-- multi-line text input control -->
			<textarea name="Comments" id="comment"
				placeholder="Enter your comment here">
			</textarea>
		</div>
		<!-- Document Upload -->
		<div class="form-control">
			
			<label for="doc1" id="label-document1">
				Property Owner Id Copy
			</label>
			<input type="file" name="Document1" id="document1" style="margin-bottom: 10px;" />
			
			<label for="doc2" id="label-document2">
				Proxy Id Copy + Proxy Letter (If Applicable)
			</label>
			<input type="file" name="Document2" id="document2" style="margin-bottom: 10px;" />

			<label for="doc3" id="label-document3">
				Latest Municipal Rates Bill/Account
			</label>
			<input type="file" name="Document3" id="document3" style="margin-bottom: 10px;" />

			<label for="doc4" id="label-document4">
				Certificate of Business/Trust/Body Corporate Registration (If Property Owner Is Not an Individual)
			</label>
			<input type="file" name="Document4" id="document4" style="margin-bottom: 10px;" />
		</div>

        <button type="submit" id="submit-btn" value="submit">
			<span id="submit-text">Submit</span>
			<span id="loading-spinner" style="display: none;">Loading...</span>
		</button>

		

    </form>

	<script>
		(function($) {
			$('#enquiry').submit(function(event) {
				event.preventDefault();

				// Toggle button state
				$('#submit-text').hide();
				$('#loading-spinner').show();
				console.log('Form submitted'); // Debugging statement
				var endpoint = '<?php echo admin_url('admin-ajax.php');?>';
				var form = $('#enquiry').serialize();
				console.log('Serialized form:', form); // Debugging statement
				var formData = new FormData();

				formData.append('action', 'enquiry');
				formData.append('nonce', '<?php echo wp_create_nonce('ajax_nonce');?>');
				formData.append('enquiry', form);

				$.ajax({
					url: endpoint, // Corrected the parameter name
					type: 'POST',
					data: formData,
					processData: false,
					contentType: false,
					success: function(response) {
						alert(response.data); // Display the response data in an alert
						console.log('AJAX success:', response);
						// Process the response from the server
						$('#enquiry').fadeOut(200);
						$('#enquiry').trigger('reset');
						$('#enquiry').fadeIn(1500);
						

						// Restore button state
						$('#submit-text').show();
						$('#loading-spinner').hide();
					},

					error: function(xhr, status, error) {
						
						console.log('AJAX error:', error);
						// Handle the error

						// Restore button state
						$('#submit-text').show();
                		$('#loading-spinner').hide();
					}
				});
			});
		})(jQuery);
	</script>

<?php wp_footer(); ?>
