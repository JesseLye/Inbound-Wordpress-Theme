<?php
/*
	Template Name: Contact
*/
?>

<?php get_header(); ?>

<div class="newcontainer">
	<div class="tweleve columns" style="margin-top: 50px; margin-bottom: 225px;">

		<form>
  <div class="row">
    <div class="six columns">
      <label for="exampleEmailInput">Your email</label>
      <input class="u-full-width" placeholder="test@mailbox.com" id="exampleEmailInput" type="email">
    </div>
    <div class="six columns">
      <label for="exampleRecipientInput">Reason for contacting</label>
      <select class="u-full-width" id="exampleRecipientInput">
        <option value="Option 1">Questions</option>
        <option value="Option 2">Admiration</option>
        <option value="Option 3">Shakespearean death threats</option>
      </select>
    </div>
  </div>
  <label style="margin-top: 20px; margin-bottom: 5px;" for="exampleMessage">Message</label>
  <textarea class="u-full-width" placeholder="Thou days shalt wither & perish 'ere such as thy reverent tree frog in a bed of salt!" id="exampleMessage" style="height: 270px; margin-bottom: 20px;"></textarea>
  <label class="example-send-yourself-copy">
    <input type="checkbox">
    <span class="label-body">Send a copy to yourself</span>
  </label>
  <input class="button-primary" value="Submit" type="submit">
</form>

</div>
</div>


<?php get_footer(); ?>
