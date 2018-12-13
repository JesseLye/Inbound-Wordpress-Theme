<?php
/*
	Template Name: Contact
*/
?>

<?php get_header(); ?>

<script>
	function _(id) { return document.getElementById(id); }
	function submitForm(){
		_("mybtn").disabled = true;
		_("status").innerHTML = 'please wait ...';
		var formdata = new FormData();
		formdata.append("n", _("exampleRecipientInput").value);
		formdata.append("e", _("exampleEmailInput").value);
		formdata.append("m", _("exampleMessage").value);
		// formdata.append("t", _("my_form").getAttribute("to"))
		var ajax = new XMLHttpRequest();
		ajax.open( "POST", "mail_parser.php" );
		ajax.onreadystatechange = function() {
			if(ajax.readyState == 4 && ajax.status == 200) {
				if(ajax.responseText == "success"){
					_("my_form").innerHTML = '<p>Thanks '+_("n").value+', your message has been sent.</p>';
				} else {
					// _("status").innerHTML = ajax.responseText;
					_("mybtn").disabled = false;
				}
			}
		}
		ajax.send( formdata );
	}
</script>

<div class="newcontainer">
	<div class="tweleve columns" style="margin-top: 50px; margin-bottom: 225px;">
		<form id="my_form" onsubmit="submitForm(); return false;">
  		<div class="row">
    		<div class="six columns">
		      <label for="exampleEmailInput">Your email</label>
		      <input class="u-full-width" placeholder="test@mailbox.com" id="exampleEmailInput" type="email" required>
		    </div>
    		<div class="six columns">
      		<label for="exampleRecipientInput">Reason for contacting</label>
		      <select class="u-full-width" id="exampleRecipientInput" required>
		        <option value="Option 1">Questions</option>
		        <option value="Option 2">Admiration</option>
		        <option value="Option 3">Shakespearean death threats</option>
		      </select>
    		</div>
  		</div>
		  <label style="margin-top: 20px; margin-bottom: 5px;" for="exampleMessage">Message</label>
		  <textarea class="u-full-width" placeholder="Thou days shalt wither & perish 'ere such as thy reverent tree frog in a bed of salt!" id="exampleMessage" style="height: 270px; margin-bottom: 20px;" required></textarea>
		  <!-- <label class="example-send-yourself-copy">
		    <input type="checkbox">
		    <span class="label-body">Send a copy to yourself</span>
		  </label> -->
		  <button id="mybtn" class="button-primary" type="submit">SUBMIT</button>
			<p id="status"></p>
		</form>
	</div>
</div>


<?php get_footer(); ?>
